<?php
/*##################################################
 *                              search_french.php
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


####################################################
#                      French                      #
####################################################

//G�n�ralit�s
$LANG['title_search'] = 'Recherche';
$LANG['search_results'] = 'R�sultats de la recherche';
$LANG['warning_length_string_searched'] = 'La chaine recherch�e doit faire au moins 4 caract�res !';
$LANG['search_keywords'] = 'Mots cl�s';
$LANG['search_min_length'] = '4 caract�res minimum';
$LANG['search_in_modules'] = 'Rechercher dans les modules suivants';
$LANG['search_in_modules_explain'] = 'Maintenez ctrl puis cliquez dans la liste pour faire plusieurs choix';
$LANG['search_specialized_form'] = 'Recherche sp�cialis�e dans le module';
$LANG['search_specialized_form_explain'] = 'Param�trer la recherche pour un module en particulier';
$LANG['title_all_results'] = 'Tous les r�sultats';
$LANG['forms'] = 'Formulaires';
$LANG['results'] = 'R�sultats';
$LANG['results_choice'] = 'Choix des r�sultats';
$LANG['advanced_search'] = 'Recherche avanc�e';
$LANG['simple_search'] = 'Recherche simple';
$LANG['print'] = 'Afficher';
$LANG['nb_results_found'] = 'r�sultats ont �t� trouv�s';
$LANG['one_result_found'] = 'r�sultat a �t� trouv�';
$LANG['no_results_found'] = 'Aucun r�sultat n\'a �t� trouv�';
$LANG['search_all'] = 'Tout';
$LANG['search_no_options'] = 'Aucune option de recherche sp�cifique � ce module';

//Administration
$LANG['search_management'] = 'Gestion de la recherche';
$LANG['search_config'] = 'Configuration';
$LANG['search_config_weighting'] = 'Pond�ration des r�sultats';
$LANG['search_config_weighting_explain'] = 'La pond�ration des r�sultats vous permet de donner plus d\'importance � certains modules qu\'� d\'autres dans les r�sultats de la recherche.';
$LANG['search_weights'] = 'Pond�rations';
$LANG['weights.manage'] = 'G�rer la pond�ration des r�sultats';
$LANG['search_cache'] = 'Cache des r�sultats des recherches';
$LANG['cache_time'] = 'Dur�e de vie du cache';
$LANG['cache_time_explain'] = 'Dur�e exprim�e en minutes, au dela, les r�sultats seront recalcul�s';
$LANG['nb_results_per_page'] = 'Nombre de r�sultats � afficher par page';
$LANG['max_use'] = 'Nombre d\'utilisation maximum des r�sultats du cache';
$LANG['max_use_explain'] = 'Ce nombre repr�sente le nombre de fois que les r�sultats de la recherche peuvent �tre utilis�s avant de les recalculer';
$LANG['clear_out_cache'] = 'Vider le contenu du cache';
$LANG['unauthorized_modules'] = 'Modules interdits';
$LANG['unauthorized_modules_explain'] = 'S�lectionnez les modules dans lesquels vous ne souhaitez pas autoriser la recherche';
$LANG['admin.authorizations'] = 'Autorisations';
$LANG['admin.authorizations.read'] = 'Autorisation d\'afficher la recherche';

?>