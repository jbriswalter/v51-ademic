<?php
/*##################################################
 *                             Uploads.class.php
 *                            -------------------
 *   begin                : April 18, 2007
 *   copyright            : (C) 2007 Viarre R�gis
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

/**
 * @package {@package}
 *
 */

class Uploads
{
	const EMPTY_FOLDER = true;
	const ADMIN_NO_CHECK = true;
	
	private static $db_querier;
	
	public static function __static()
	{
		self::$db_querier = PersistenceContext::get_querier();
	}
	
	//Ajout d'un dossier virtuel
	public static function Add_folder($id_parent, $user_id, $name)
	{
		$check_folder = self::$db_querier->count(DB_TABLE_UPLOAD_CAT, 'WHERE name = :name AND id_parent = :id_parent AND user_id = :user_id', array('name' => $name, 'id_parent' => $id_parent, 'user_id' => $user_id));
		if (!empty($check_folder) || preg_match('`/|\.|\\\|"|<|>|\||\?`', stripslashes($name)))
			return 0;
			
		$result = self::$db_querier->insert(DB_TABLE_UPLOAD_CAT, array('id_parent' => $id_parent, 'user_id' => $user_id, 'name' => $name));
		
		return $result->get_last_inserted_id();
	}	
	
	//Suppression recursive des dossiers et fichiers du membre.
	public static function Empty_folder_member($user_id)
	{
		//Suppression des fichiers.
		$result = self::$db_querier->select("SELECT path
		FROM " . DB_TABLE_UPLOAD . " 
		WHERE user_id = :user_id", array(
			'user_id' => $user_id
		));
		while($row = $result->fetch())
		{
			$file = new File(PATH_TO_ROOT . '/upload/' . $row['path']);
			$file->delete();
		}
		$result->dispose();
		
