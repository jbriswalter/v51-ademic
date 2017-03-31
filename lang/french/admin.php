<?php
/*##################################################
 *                                admin.php
 *                            -------------------
 *   begin                : November 20, 2005
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


 ####################################################
#                    French                        #
 ####################################################

$LANG['administration'] = 'Administration';

$LANG['phpinfo'] = 'PHP info';

//Requis
$LANG['require_name'] = 'Veuillez entrer un nom !';
$LANG['require_pass'] = 'Veuillez entrer un mot de passe !';
$LANG['require_rank'] = 'Veuillez entrer un rang !';
$LANG['require_code'] = 'Veuillez entrer un code pour le smiley !';
$LANG['require_subcat'] = 'Veuillez s�lectionner une sous-cat�gorie !';
$LANG['require_items_number'] = 'Veuillez entrer un nombre d\'�l�ments !';

//Commun
$LANG['user_ip'] = 'Adresse ip';
$LANG['registered'] = 'Enregistr�';
$LANG['link'] = 'Lien';
$LANG['configuration'] = 'Configuration';
$LANG['stats'] = 'Statistiques';
$LANG['cat_management'] = 'Gestion des cat�gories';
$LANG['cat_add'] = 'Ajouter une cat�gorie';
$LANG['visible'] = 'Visible';
$LANG['nbr_cat_max'] = 'Nombre de cat�gories maximum affich�es';
$LANG['nbr_column_max'] = 'Nombre de colonnes';
$LANG['note_max'] = 'Echelle de notation';
$LANG['max_link'] = 'Nombre de liens maximum dans le message';
$LANG['max_link_explain'] = 'Mettre -1 pour illimit�';
$LANG['generate'] = 'G�n�rer';
$LANG['or_direct_path'] = 'Ou chemin direct';
$LANG['unknow_bot'] = 'Bot inconnu';
$LANG['version'] = 'Version';
$LANG['close_menu'] = 'Fermer le menu';

//Index
$LANG['quick_access'] = 'Acc�s rapide';
$LANG['add_content'] = 'Ajouter du contenu';
$LANG['modules_management'] = 'G�rer les modules';
$LANG['add_articles'] = 'Ajouter un article';
$LANG['add_news'] = 'Ajouter une news';
$LANG['customize_site'] = 'Personnaliser le site';
$LANG['add_template'] = 'Ajouter un th�me';
$LANG['menus_management'] = 'G�rer les menus';
$LANG['customize_template'] = 'Personnaliser le th�me';
$LANG['site_management'] = 'Administrer le site';
$LANG['general_config'] = 'Configuration g�n�rale';
$LANG['empty_cache'] = 'Vider le cache du site';
$LANG['save_database'] = 'Sauvegarder la base de donn�es';
$LANG['welcome_title'] = 'Bienvenue sur le panneau d\'administration de votre site';
$LANG['welcome_desc'] = 'L\'administration vous permet de g�rer le contenu et la configuration de votre site<br />La page d\'accueil recense les actions les plus courantes<br />Prenez le temps de lire les conseils afin d\'optimiser la s�curit� de votre site';
$LANG['update_available'] = 'Mises � jour disponibles';
$LANG['core_update_available'] = 'Nouvelle version <strong>%s</strong> du noyau disponible, pensez � mettre � jour PHPBoost ! <a href="http://www.phpboost.com">Plus d\'informations</a>';
$LANG['no_core_update_available'] = 'Aucune nouvelle version disponible, le syst�me est � jour !';
$LANG['module_update_available'] = 'Des mises � jour des modules sont disponibles !';
$LANG['no_module_update_available'] = 'Aucune mise � jour des modules, vous �tes � jour !';
$LANG['unknow_update'] = 'Impossible de d�terminer si une mise � jour est disponible !';
$LANG['user_online'] = 'Utilisateur(s) en ligne';
$LANG['last_update'] = 'Derni�re mise � jour';
$LANG['quick_links'] = 'Liens rapides';
$LANG['action.members_management'] = 'Membres';
$LANG['action.menus_management'] = 'Menus';
$LANG['action.modules_management'] = 'Modules';
$LANG['action.themes_management'] = 'Th�mes';
$LANG['action.langs_management'] = 'Langues';
$LANG['last_comments'] = 'Derniers commentaires';
$LANG['view_all_comments'] = 'Voir tous les commentaires';
$LANG['writing_pad'] = 'Bloc-notes';
$LANG['writing_pad_explain'] = 'Cet emplacement est r�serv� pour y saisir vos notes personnelles.';

//Alertes administrateur
$LANG['administrator_alerts'] = 'Alertes';
$LANG['administrator_alerts_list'] = 'Liste des alertes';
$LANG['no_unread_alert'] = 'Aucune alerte en attente';
$LANG['unread_alerts'] = 'Des alertes non trait�es sont en attente.';
$LANG['no_administrator_alert'] = 'Aucune alerte existante';
$LANG['display_all_alerts'] = 'Voir toutes les alertes';
$LANG['priority'] = 'Priorit�';
$LANG['priority_very_high'] = 'Imm�diat';
$LANG['priority_high'] = 'Urgent';
$LANG['priority_medium'] = 'Moyenne';
$LANG['priority_low'] = 'Faible';
$LANG['priority_very_low'] = 'Tr�s faible';
$LANG['administrator_alerts_action'] = 'Actions';
$LANG['admin_alert_fix'] = 'R�gler';
$LANG['admin_alert_unfix'] = 'Passer l\'alerte en non r�gl�e';
$LANG['confirm_delete_administrator_alert'] = 'Etes-vous s�r de vouloir supprimer cette alerte ?';

//Rapport syst�me
$LANG['system_report'] = 'Rapport syst�me';
$LANG['server'] = 'Serveur';
$LANG['php_version'] = 'Version de PHP';
$LANG['dbms_version'] = 'Version du SGBD';
$LANG['gd_library'] = 'Librairie GD';
$LANG['url_rewriting'] = 'R��criture des URL';
$LANG['phpboost_config'] = 'Configuration de PHPBoost';
$LANG['kernel_version'] = 'Version du noyau';
$LANG['output_gz'] = 'Compression des pages';
$LANG['directories_auth'] = 'Autorisation des r�pertoires';
$LANG['system_report_summerization'] = 'R�capitulatif';
$LANG['system_report_summerization_explain'] = 'Ceci est le r�capitulatif du rapport. Cela vous sera particuli�rement utile lorsqu\'on vous demandera la configuration de votre syst�me pour du support';

//Gestion de l'upload
$LANG['explain_upload_img'] = 'L\'image upload�e doit �tre au format jpg, gif, png ou bmp';
$LANG['explain_archive_upload'] = 'L\'archive upload�e doit �tre au format zip ou gzip';

//Gestion des fichiers
$LANG['auth_files'] = 'Autorisation requise pour l\'activation de l\'interface de fichiers';
$LANG['size_limit'] = 'Taille de l\'espace de stockage des fichiers pour chaque membre';
$LANG['size_limit_explain'] = 'En Mo';
$LANG['bandwidth_protect'] = 'Protection de la bande passante';
$LANG['bandwidth_protect_explain'] = 'Interdiction d\'acc�s aux fichiers du r�pertoire upload depuis un autre serveur';
$LANG['auth_extensions'] = 'Extensions autoris�es';
$LANG['extend_extensions'] = 'Extensions autoris�es suppl�mentaires';
$LANG['extend_extensions_explain'] = 'S�parez les extensions avec des virgules';
$LANG['files_image'] = 'Images';
$LANG['files_archives'] = 'Archives';
$LANG['files_text'] = 'Textes';
$LANG['files_media'] = 'Media';
$LANG['files_prog'] = 'Programmation';
$LANG['files_misc'] = 'Divers';

//Gestion des menus
$LANG['menus_management'] = 'Gestion des menus';
$LANG['menus_content_add'] = 'Menu de contenu';
$LANG['menus_links_add'] = 'Menu de liens';
$LANG['menus_feed_add'] = 'Menu de flux';
$LANG['menus_edit'] = 'Modifier le menu';
$LANG['menus_add'] = 'Ajouter un menu';
$LANG['automatic_menu'] = 'Automatique';
$LANG['vertical_menu'] = 'Menu vertical d�roulant';
$LANG['horizontal_menu'] = 'Menu horizontal d�roulant';
$LANG['static_menu'] = 'Menu statique';
$LANG['available_menus'] = 'Menus disponibles';
$LANG['no_available_menus'] = 'Aucun menu disponible';
$LANG['menu_header'] = 'T�te de page';
$LANG['menu_subheader'] = 'Sous ent�te';
$LANG['menu_left'] = 'Menu gauche';
$LANG['menu_right'] = 'Menu droit';
$LANG['menu_top_central'] = 'Menu central haut';
$LANG['menu_bottom_central'] = 'Menu central bas';
$LANG['menu_top_footer'] = 'Sur pied de page';
$LANG['menu_footer'] = 'Pied de page';
$LANG['location'] = 'Emplacement';
$LANG['use_tpl'] = 'Utiliser la structure des templates';
$LANG['add_sub_element'] = 'Ajouter un �l�ment';
$LANG['add_sub_menu'] = 'Ajouter un sous-menu';
$LANG['display_title'] = 'Afficher le titre';
$LANG['choose_feed_in_list'] = 'Veuillez choisir un flux dans la liste';
$LANG['feed'] = 'flux';
$LANG['availables_feeds'] = 'Flux disponibles';
$LANG['valid_position_menus'] = 'Valider la position des menus';
$LANG['theme_management'] = 'G�rer le th�me';
$LANG['move'] = 'D�placer';
$LANG['move_up'] = 'Monter';
$LANG['move_down'] = 'Descendre';

$LANG['menu_configurations'] = 'Configurations';
$LANG['menu_configurations_list'] = 'Liste des configurations de menus';
$LANG['menus'] = 'Menus';
$LANG['menu_configuration_name'] = 'Nom';
$LANG['menu_configuration_match_regex'] = 'Correspond �';
$LANG['menu_configuration_edit'] = 'Editer';
$LANG['menu_configuration_configure'] = 'Configurer';
$LANG['menu_configuration_default_name'] = 'Configuration par d�faut';
$LANG['menu_configuration_configure_default_config'] = 'Configurer la configuration par d�faut';
$LANG['menu_configuration_edition'] = 'Edition d\'une configuration de menu';
$LANG['menu_configuration_edition_name'] = 'Nom de la configuration';
$LANG['menu_configuration_edition_match_regex'] = 'Expression r�guli�re de correspondance';

//Smiley
$LANG['upload_smiley'] = 'Uploader un smiley';
$LANG['smiley'] = 'Smiley';
$LANG['add_smiley'] = 'Ajouter smiley';
$LANG['smiley_code'] = 'Code du smiley (ex : :D)';
$LANG['smiley_available'] = 'Smileys disponibles';
$LANG['edit_smiley'] = 'Edition des smileys';
$LANG['smiley_management'] = 'Gestion des smileys';
$LANG['smiley_add_success'] = 'Le smiley a �t� ajout�';

//Gestion membre
$LANG['search_member'] = 'Rechercher un membre';
$LANG['joker'] = 'Utilisez * pour joker';
$LANG['no_result'] = 'Aucun r�sultat';
$LANG['user_punish_until'] = 'Sanction jusqu\'au';
$LANG['user_readonly_explain'] = 'Membre en lecture seule, celui-ci peut lire mais ne peut plus poster sur le site entier (commentaires, etc...)';
$LANG['life'] = 'A vie';
$LANG['readonly_user'] = 'Membre en lecture seule';

//Gestion des groupes
$LANG['groups_management'] = 'Gestion des groupes';
$LANG['groups_add'] = 'Ajouter un groupe';
$LANG['auth_flood'] = 'Autorisation de flooder';
$LANG['pm_group_limit'] = 'Limite de messages priv�s';
$LANG['pm_group_limit_explain'] = 'Mettre -1 pour illimit�';
$LANG['data_group_limit'] = 'Taille de l\'espace de stockage des fichiers';
$LANG['data_group_limit_explain'] = 'En Mo. Mettre -1 pour illimit�';
$LANG['color_group'] = 'Couleur associ�e au groupe';
$LANG['delete_color_group'] = 'Supprimer la couleur associ�e au groupe';
$LANG['img_assoc_group'] = 'Image associ�e au groupe';
$LANG['img_assoc_group_explain'] = 'Mettre dans le dossier images/group/';
$LANG['add_mbr_group'] = 'Ajouter un membre au groupe';
$LANG['mbrs_group'] = 'Membres du groupe';
$LANG['auths'] = 'Autorisations';
$LANG['auth_access'] = 'Autorisation d\'acc�s';
$LANG['auth_read'] = 'Droits de lecture';
$LANG['auth_write'] = 'Droits d\'�criture';
$LANG['auth_edit'] = 'Droits de mod�ration';
$LANG['upload_group'] = 'Uploader une image de groupe';

// Updates
$LANG['website_updates'] = 'Mises � jour';
$LANG['kernel'] = 'Noyau';
$LANG['themes'] = 'Th�mes';
$LANG['update_available'] = 'Le %1$s %2$s est disponible dans sa version %3$s';
$LANG['kernel_update_available'] = 'PHPBoost est disponible dans sa nouvelle version %s';
$LANG['app_update__download'] = 'T�l�chargement';
$LANG['app_update__download_pack'] = 'Pack complet';
$LANG['app_update__update_pack'] = 'Pack de mise � jour';
$LANG['author'] = 'Auteur';
$LANG['authors'] = 'Auteurs';
$LANG['new_features'] = 'Nouvelles Fonctionnalit�s';
$LANG['improvments'] = 'Am�liorations';
$LANG['fixed_bugs'] = 'Corrections de bugs';
$LANG['security_improvments'] = 'Am�liorations de s�curit�';
$LANG['updates_are_available'] = 'Des mises � jours sont disponibles.<br />Veuillez les effectuer au plus vite.';
$LANG['availables_updates'] = 'Mises � jour disponibles';
$LANG['details'] = 'D�tails';
$LANG['more_details'] = 'Plus de d�tails';
$LANG['download_the_complete_pack'] = 'T�l�chargez le pack complet';
$LANG['download_the_update_pack'] = 'T�l�chargez le pack de mise � jour';
$LANG['no_available_update'] = 'Aucune mise � jour n\'est disponible pour l\'instant.';
$LANG['incompatible_php_version'] = 'Impossible de v�rifier la pr�sence de mise � jour.
Veuillez utiliser la version %s ou ult�rieure de PHP.<br />Si vous ne pouvez utiliser PHP5,
veuillez v�rifier la pr�sence de ces mises � jour sur notre <a href="http://www.phpboost.com">site officiel</a>.';
$LANG['check_for_updates_now'] = 'V�rifier la pr�sence de mises � jour';
?>