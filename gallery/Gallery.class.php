<?php
/*##################################################
 *                               gallery.class.php
 *                            -------------------
 *   begin                : August 16, 2005
 *   copyright            : (C) 2005 Viarre R�gis
 *   email                : crowkait@phpboost.com
 *
 *
 ###################################################
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/

class Gallery
{	
	private $error = ''; //Gestion des erreurs.
	
	//Constructeur
	public function __construct() 
	{
	}
	
	//Redimensionnement
	public function Resize_pics($path, $width_max = 0, $height_max = 0)
	{
		global $LANG;
			
		if (file_exists($path))
		{	
			list($width_s, $height_s, $weight, $ext) = $this->Arg_pics($path);
			//Calcul des dimensions avec respect des proportions.
			list($width, $height) = $this->get_resize_properties($width_s, $height_s, $width_max, $height_max);
			
			$source = false;
			switch ($ext) //Cr�ation de l'image suivant l'extension.
			{
				case 'jpg':
				case 'jpeg':
					$source = @imagecreatefromjpeg($path);
					break;
				case 'gif':
					$source = @imagecreatefromgif ($path);
					break;
				case 'png':
					$source = @imagecreatefrompng($path);
					break;
				default: 
					$this->error = 'e_unsupported_format';
					$source = false;
			}
			
			if (!$source)
			{
				$path_mini = str_replace('pics', 'pics/thumbnails', $path);
				$this->_create_pics_error($path_mini, $width, $height);	
				$this->error = 'e_unabled_create_pics';
			}
			else
			{
				//Pr�paration de l'image redimensionn�e.
				if (!function_exists('imagecreatetruecolor'))
				{	
					$thumbnail = @imagecreate($width, $height);
					if ($thumbnail === false)				
						$this->error = 'e_unabled_create_pics';
				}
				else
				{	
					$thumbnail = @imagecreatetruecolor($width, $height);
					if ($thumbnail === false)				
						$this->error = 'e_unabled_create_pics';
				}
				
				// Make the background transparent
				imagecolortransparent($thumbnail, imagecolorallocate($thumbnail, 0, 0, 0));
				imagealphablending($thumbnail, false);
				imagesavealpha($thumbnail, true);
				
				//Redimensionnement.
				if (!function_exists('imagecopyresampled'))
				{	
					if (@imagecopyresized($thumbnail, $source, 0, 0, 0, 0, $width, $height, $width_s, $height_s) === false)				
						$this->error = 'e_error_resize';
				}
				else
				{	
					if (@imagecopyresampled($thumbnail, $source, 0, 0, 0, 0, $width, $height, $width_s, $height_s) === false)				
						$this->error = 'e_error_resize';
				}
			}
			
			//Cr�ation de l'image.
			if (empty($this->error))
				$this->create_pics($thumbnail, $source, $path, $ext);
		}
		else
		{
			$path_mini = str_replace('pics', 'pics/thumbnails', $path);
			$this->_create_pics_error($path_mini, $width_max, $height_max);	
			$this->error = 'e_unabled_create_pics';
		}
	}
	
	//Cr�ation de l'image.
	public function Create_pics($thumbnail, $source, $path, $ext)
	{
		// Make the background transparent
		imagecolortransparent($source, imagecolorallocate($source, 0, 0, 0));
		imagealphablending($source, false); // turn off the alpha blending to keep the alpha channel
		imagesavealpha($source, true);
		
		$path_mini = str_replace('pics', 'pics/thumbnails', $path);
		if (function_exists('imagegif') && $ext === 'gif') 
			imagegif ($thumbnail, $path_mini);
		elseif (function_exists('imagejpeg') && ($ext === 'jpg' || $ext === 'jpeg')) 
			imagejpeg($thumbnail, $path_mini, GalleryConfig::load()->get_quality());
		elseif (function_exists('imagepng')  && $ext === 'png') 
			imagepng($thumbnail, $path_mini);
		else 
			$this->error = 'e_no_graphic_support';

		switch ($ext) //Cr�ation de l'image suivant l'extension.
		{
			case 'jpg':
			case 'jpeg':
				@imagejpeg($source, $path);
				break;
			case 'gif':
				@imagegif ($source, $path);
				break;
			case 'png':
				@imagepng($source, $path);
				break;
			default: 
				$this->error = 'e_no_graphic_support';
		}
	}

	//Incrustation du logo (possible en transparent si jpg).
	public function Incrust_pics($path)
	{
		global $LANG;
		$config = GalleryConfig::load();
		
		if ($config->is_logo_enabled() && is_file($config->get_logo())) //Incrustation du logo.
		{
			list($width_s, $height_s, $weight_s, $ext_s) = $this->Arg_pics($config->get_logo());
			list($width, $height, $weight, $ext) = $this->Arg_pics($path);
			
			if ($width_s <= $width && $height_s <= $height)
			{
				switch ($ext_s) //Cr�ation de l'image suivant l'extension.
				{
					case 'jpg':
					case 'jpeg':
						$source = @imagecreatefromjpeg($config->get_logo());
						break;
					case 'gif':
						$source = @imagecreatefromgif ($config->get_logo());
						break;
					case 'png':
						$source = @imagecreatefrompng($config->get_logo());
						break;
					default: 
						$this->error = 'e_unsupported_format';
						$source = false;
				}
				
				if (!$source)
				{
					$path_mini = str_replace('pics', 'pics/thumbnails', $path);
					list($width_mini, $height_mini, $weight_mini, $ext_mini) = $this->Arg_pics($path_mini);
					$this->_create_pics_error($path_mini, $width_mini, $height_mini);	
					$this->error = 'e_unabled_create_pics';
				}
				else
				{
					switch ($ext) //Cr�ation de l'image suivant l'extension.
					{
						case 'jpg':
						case 'jpeg':
							$destination = @imagecreatefromjpeg($path);
							break;
						case 'gif':
							$destination = @imagecreatefromgif ($path);
							break;
						case 'png':
							$destination = @imagecreatefrompng($path);
							break;
						default: 
							$this->error = 'e_unsupported_format';
					}
					
					if (function_exists('imagecopymerge'))
					{
						// On veut placer le logo en bas � droite, on calcule les coordonn�es o� on doit placer le logo sur la photo
						$destination_x = $width - $width_s - $config->get_logo_horizontal_distance();
						$destination_y =  $height - $height_s - $config->get_logo_vertical_distance();
						
						if (@imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $width_s, $height_s, (100 - $config->get_logo_transparency())) === false)
							$this->error = 'e_unabled_incrust_logo';
						
						// Make the background transparent
						imagecolortransparent($destination, imagecolorallocate($destination, 0, 0, 0));
						imagealphablending($destination, false); // turn off the alpha blending to keep the alpha channel
						imagesavealpha($destination, true);
						
						switch ($ext) //Cr�ation de l'image suivant l'extension.
						{
							case 'jpg':
							case 'jpeg':
								imagejpeg($destination);
								break;
							case 'gif':
								imagegif ($destination);
								break;
							case 'png':
								imagepng($destination);
								break;
							default: 
								$this->error = 'e_unabled_create_pics';
						}
					}
					else
						$this->error = 'e_unabled_incrust_logo';
				}
			}
			else
				readfile($path); //On affiche simplement.
		}
		else
			readfile($path); //On affiche simplement.
	}
	
	//Insertion base de donn�e
	public function Add_pics($idcat, $name, $path, $user_id)
	{
		list($width, $height, $weight, $ext) = $this->Arg_pics('pics/' . $path);
		$result = PersistenceContext::get_querier()->insert(GallerySetup::$gallery_table, array('idcat' => $idcat, 'name' => $name, 'path' => $path, 'width' => $width, 'height' => $height, 'weight' => $weight, 'user_id' => $user_id, 'aprob' => 1, 'views' => 0, 'timestamp' => time()));
		return $result->get_last_inserted_id();
	}
	
	//Supprime une image
	public function Del_pics($id_pics)
	{
		try {
			$info_pics = PersistenceContext::get_querier()->select_single_row(GallerySetup::$gallery_table, array('path', 'idcat', 'aprob'), "WHERE id = :id", array('id' => $id_pics));
		} catch (RowNotFoundException $e) {
			$error_controller = PHPBoostErrors::unexisting_element();
			DispatchManager::redirect($error_controller);
		}
		
		if (!empty($info_pics['path']))
		{
			PersistenceContext::get_querier()->delete(PREFIX . 'gallery', 'WHERE id=:id', array('id' => $id_pics));
			
			//Suppression physique.
			$file = new File(PATH_TO_ROOT . '/gallery/pics/' . $info_pics['path']);
			$file->delete();
			
			$file = new File(PATH_TO_ROOT . '/gallery/pics/thumbnails/' . $info_pics['path']);
			$file->delete();

			NotationService::delete_notes_id_in_module('gallery', $id_pics);
			
			CommentsService::delete_comments_topic_module('gallery', $id_pics);
		}
	}
	
	//Renomme une image.
	public function Rename_pics($id_pics, $name, $previous_name)
	{
		PersistenceContext::get_querier()->update(GallerySetup::$gallery_table, array('name' => $name), 'WHERE id = :id', array('id' => $id_pics));
		return stripslashes((strlen(TextHelper::html_entity_decode($name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($name), 0, 22)) . PATH_TO_ROOT . '.' : $name);
	}
	
	//Approuve une image.
	public function Aprob_pics($id_pics)
	{
		try {
			$aprob = PersistenceContext::get_querier()->get_column_value(GallerySetup::$gallery_table, 'aprob', "WHERE id = :id", array('id' => $id_pics));
		} catch (RowNotFoundException $e) {
			$error_controller = PHPBoostErrors::unexisting_element();
			DispatchManager::redirect($error_controller);
		}
		
		if ($aprob)
		{
			PersistenceContext::get_querier()->update(GallerySetup::$gallery_table, array('aprob' => 0), 'WHERE id = :id', array('id' => $id_pics));
		}
		else
		{
			PersistenceContext::get_querier()->update(GallerySetup::$gallery_table, array('aprob' => 1), 'WHERE id = :id', array('id' => $id_pics));
		}
		
		return $aprob;
	}
	
	//D�placement d'une image.
	public function Move_pics($id_pics, $id_move)
	{
		PersistenceContext::get_querier()->update(GallerySetup::$gallery_table, array('idcat' => $id_move), 'WHERE id = :id', array('id' => $id_pics));
	}
	
	//V�rifie si le membre peut uploader une image
	public function Auth_upload_pics($user_id, $level)
	{
		$config = GalleryConfig::load();
		
		switch ($level)
		{
			case 2:
			$pics_quota = 10000;
			break;
			case 1:
			$pics_quota = $config->get_moderator_max_pics_number();
			break;
			default:
			$pics_quota = $config->get_member_max_pics_number();
		}

		if ($this->get_nbr_upload_pics($user_id) >= $pics_quota)
			return false;
			
		return true;
	}
	
	//Arguments de l'image, hauteur, largeur, extension.
	public function Arg_pics($path)
	{
		global $LANG;
		
		//V�rification du chargement de la librairie GD.
		if (!@extension_loaded('gd')) 
		{
			$controller = new UserErrorController(LangLoader::get_message('error', 'status-messages-common'), 
                $LANG['e_no_gd'], UserErrorController::FATAL);
            DispatchManager::redirect($controller);
		}
		
		if (function_exists('getimagesize')) 
		{
			list($width, $height, $type) = @getimagesize($path);
			$weight = @filesize($path);
			$weight = !empty($weight) ? $weight : 0;
			
			//On prepare les valeurs de remplacement, pour d�t�rminer le type de l'image.
			$array_type = array( 1 => 'gif', 2 => 'jpg', 3 => 'png', 4 => 'jpeg');
			if (isset($array_type[$type]))
				return array($width, $height, $weight, $array_type[$type]);
			else
				$this->error = 'e_unsupported_format';
		}
		else
		{
			$controller = new UserErrorController(LangLoader::get_message('error', 'status-messages-common'), $LANG['e_no_getimagesize'], UserErrorController::FATAL);
			DispatchManager::redirect($controller);
		}
	}
	
	//Compte le nombre d'images upload�e par un membre.
	public function get_nbr_upload_pics($user_id)
	{
		return PersistenceContext::get_querier()->count(GallerySetup::$gallery_table, 'WHERE user_id=:user_id', array('user_id' => $user_id));
	}
	
	//Calcul des dimensions avec respect des proportions.
	public function get_resize_properties($width_s, $height_s, $width_max = 0, $height_max = 0)
	{
		$config = GalleryConfig::load();
		
		$width_max = ($width_max == 0) ? $config->get_mini_max_width() : $width_max;
		$height_max = ($height_max == 0) ? $config->get_mini_max_height() : $height_max;
		if ($width_s > $width_max || $height_s > $height_max) 
		{
			if ($width_s > $height_s)
			{
				$ratio = $width_s / $height_s;
				$width = $width_max;
				$height = ceil($width / $ratio);
			}
			else
			{
				$ratio = $height_s / $width_s;
				$height = $height_max;
				$width = ceil($height / $ratio);
			}
		}
		else
		{
			$width = $width_s;
			$height = $height_s;
		}
		
		return array($width, $height);
	}
	
	//Header image.
	public function Send_header($ext)
	{
		global $LANG;
		
		switch ($ext)
		{
			case 'png':
				$header = header('Content-type: image/png');
				break;
			case 'gif':
				$header = header('Content-type: image/gif');
				break;
			case 'jpg':
			case 'jpeg':
				$header = header('Content-type: image/jpeg');
				break;
			default:
				$header = '';
				$this->error = $LANG['e_unable_display_pics'];
		}
		return $header;
	}
	
	//Vidange des miniatures du FTP et de la bdd => r�g�n�r�e plus tard lors des affichages..
	public function Clear_cache()
	{
		//On recup�re les dossier des th�mes contenu dans le dossier images/smiley.
		$thumb_folder_path = new Folder('./pics/thumbnails/');
		foreach ($thumb_folder_path->get_files('`\.(png|jpg|jpeg|bmp|gif)$`i') as $thumbs)
			$this->delete_file('./pics/thumbnails/' . $thumbs->get_name());
	}
	
	//Suppression d'une image.
	public function delete_file($path)
	{
		if (function_exists('unlink'))
			return @unlink($path); //On supprime le fichier.
		else //Fonction d�sactiv�e.
		{
			$this->error = 'e_delete_thumbnails';
			return false;
		}
	}
	
	//Cr�ation de l'image d'erreur
	private function _create_pics_error($path, $width, $height)
	{
		global $LANG; 
		$config = GalleryConfig::load();
		
		$width = ($width == 0) ? $config->get_mini_max_width() : $width;
		$height = ($height == 0) ? $config->get_mini_max_height() : $height;
			
		$font = PATH_TO_ROOT . '/kernel/data/fonts/impact.ttf';
		$font_size = 12;

		$thumbnail = @imagecreate($width, $height);
		if ($thumbnail === false)
			$this->error = 'e_unabled_create_pics';
		$background = @imagecolorallocate($thumbnail, 255, 255, 255);
		$text_color = @imagecolorallocate($thumbnail, 0, 0, 0);

		//Centrage du texte.
		$array_size_ttf = imagettfbbox($font_size, 0, $font, $LANG['e_error_img']);
		$text_width = abs($array_size_ttf[2] - $array_size_ttf[0]);
		$text_height = abs($array_size_ttf[7] - $array_size_ttf[1]);
		$text_x = ($width/2) - ($text_width/2);
		$text_y = ($height/2) + ($text_height/2);

		//Ecriture du code.
		imagettftext($thumbnail, $font_size, 0, $text_x, $text_y, $text_color, $font, $LANG['e_error_img']);
		@imagejpeg($thumbnail, $path, 75);
	}
	
	public function get_error() { return $this->error; }
}
?>