		//Suppression des entr�es dans la base de donn�es
		self::$db_querier->delete(DB_TABLE_UPLOAD_CAT, 'WHERE user_id = :user_id', array('user_id' => $user_id));
		self::$db_querier->delete(DB_TABLE_UPLOAD, 'WHERE user_id = :user_id', array('user_id' => $user_id));
	}
	
	//Suppression recursive du dossier et de son contenu.
	public static function Del_folder($id_folder)
	{
		//Suppression des fichiers.
		$result = self::$db_querier->select("SELECT path
		FROM " . DB_TABLE_UPLOAD . " 
		WHERE idcat = :idcat", array(
			'idcat' => $id_folder
		));
		while ($row = $result->fetch())
		{
			$file = new File(PATH_TO_ROOT . '/upload/' . $row['path']);
			$file->delete();
		}
		$result->dispose();
		
		//Suppression des entr�es dans la base de donn�es
		self::$db_querier->delete(DB_TABLE_UPLOAD_CAT, 'WHERE id = :id', array('id' => $id_folder));
		
		self::$db_querier->delete(DB_TABLE_UPLOAD, 'WHERE idcat = :idcat', array('idcat' => $id_folder));
		
		$result = self::$db_querier->select("SELECT id 
		FROM " . DB_TABLE_UPLOAD_CAT . " 
		WHERE id_parent = :id", array(
			'id' => $id_folder
		));
		while ($row = $result->fetch())
		{
			if (!empty($row['id']))
				self::Del_folder($row['id']);
		}
		$result->dispose();
	}
	
	//Suppression d'un fichier
	public static function Del_file($id_file, $user_id, $admin = false)
	{	
		if ($admin) //Administration, on ne v�rifie pas l'appartenance.
		{
			$name = self::$db_querier->get_column_value(DB_TABLE_UPLOAD, 'path', 'WHERE id = :id', array('id' => $id_file));
			self::$db_querier->delete(DB_TABLE_UPLOAD, 'WHERE id = :id', array('id' => $id_file));
			
			$file = new File(PATH_TO_ROOT . '/upload/' . $name);
			$file->delete();

			return '';
		}
		else
		{
			$check_id_auth = self::$db_querier->get_column_value(DB_TABLE_UPLOAD, 'user_id', 'WHERE id = :id', array('id' => $id_file));
			//Suppression d'un fichier.
			if ($check_id_auth == $user_id)
			{
				$name = self::$db_querier->get_column_value(DB_TABLE_UPLOAD, 'path', 'WHERE id = :id', array('id' => $id_file));
				self::$db_querier->delete(DB_TABLE_UPLOAD, 'WHERE id = :id', array('id' => $id_file));
				
				$file = new File(PATH_TO_ROOT . '/upload/' . $name);
				$file->delete();
				
				return '';
			}
			return 'e_auth';
		}
	}
	
	//Renomme un dossier virtuel
	public static function Rename_folder($id_folder, $name, $previous_name, $user_id, $admin = false)
	{
		$info_folder = array(
			'id_parent' => '',
			'user_id' => ''
		);
		try {
			$info_folder = self::$db_querier->select_single_row(PREFIX . "upload_cat", array("id_parent", "user_id"), 'WHERE id=:id', array('id' => $id_folder));
		} catch (RowNotFoundException $e) {}
		
		//V�rification de l'unicit� du nom du dossier.
		$check_folder = self::$db_querier->count(DB_TABLE_UPLOAD_CAT, 'WHERE id_parent = :id_parent AND name = :name AND id <> :id AND user_id = :user_id', array('id_parent' => $info_folder['id_parent'], 'name' => $name, 'id' => $id_folder, 'user_id' => $user_id));
		if ($check_folder > 0 || preg_match('`/|\.|\\\|"|<|>|\||\?`', stripslashes($name)))
			return '';
		
		if ($admin) //Administration, on ne v�rifie pas l'appartenance.
		{
			self::$db_querier->update(DB_TABLE_UPLOAD_CAT, array('name' => $name), 'WHERE id = :id', array('id' => $id_folder));
			return stripslashes((strlen(TextHelper::html_entity_decode($name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($name), 0, 22)) . '...' : $name);
		}
		else
		{
			if ($user_id == $info_folder['user_id'])
			{
				self::$db_querier->update(DB_TABLE_UPLOAD_CAT, array('name' => $name), 'WHERE id = :id', array('id' => $id_folder));
				return stripslashes((strlen(TextHelper::html_entity_decode($name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($name), 0, 22)) . '...' : $name);
			}
		}
		return stripslashes((strlen(TextHelper::html_entity_decode($previous_name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($previous_name), 0, 22)) . '...' : $previous_name);
	}
	
	//Renomme un fichier virtuel
	public static function Rename_file($id_file, $name, $previous_name, $user_id, $admin = false)
	{
		$info_cat = array(
			'idcat' => '',
			'user_id' => ''
		);
		try {
			$info_cat = self::$db_querier->select_single_row(PREFIX . "upload", array("idcat", "user_id"), 'WHERE id=:id', array('id' => $id_file));
		} catch (RowNotFoundException $e) {}
		
		//V�rification de l'unicit� du nom du fichier.
		$check_file = self::$db_querier->count(DB_TABLE_UPLOAD, 'WHERE idcat = :idcat AND name = :name AND id <> :id AND user_id = :user_id', array('idcat' => $info_cat['idcat'], 'name' => $name, 'id' => $id_file, 'user_id' => $user_id));
		if ($check_file > 0 || preg_match('`/|\\\|"|<|>|\||\?`', stripslashes($name)))
			return '/';
			
		if ($admin) //Administration, on ne v�rifie pas l'appartenance.
		{
			self::$db_querier->update(DB_TABLE_UPLOAD, array('name' => $name), 'WHERE id = :id', array('id' => $id_file));
			return stripslashes((strlen(TextHelper::html_entity_decode($name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($name), 0, 22)) . '...' : $name);
		}
		else
		{
			if ($user_id == $info_cat['user_id'])
			{
				self::$db_querier->update(DB_TABLE_UPLOAD, array('name' => $name), 'WHERE id = :id', array('id' => $id_file));
				return stripslashes((strlen(TextHelper::html_entity_decode($name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($name), 0, 22)) . '...' : $name);
			}
		}
		return stripslashes((strlen(TextHelper::html_entity_decode($previous_name)) > 22) ? TextHelper::htmlentities(substr(TextHelper::html_entity_decode($previous_name), 0, 22)) . '...' : $previous_name);
	}
		
	//D�placement dun dossier.
	public static function Move_folder($move, $to, $user_id, $admin = false)
	{
		if ($admin) //Administration, on ne v�rifie pas l'appartenance.
		{
			//Changement de propri�taire du fichier.
			$change_user_id = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'user_id', 'WHERE id = :id', array('id' => $to));
			if (empty($change_user_id))
				$change_user_id = -1;
			if ($to != $move)
				self::$db_querier->update(DB_TABLE_UPLOAD_CAT, array('id_parent' => $to, 'user_id' => $change_user_id), 'WHERE id = :id', array('id' => $move));
			return '';
		}
		else
		{
			if ($to == 0) //D�placement dossier racine du membre.
			{
				$get_mbr_folder = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'id', 'WHERE user_id = :user_id', array('user_id' => $user_id));
				self::$db_querier->update(DB_TABLE_UPLOAD_CAT, array('id_parent' => $get_mbr_folder), 'WHERE id = :id AND user_id = :user_id', array('id' => $move, 'user_id' => $user_id));
				return '';
			}
			
			//V�rification de l'appartenance du dossier de destination.
			$check_user_id_move = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'user_id', 'WHERE id = :id', array('id' => $move));
			$check_user_id_to = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'user_id', 'WHERE id = :id', array('id' => $to));
			if ($user_id == $check_user_id_move && $user_id == $check_user_id_to)
			{
				self::$db_querier->update(DB_TABLE_UPLOAD_CAT, array('id_parent' => $to), 'WHERE id = :id AND user_id = :user_id', array('id' => $move, 'user_id' => $user_id));
				return '';
			}
			else
				return 'e_auth';
		}
	}
	
	//D�placement dun fichier.
	public static function Move_file($move, $to, $user_id, $admin = false)
	{
		if ($admin) //Administration, on ne v�rifie pas l'appartenance.
		{
			//Changement de propri�taire du fichier.
			$change_user_id = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'user_id', 'WHERE id = :id', array('id' => $to));
			if (empty($change_user_id))
				$change_user_id = -1;
			self::$db_querier->update(DB_TABLE_UPLOAD, array('idcat' => $to, 'user_id' => $change_user_id), 'WHERE id = :id', array('id' => $move));
			return '';
		}
		else
		{
			if ($to == 0) //D�placement dossier racine du membre.
			{
				$get_mbr_folder = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'id', 'WHERE user_id = :user_id AND id_parent = 0', array('user_id' => $user_id));
				self::$db_querier->update(DB_TABLE_UPLOAD, array('idcat' => $get_mbr_folder), 'WHERE id = :id AND user_id = :user_id', array('id' => $move, 'user_id' => $user_id));
				return '';
			}

			//V�rification de l'appartenance du dossier de destination.
			$check_user_id_move = self::$db_querier->get_column_value(DB_TABLE_UPLOAD, 'user_id', 'WHERE id = :id', array('id' => $move));
			$check_user_id_to = self::$db_querier->get_column_value(DB_TABLE_UPLOAD_CAT, 'user_id', 'WHERE id = :id', array('id' => $to));
			if ($user_id == $check_user_id_move && $user_id == $check_user_id_to)
			{
				self::$db_querier->update(DB_TABLE_UPLOAD, array('idcat' => $to), 'WHERE id = :id AND user_id = :user_id', array('id' => $move, 'user_id' => $user_id));
				return '';
			}
			else
				return 'e_auth';
		}
	}
	
	//Fonction qui d�termine toutes les sous-cat�gories d'une cat�gorie (r�cursive)
	public static function Find_subfolder($array_folders, $id_cat, &$array_child_folder)
	{
		//On parcourt les cat�gories et on d�terminer les cat�gories filles
		foreach ($array_folders as $key => $value)
		{
			if ($value == $id_cat)
			{
				$array_child_folder[] = $key;
				//On rappelle la fonction pour la cat�gorie fille
				self::Find_subfolder($array_folders, $key, $array_child_folder);
			}
		}
	}
	
	//R�cup�ration du r�pertoire courant (administration).
	public static function get_admin_url($id_folder, $pwd, $member_link = '')
	{
		$parent_folder = array(
			'id_parent' => '',
			'name' => '',
			'user_id' => ''
		);
		try {
			$parent_folder = self::$db_querier->select_single_row(PREFIX . "upload_cat", array("id_parent", "name", "user_id"), 'WHERE id=:id', array('id' => $id_folder));
		} catch (RowNotFoundException $e) {}
		
		if (!empty($parent_folder['id_parent']))
		{	
			$pwd .= self::get_admin_url($parent_folder['id_parent'], $pwd, $member_link);	
			return $pwd . '/<a href="admin_files.php?f=' . $id_folder . '">' . $parent_folder['name'] . '</a>';
		}
		else
			return ($parent_folder['user_id'] == '-1') ? $pwd . '/<a href="admin_files.php?f=' . $id_folder . '">' . $parent_folder['name'] . '</a>' : $pwd . '/' . $member_link . '<a href="admin_files.php?f=' . $id_folder . '">' . $parent_folder['name'] . '</a>';
	}
	
	//R�cup�ration du r�pertoire courant.
	public static function get_url($id_folder, $pwd, $popup)
	{
		$parent_folder = array(
			'id_parent' => '',
			'name' => ''
		);
		try {
			$parent_folder = self::$db_querier->select_single_row(PREFIX . "upload_cat", array("id_parent", "name", "user_id"), 'WHERE id=:id', array('id' => $id_folder));
		} catch (RowNotFoundException $e) {}
		
		if (!empty($parent_folder['id_parent']))
		{	
			$pwd .= self::get_url($parent_folder['id_parent'], $pwd, $popup);	
			return $pwd . '/<a href="' . url('upload.php?f=' . $id_folder . $popup) . '">' . $parent_folder['name'] . '</a>';
		}
		else
			return $pwd . '/<a href="' . url('upload.php?f=' . $id_folder . $popup) . '">' . $parent_folder['name'] . '</a>';
	}
	
	//R�cup�ration de la taille totale utilis�e par un membre.
	public static function Member_memory_used($user_id)
	{
		return self::$db_querier->get_column_value(DB_TABLE_UPLOAD, 'SUM(size)', 'WHERE user_id = :user_id', array('user_id' => $user_id));
	}

	//Conversion mimetype -> image.
	public static function get_img_mimetype($type)
	{	
		$filetype = sprintf(LangLoader::get_message('file_type', 'main'), strtoupper($type));
		switch ($type)
		{
			//Images
			case 'jpg':
			case 'jpeg':
			case 'png':
			case 'gif':
			case 'bmp':
			case 'svg':
			case 'nef':
			case 'raw':
			case 'ico':
			case 'tif':
			$img = 'fa-upload-picture fa-2x';
			$filetype = sprintf(LangLoader::get_message('image_type', 'main'), strtoupper($type));
			break;
			//Archives
			case 'rar':
			case 'gz':
			case 'zip':
			case '7z':
			$img = 'fa-upload-zip fa-2x';
			$filetype = sprintf(LangLoader::get_message('zip_type', 'main'), strtoupper($type));
			break;
			//Pdf
			case 'pdf':
			$img = 'fa-upload-pdf fa-2x';
			$filetype = LangLoader::get_message('adobe_pdf', 'main');
			break;
			//Son
			case 'wav':
			case 'midi':
			case 'ogg':
			case 'mp3':
			$img = 'fa-upload-audio fa-2x';
			$filetype = sprintf(LangLoader::get_message('audio_type', 'main'), strtoupper($type));
			break;
			//Sripts
			case 'html':
			$img = 'fa-upload-html fa-2x';
			break;
			case 'js':
			case 'php':
			case 'swf':
			$img = 'fa-upload-script fa-2x';
			break;
			//Vid�os
			case 'wmv':
			case 'avi':
			case 'mp4':
			case 'mkv':
			case 'mpg':
			case 'flv':
			case 'mpeg':
			case 'mov':
			$img = 'fa-upload-video fa-2x';
			break;
			//Executables
			case 'exe':
			$img = 'fa-upload-exec fa-2x';
			break;
			//Text
			case 'txt':
			case 'csv':
			$img = 'fa-upload-text fa-2x';
			break;
			//Office
			case 'xls':
			case 'xlsx':
			case 'xlsm':
			case 'gsheet':
			case 'ods':
			$img = 'fa-upload-sheet fa-2x';
			break;
			case 'doc':
			case 'docx':
			case 'gdoc':
			case 'odt':
			$img = 'fa-upload-doc fa-2x';
			break;
			case 'ppt':
			case 'pptx':
			case 'gslides':
			case 'odp':
			$img = 'fa-upload-slide fa-2x';
			break;
			//Default
			default:
			$img = 'fa-upload-other fa-2x';
			$filetype = sprintf(LangLoader::get_message('document_type', 'main'), strtoupper($type));
		}
		
		return array('img' => $img, 'filetype' => $filetype);
	}
}
?>