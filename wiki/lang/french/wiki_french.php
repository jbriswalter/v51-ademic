<?php
/*##################################################
 *                              wiki_french.php
 *                            -------------------
 *   begin                : December 02, 2006
 *   copyright            : (C) 2005 Beno�t Sautel
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


 ####################################################
#                                                          French                                                                        #
 ####################################################

//G�n�ralit�s
$LANG['wiki'] = 'Wiki';
$LANG['wiki_article_hits'] = 'Cette page a �t� vue %d fois';
$LANG['wiki_history'] = 'Historique';
$LANG['wiki_contribution_tools'] = 'Contribuer';
$LANG['wiki_other_tools'] = 'Outils';
$LANG['wiki_author'] = 'Auteur';
$LANG['wiki_empty_index'] = 'Le wiki est vide. Si vous �tes administrateur vous pouvez cr�er et modifier l\'accueil du wiki dans le panneau d\'administration du wiki.';
$LANG['wiki_previewing'] = 'Pr�visualisation';
$LANG['wiki_table_of_contents'] = 'Table des mati�res';
$LANG['wiki_read_feed'] = 'Lire l\'article';

//Actions
$LANG['wiki_random_page'] = 'Page al�atoire';
$LANG['wiki_restriction_level'] = 'Niveau de restriction';
$LANG['wiki_article_status'] = 'Type d\'article';

//Poster
$LANG['wiki_contents'] = 'Contenu de l\'article';
$LANG['wiki_article_title'] = 'Titre de l\'article';
$LANG['wiki_create_article'] = 'Cr�er un article';
$LANG['wiki_add_article'] = 'Ajouter un article';
$LANG['wiki_add_cat'] = 'Ajouter une cat�gorie';
$LANG['wiki_article_cat'] = 'Cat�gorie de l\'article';
$LANG['wiki_create_cat'] = 'Cr�er une cat�gorie';
$LANG['wiki_update_index'] = 'Modifier l\'accueil';
$LANG['wiki_warning_updated_article'] = 'Cet article a �t� mis � jour, vous consultez ici une archive de cet article!';
$LANG['wiki_article_cat'] = 'Cat�gorie de l\'article';
$LANG['wiki_current_cat'] = 'Cat�gorie courante';
$LANG['wiki_contribuate'] = 'Contribuer au wiki';
$LANG['wiki_edit_article'] = 'Edition de l\'article <em>%s</em>';
$LANG['wiki_edit_cat'] = 'Edition de la cat�gorie <em>%s</em>';
$LANG['wiki_move'] = 'D�placer';
$LANG['wiki_rename'] = 'Renommer';
$LANG['wiki_no_cat'] = 'Aucune cat�gorie existante';
$LANG['wiki_no_sub_cat'] = 'Aucune sous cat�gorie existante';
$LANG['wiki_no_article'] = 'Aucun article existant';
$LANG['wiki_no_sub_article'] = 'Aucun sous article existant';
$LANG['wiki_no_selected_cat'] = 'Aucune cat�gorie s�lectionn�e';
$LANG['wiki_do_not_select_any_cat'] = 'Aucune cat�gorie';
$LANG['wiki_please_enter_a_link_name'] = 'Veuillez entrer un nom de lien';
$LANG['wiki_insert_a_link'] = 'Ins�rer un lien vers un article';
$LANG['wiki_insert_link'] = 'Ins�rer';
$LANG['wiki_title_link'] = 'Titre de l\'article';
$LANG['wiki_no_js_insert_link'] = 'Pour ins�rer un lien vers un article veuillez utiliser la balise link :
[link=$a]$b[/link] o� $a repr�sente le titre de l\'article (sans caract�res sp�ciaux, tel qu\'il appara�t dans l\'adresse) et $b repr�sente le nom du lien';
$LANG['wiki_explain_paragraph'] = 'Ins�rer un paragraphe de niveau %d';
$LANG['wiki_help_tags'] = 'En savoir plus sur les balises sp�cifiques au BBCode';
$LANG['wiki_paragraph_name'] = 'Veuillez entrer le titre du paragraphe';
$LANG['wiki_paragraph_name_example'] = 'Titre du paragraphe';

//Restrictions d'acc�s
$LANG['authorizations'] = 'Autorisations';
$LANG['wiki_member_restriction'] = 'Cet article est prot�g�, seuls les membres peuvent le modifier';
$LANG['wiki_modo_restriction'] = 'Cet article est prot�g�, seuls les mod�rateurs peuvent le modifier';
$LANG['wiki_admin_restriction'] = 'Cet article est prot�g�, seuls les administrateurs peuvent le modifier';
$LANG['wiki_edition_restriction'] = 'Restriction � l\'�dition';
$LANG['wiki_no_restriction'] = 'Aucune restriction';
$LANG['wiki_auth_management'] = 'Gestion des niveaux d\'autorisation';
$LANG['wiki_auth_management_article'] = 'Gestion du niveau d\'autorisation de l\'article <em>%s</em>';
$LANG['explain_select_multiple'] = 'Maintenez ctrl puis cliquer dans la liste pour faire plusieurs choix';
$LANG['select_all'] = 'Tout s�lectionner';
$LANG['select_none'] = 'Tout d�s�lectionner';
$LANG['ranks'] = 'Rangs';
$LANG['groups'] = 'Groupes';
$LANG['wiki_explain_restore_default_auth'] = 'Ne pas consid�rer de restriction particuli�re pour cet article; les autorisations seront les autorisations globales du wiki';
$LANG['wiki_restore_default_auth'] = 'Autorisations par d�faut';

//Cat�gories
$LANG['wiki_last_articles_list'] = 'Derniers articles mis � jour :';
$LANG['wiki_cats_list'] = 'Liste des cat�gories principales :';
$LANG['wiki_articles_of_this_cat'] = 'Articles pr�sents dans cette cat�gorie';
$LANG['wiki_subcats'] = 'Cat�gories contenues par cette cat�gorie :';
$LANG['wiki_subarticles'] = 'Articles contenus par cette cat�gorie :';

//Archives
$LANG['wiki_version_list'] = 'Versions';
$LANG['wiki_article_does_not_exist'] = 'L\'article que vous demandez n\'existe pas, vous pouvez le cr�er ici.';
$LANG['wiki_cat_does_not_exist'] = 'Erreur : la cat�gorie demand�e n\'existe pas. <a href="wiki.php">Retour au wiki</a>';
$LANG['wiki_consult_article'] = 'Consulter';
$LANG['wiki_restore_version'] = 'Restaurer';
$LANG['wiki_possible_actions'] = 'Actions possibles';
$LANG['wiki_no_possible_action'] = 'Aucune action possible';
$LANG['wiki_current_version'] = 'Version courante';

//Statut de l'article
$LANG['wiki_status_management'] = 'Gestion des statuts des articles';
$LANG['wiki_status_management_article'] = 'Gestion des statuts de l\' article %s';
$LANG['wiki_defined_status'] = 'Statut pr�d�fini';
$LANG['wiki_undefined_status'] = 'Statut personnalis�';
$LANG['wiki_no_status'] = 'Aucun statut';
$LANG['wiki_status_explain'] = 'Vous pouvez ici s�lectionner le type d\'article. Plusieurs statuts diff�rents permettent de classer vos articles, et mettre en �vidence quelque chose qui leur est remarquable.<br />Pour cela vous pouvez soit utiliser des statuts pr�d�finis soit cr�er vos propres statuts. Pour utiliser un statut pr�d�fini veuillez laisser le champ statut personnalis� vide.';
$LANG['wiki_current_status'] = 'Statut courant';

$LANG['wiki_status_list'] = array(
	array('Article de qualit�', '<span class="notice">Cet article est de grande qualit� il est complet et fiable.</span>'),
	array('Article incomplet', '<span class="question">Cet article manque de sources.<br />Vos connaissances sont les bienvenues afin de le compl�ter.</span>'),
	array('Article en cours de travaux', '<span class="notice">Cet article est en cours de travaux, des modifications sont en cours de r�alisation, revenez plus tard le reconsulter. Merci.</span>'),
	array('Article � refaire', '<span class="warning">Cet article est � refaire, son contenu n\'est pas tr�s fiable.</span>'),
	array('Article remis en cause', '<span class="error">Cet article a �t� discut� et son contenu ne para�t pas correct. Vous pouvez �ventuellement consulter les discussions � ce propos et peut-�tre y apporter vos connaissances.</span>')
);

//D�placement de l'article
$LANG['wiki_moving_article'] = 'D�placement d\'un article';
$LANG['wiki_moving_this_article'] = 'D�placement de l\'article : %s';
$LANG['wiki_change_cat'] = 'Changer de cat�gorie';
$LANG['wiki_cat_contains_cat'] = 'Vous souhaitez placer cette cat�gorie dans une de ses cat�gories filles ou dans elle-m�me, ce qui est impossible!';

//Renommer l'article
$LANG['wiki_renaming_article'] = 'Renommer un article';
$LANG['wiki_renaming_this_article'] = 'Renommer l\'article : %s';
$LANG['wiki_new_article_title'] = 'Nouveau titre de l\'article';
$LANG['wiki_explain_renaming'] = 'Vous �tes sur le point de renommer un article. Attention, vous devez savoir que tous les liens menant � cet article seront rompus. Cependant vous pouvez demander � laisser une redirection vers le nouvel article, ce qui permettra de ne pas briser les liens.';
$LANG['wiki_create_redirection_after_renaming'] = 'Cr�er une redirection automatique depuis l\'ancien article vers le nouveau';
$LANG['wiki_title_already_exists'] = 'Le titre que vous avez choisi existe d�j�. Veuillez en choisir un autre';

//Redirection
$LANG['wiki_redirecting_from'] = 'Redirig� depuis %s';
$LANG['wiki_remove_redirection'] = 'Supprimer la redirection';
$LANG['wiki_redirections'] = 'Redirections';
$LANG['wiki_redirections_management'] = 'Gestion des redirections';
$LANG['wiki_edit_redirection'] = 'Edition d\'une redirection';
$LANG['wiki_redirections_to_this_article'] = 'Redirections menant � l\'article : <em>%s</em>';
$LANG['wiki_redirection_name'] = 'Titre de la redirection';
$LANG['wiki_redirection_delete'] = 'Supprimer la redirection';
$LANG['wiki_alert_delete_redirection'] = 'Etes-vous sur de vouloir supprimer cette redirection ?';
$LANG['wiki_no_redirection'] = 'Il n\'y a aucune redirection vers cette page';
$LANG['wiki_create_redirection'] = 'Cr�er une redirection vers cet article';
$LANG['wiki_create_redirection_to_this'] = 'Cr�er une redirection vers l\'article <em>%s</em>';

//Recherche
$LANG['wiki_search_where'] = 'O�?';
$LANG['wiki_search_where_title'] = 'Titre';
$LANG['wiki_search_where_contents'] = 'Contenu';
$LANG['wiki_search_where_all'] = 'Titre &amp; contenu';

//Discussion
$LANG['wiki_article_com'] = 'Discussion sur l\'article';
$LANG['wiki_article_com_article'] = 'Discussion';

//Suppression
$LANG['wiki_confirm_delete_archive'] = 'Etes-vous s�r de vouloir supprimer cette version de l\'article ?';
$LANG['wiki_remove_cat'] = 'Suppression d\'une cat�gorie';
$LANG['wiki_remove_this_cat'] = 'Suppression de la cat�gorie : <em>%s</em>';
$LANG['wiki_explain_remove_cat'] = 'Vous souhaitez supprimer cette cat�gorie. Vous pouvez supprimer tout son contenu ou transf�rer son contenu ailleurs. L\'article associ� � cette cat�gorie sera quant � lui obligatoirement supprim�.';
$LANG['wiki_remove_all_contents'] = 'Supprimer tout son contenu (action irr�versible)';
$LANG['wiki_move_all_contents'] = 'D�placer tout son contenu dans le dossier suivant :';
$LANG['wiki_future_cat'] = 'Cat�gorie dans laquelle vous souhaitez d�placer ses �l�ments';
$LANG['wiki_alert_removing_cat'] = 'Etes-vous s�r de vouloir supprimer cette cat�gorie (d�finitif) ?';
$LANG['wiki_confirm_remove_article'] = 'Etes-vous sur de vouloir supprimer cet article ?';
$LANG['wiki_not_a_cat'] = 'Vous n\'avez pas s�lectionn� de cat�gorie valide !';

//RSS
$LANG['wiki_rss'] = 'Flux RSS';
$LANG['wiki_rss_cat'] = 'Derniers articles de la cat�gorie %s';
$LANG['wiki_rss_last_articles'] = '%s : derniers articles';

//Favoris
$LANG['wiki_favorites'] = 'Favoris';
$LANG['wiki_unwatch_this_topic'] = 'Ne plus suivre cet article';
$LANG['wiki_unwatch'] = 'Ne plus suivre';
$LANG['wiki_watch'] = 'Suivre cet article';
$LANG['wiki_followed_articles'] = 'Favoris';
$LANG['wiki_already_favorite'] = 'Le sujet que vous d�sirez mettre en favoris est d�j� en favoris';
$LANG['wiki_article_is_not_a_favorite'] = 'L\'article que vous souhaitez supprimer de vos favoris ne figure pas parmi vos favoris';
$LANG['wiki_no_favorite'] = 'Aucun article en favoris';
$LANG['wiki_confirm_unwatch_this_topic'] = 'Etes-vous certain de vouloir supprimer cet article de vos favoris ?';

//Administration
$LANG['wiki_groups_config'] = 'Configuration des groupes';
$LANG['explain_wiki_groups'] = 'Vous pouvez param�trer ici tout ce qui concerne les autorisations. Vous pouvez attribuer des autorisations � un niveau mais aussi des autorisations sp�ciales � un groupe.';
$LANG['wiki_auth_create_article'] = 'Cr�er un article';
$LANG['wiki_auth_create_cat'] = 'Cr�er une cat�gorie';
$LANG['wiki_auth_restore_archive'] = 'Restaurer une archive';
$LANG['wiki_auth_delete_archive'] = 'Supprimer une archive';
$LANG['wiki_auth_edit'] = 'Editer un article';
$LANG['wiki_auth_delete'] = 'Supprimer un article';
$LANG['wiki_auth_rename'] = 'Renommer un article';
$LANG['wiki_auth_redirect'] = 'G�rer les redirections vers un article';
$LANG['wiki_auth_move'] = 'D�placer un article';
$LANG['wiki_auth_status'] = 'Modifier le statut d\'un article';
$LANG['wiki_auth_com'] = 'Commenter un article';
$LANG['wiki_auth_restriction'] = 'Modifier le niveau de restrictions d\'un article';
$LANG['wiki_auth_restriction_explain'] = 'Il est conseill� de le laisser aux mod�rateurs uniquement';
$LANG['wiki_config'] = 'Configuration du wiki';
$LANG['wiki_groups_config'] = 'Gestion des autorisations dans le wiki';
$LANG['wiki_management'] = 'Gestion du wiki';
$LANG['wiki_config_whole'] = 'Configuration g�n�rale';
$LANG['wiki_index'] = 'Accueil du wiki';
$LANG['wiki_count_hits'] = 'Compter le nombre de fois que sont vus les articles';
$LANG['wiki_name'] = 'Nom du wiki';
$LANG['wiki_display_cats'] = 'Afficher la liste des cat�gories principales sur l\'accueil';
$LANG['wiki_no_display'] = 'Ne pas afficher';
$LANG['wiki_display'] = 'Afficher';
$LANG['wiki_last_articles'] = 'Nombre des derniers articles � afficher sur l\'accueil';
$LANG['wiki_last_articles_explain'] = '0 pour d�sactiver';
$LANG['wiki_desc'] = 'Texte de l\'accueil';
	
//explorateur du wiki
$LANG['wiki_explorer'] = 'Explorateur du wiki';
$LANG['wiki_root'] = 'Racine du wiki';
$LANG['wiki_root_contents'] = 'contenu de la racine';
$LANG['wiki_cats_tree'] = 'Arborescence du wiki';
$LANG['wiki_explorer_short'] = 'Explorateur';

?>