<?php
/*##################################################
 *                              upload_functions.php
 *                            -------------------
 *   begin                : September 30, 2007
 *   copyright            : (C) 2007 Sautel Benoit
 *   email                : ben.popeye@phpboost.com
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

if (defined('PHPBOOST') !== true)	exit;

//Cat�gories (affichage si on connait la cat�gorie et qu'on veut reformer l'arborescence)
function display_cat_explorer($id, &$cats, $display_select_link = 1, $user_id)
{
	if ($id > 0)
	{
		$id_cat = $id;
		//On remonte l'arborescence des cat�gories afin de savoir quelle cat�gorie d�velopper
		do
		{
			$id_cat = -1;
			try {
				$id_cat = PersistenceContext::get_querier()->get_column_value(DB_TABLE_UPLOAD_CAT, 'id_parent', 'WHERE id = :id_cat AND user_id = :user_id', array('id_cat' => $id_cat, 'user_id' => $user_id));
			} catch (RowNotFoundException $ex) {}
			
			if ($id_cat >= 0)
				$cats[] = $id_cat;
		}
		while ($id_cat > 0);
	}

	//Maintenant qu'on connait l'arborescence on part du d�but
	$cats_list = '<ul class="upload-cat-list">' . show_cat_contents(0, $cats, $id, $display_select_link, $user_id) . '</ul>';
	
	//On liste les cat�gories ouvertes pour la fonction javascript
	$opened_cats_list = '';
	foreach ($cats as $key => $row)
	{
		if ($key != 0)
			$opened_cats_list .= 'cat_status[' . $key . '] = 1;' . "\n";
	}
	return '<script>
	<!--
' . $opened_cats_list . '
	-->
	</script>
	' . $cats_list;
	
}

//Fonction r�cursive pour l'affichage des cat�gories
function show_cat_contents($id_cat, $cats, $id, $display_select_link, $user_id)
{
	$line = '';
	$result = PersistenceContext::get_querier()->select("SELECT id, name
	FROM " . PREFIX . "upload_cat
	WHERE user_id = :user_id
	AND id_parent = :id_parent
	ORDER BY name", array(
		'user_id' => $user_id,
		'id_parent' => $id_cat
	));
	while ($row = $result->fetch())
	{
		if (in_array($row['id'], $cats)) //Si cette cat�gorie contient notre cat�gorie, on l'explore
		{
			$line .= '<li><a href="javascript:show_cat_contents(' . $row['id'] . ', ' . ($display_select_link != 0 ? 1 : 0) . ');" class="fa fa-minus-square-o" id="img2_' . $row['id'] . '"></a> <a href="javascript:show_cat_contents(' . $row['id'] . ', ' . ($display_select_link != 0 ? 1 : 0) . ');" class="fa fa-folder-open" id="img_' . $row['id'] . '"></a>&nbsp;<span id="class_' . $row['id'] . '" class="' . ($row['id'] == $id ? 'upload-selected-cat' : '') . '"><a href="javascript:' . ($display_select_link != 0 ? 'select_cat' : 'open_cat') . '(' . $row['id'] . ');">' . $row['name'] . '</a></span><span id="cat_' . $row['id'] . '">
			<ul class="upload-cat-explorer">'
			. show_cat_contents($row['id'], $cats, $id, $display_select_link, $user_id) . '</ul></span></li>';
		}
		else
		{
			//On compte le nombre de cat�gories pr�sentes pour savoir si on donne la possibilit� de faire un sous dossier
			$sub_cats_number = PersistenceContext::get_querier()->count(DB_TABLE_UPLOAD_CAT, 'WHERE id_parent = :id', array(
				'id' => $row['id']
			));
			//Si cette cat�gorie contient des sous cat�gories, on propose de voir son contenu
			if ($sub_cats_number > 0)
				$line .= '<li><a href="javascript:show_cat_contents(' . $row['id'] . ', ' . ($display_select_link != 0 ? 1 : 0) . ');" class="fa fa-plus-square-o" id="img2_' . $row['id'] . '"></a> <a href="javascript:show_cat_contents(' . $row['id'] . ', ' . ($display_select_link != 0 ? 1 : 0) . ');" class="fa fa-folder" id="img_' . $row['id'] . '"></a>&nbsp;<span id="class_' . $row['id'] . '" class="' . ($row['id'] == $id ? 'upload-selected-cat' : '') . '"><a href="javascript:' . ($display_select_link != 0 ? 'select_cat' : 'open_cat') . '(' . $row['id'] . ');">' . $row['name'] . '</a></span><span id="cat_' . $row['id'] . '"></span></li>';
			else //Sinon on n'affiche pas le "+"
				$line .= '<li class="upload-no-sub-cat"><i class="fa fa-folder"></i>&nbsp;<span id="class_' . $row['id'] . '" class="' . ($row['id'] == $id ? 'upload-selected-cat' : '') . '"><a href="javascript:' . ($display_select_link != 0 ? 'select_cat' : 'open_cat') . '(' . $row['id'] . ');">' . $row['name'] . '</a></span></li>';
		}
	}
	$result->dispose();
	return "\n" . $line;
}

//Fonction qui d�termine toutes les sous-cat�gories d'une cat�gorie (r�cursive)
function upload_find_subcats(&$array, $id_cat, $user_id)
{
	$result = PersistenceContext::get_querier()->select("SELECT id
		FROM " . DB_TABLE_UPLOAD_CAT . "
		WHERE id_parent = :id_parent AND user_id = :user_id", array(
			'id_parent' => $id_cat,
			'user_id' => $user_id
		));
	while ($row = $result->fetch())
	{
		$array[] = $row['id'];
		//On rappelle la fonction pour la cat�gorie fille
		upload_find_subcats($array, $row['id'], $user_id);
	}
	$result->dispose();
}

?>