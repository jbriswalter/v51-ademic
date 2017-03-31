<?php
/*##################################################
*                         searchXMLHTTPRequest.php
*                            -------------------
*   begin                : January 27, 2008
*   copyright            : (C) 2008 Rouchon Lo�c
*   email                : horn@phpboost.com
*
*
###################################################
*
*   This program is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 2 of the License, or
*   (at your option) any later version.
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

require_once('../kernel/begin.php');
AppContext::get_session()->no_session_location(); //Permet de ne pas mettre jour la page dans la session.
//------------------------------------------------------------------- Language
load_module_lang('search');

//--------------------------------------------------------------------- Params
$request = AppContext::get_request();

$search_txt = retrieve(POST, 'q', '');
$module_id = strtolower(retrieve(POST, 'moduleName', ''));
$id_search = retrieve(POST, 'idSearch', -1);
$selected_modules = retrieve(POST, 'searched_modules', array());
//------------------------------------------------------------- Other includes
require_once(PATH_TO_ROOT . '/search/search.inc.php');


//----------------------------------------------------------------------- Main
$modules_args = array();

if (($id_search >= 0) && ($module_id != ''))
{
	echo 'var syncErr = false;';
	
	$search = new Search();
	if (!$search->is_search_id_in_cache($id_search))
	{   // MAJ DES RESULTATS SI ILS NE SONT PLUS DANS LE CACHE
		// Listes des modules de recherches
		$search_modules = array();
		$provider_service = AppContext::get_extension_provider_service();
		foreach ($provider_service->get_extension_point(SearchableExtensionPoint::EXTENSION_POINT) as $id => $extension_point)
		{
			if (in_array($id, $selected_modules))
				$search_modules[] = $extension_point;
		}
		
		// Ajout du param�tre search � tous les modules
		foreach ($search_modules as $id => $extension_point)
			$modules_args[$id] = array('search' => $search_txt);
		
		// Ajout de la liste des param�tres de recherches sp�cifiques � chaque module
		foreach ($search_modules as $id => $extension_point)
		{
			if ($form_module->has_search_options())
			{
				// R�cup�ration de la liste des param�tres
				$form_module_args = $extension_point->get_search_args();
				// Ajout des param�tres optionnels sans les s�curiser.
				// Ils sont s�curis�s � l'int�rieur de chaque module.
				foreach ($form_module_args as $arg)
				{
					if ($request->has_postparameter($arg))
						$modules_args[$id][$arg] = $request->get_postvalue($arg);
				}
			}
		}
		
		$results = array();
		$ids_search = array();
		
		get_search_results($search_txt, $search_modules, $modules_args, $results, $ids_search, true);
		
		if (empty($ids_search[$module_id]))
		{
			$ids_search[$module_id] = 0;
		}
		
		// Propagation des nouveaux id_search
		foreach ( $ids_search as $module_name => $id_search )
		{
			$search->id_search[$module_name] = $id_search;
			echo 'idSearch[\'' . $module_name . '\'] = ' . $id_search . ';';
		}
	}
	else
	{
		$search->id_search[$module_id] = $id_search;
	}
	echo   'var resultsAJAX = new Array();';
	$nb_results = $search->get_results_by_id($results, $search->id_search[$module_id]);
	if ($nb_results > 0)
	{
		//$module = $modules->get_module($module_id);
		$html_results = '';
		get_html_results($results, $html_results, $module_id);
	
		echo   'nbResults[\'' . $module_id . '\'] = ' . $nb_results . ';
				resultsAJAX[\'nbResults\'] = \'' . $nb_results . ' '.addslashes($nb_results > 1 ? $LANG['nb_results_found'] : $LANG['one_result_found']) . '\';
				resultsAJAX[\'results\'] = \''.str_replace(array("\r", "\n", '\''), array('', ' ', '\\\''), $html_results) . '\';';
	}
	else
	{
		echo   'nbResults[\'' . $module_id . '\'] = 0;
				resultsAJAX[\'nbResults\'] = \''.addslashes($LANG['no_results_found']) . '\';
				resultsAJAX[\'results\'] = \'\';';
	}
}
else
{
	echo 'var syncErr = true;';
}

?>