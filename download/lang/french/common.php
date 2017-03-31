<?php
/*##################################################
 *                               common.php
 *                            -------------------
 *   begin                : August 24, 2014
 *   copyright            : (C) 2014 Julien BRISWALTER
 *   email                : j1.seth@phpboost.com
 *
 *
 ###################################################
 *
 * This program is a free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/


 ####################################################
 #						French						#
 ####################################################

$lang['module_title'] = 'T�l�chargements';
$lang['module_config_title'] = 'Configuration des t�l�chargements';

$lang['download.actions.add'] = 'Ajouter un fichier';
$lang['download.add'] = 'Ajout d\'un fichier';
$lang['download.edit'] = 'Modification d\'un fichier';
$lang['download.pending'] = 'Fichiers en attente';
$lang['download.manage'] = 'G�rer les fichiers';
$lang['download.management'] = 'Gestion des fichiers';

$lang['most_downloaded_files'] = 'Meilleurs t�l�chargements';
$lang['last_download_files'] = 'Derniers fichiers en t�l�chargement';
$lang['download'] = 'T�l�charger';
$lang['downloaded_times'] = 'T�l�charg� :number_downloads fois';
$lang['downloads_number'] = 'Nombre de t�l�chargements';
$lang['file_infos'] = 'Informations sur le fichier';
$lang['file'] = 'Fichier';
$lang['files'] = 'Fichiers';

//config
$lang['config.category_display_type'] = 'Affichage des informations dans les cat�gories';
$lang['config.category_display_type.display_summary'] = 'R�sum�';
$lang['config.category_display_type.display_all_content'] = 'Tout le contenu';
$lang['config.category_display_type.display_table'] = 'Tableau';
$lang['config.display_descriptions_to_guests'] = 'Afficher le r�sum� des fichiers aux visiteurs s\'ils n\'ont pas l\'autorisation de lecture';
$lang['config.downloaded_files_menu'] = 'Menu t�l�chargements';
$lang['config.sort_type'] = 'Ordre d\'affichage des fichiers';
$lang['config.sort_type.explain'] = 'Sens d�croissant';
$lang['config.files_number_in_menu'] = 'Nombre de fichiers affich�s maximum';
$lang['config.limit_oldest_file_day_in_menu'] = 'Limiter l\'�ge des fichiers dans le menu';
$lang['config.oldest_file_day_in_menu'] = 'Age maximum (en jours)';

//authorizations
$lang['authorizations.display_download_link'] = 'Autorisation d\'afficher le lien de t�l�chargement';

//SEO
$lang['download.seo.description.tag'] = 'Tous les fichiers sur le sujet :subject.';
$lang['download.seo.description.pending'] = 'Tous les fichiers en attente.';

//contribution
$lang['download.form.contribution.explain'] = 'Vous n\'�tes pas autoris� � ajouter un fichier, cependant vous pouvez en proposer un.';

//Form
$lang['download.form.reset_number_downloads'] = 'R�initialiser le nombre de t�l�chargements';
$lang['download.form.author_display_name_enabled'] = 'Personnaliser le nom de l\'auteur';
$lang['download.form.author_display_name'] = 'Nom de l\'auteur';

//Messages
$lang['download.message.success.add'] = 'Le fichier <b>:name</b> a �t� ajout�';
$lang['download.message.success.edit'] = 'Le fichier <b>:name</b> a �t� modifi�';
$lang['download.message.success.delete'] = 'Le fichier <b>:name</b> a �t� supprim�';
$lang['download.message.error.file_not_found'] = 'Fichier introuvable, le lien est peut-�tre mort.';
$lang['download.message.warning.unauthorized_to_download_file'] = 'Vous n\'�tes pas autoris� � t�l�charger le fichier.';
?>
