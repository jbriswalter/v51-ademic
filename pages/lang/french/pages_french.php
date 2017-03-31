<?php
/*##################################################
 *                              pages_french.php
 *                            -------------------
 *   begin                : August 07, 2007
 *   copyright            : (C) 2007 Beno�t Sautel
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
$LANG['pages'] = 'Pages';

$LANG['page_hits'] = 'Cette page a �t� consult�e %d fois';

//Administration
$LANG['pages_count_hits_activated'] = 'Compter le nombre de fois que la page est consult�e';
$LANG['pages_count_hits_explain'] = 'Peut-�tre choisi au cas par cas pour chaque page';
$LANG['pages_auth_read'] = 'Lecture des pages';
$LANG['pages_auth_edit'] = 'Modification de page';
$LANG['pages_auth_read_com'] = 'Utilisation des commentaires';
$LANG['pages_auth'] = 'Autorisations';
$LANG['select_all'] = 'Tout s�lectionner';
$LANG['select_none'] = 'Tout d�s�lectionner';
$LANG['ranks'] = 'Rangs';
$LANG['groups'] = 'Groupes';
$LANG['pages_config'] = 'Configuration des pages';
$LANG['pages_management'] = 'Gestion des pages';
$LANG['pages_manage'] = 'G�rer les pages';

//Cr�ation / �dition d'une page
$LANG['pages_edition'] = 'Modification d\'une page';
$LANG['pages_creation'] = 'Cr�ation d\'une page';
$LANG['pages_edit_page'] = 'Modification de la page <em>%s</em>';
$LANG['page_title'] = 'Titre de la page';
$LANG['page_contents'] = 'Contenu de la page';
$LANG['pages_edit'] = 'Modifier cette page';
$LANG['pages_delete'] = 'Supprimer cette page';
$LANG['pages_create'] = 'Cr�er une page';
$LANG['pages_comments_activated'] = 'Activer les commentaires';
$LANG['pages_display_print_link'] = 'Afficher le lien d\'impression';
$LANG['pages_own_auth'] = 'Mettre des autorisations particuli�res � la page';
$LANG['pages_is_cat'] = 'Cette page est une cat�gorie';
$LANG['pages_parent_cat'] = 'Cat�gorie parente';
$LANG['pages_page_path'] = 'Emplacement';
$LANG['pages_properties'] = 'Propri�t�s';
$LANG['pages_no_selected_cat'] = 'Aucune cat�gorie s�lectionn�e';
$LANG['explain_select_multiple'] = 'Maintenez ctrl puis cliquez dans la liste pour faire plusieurs choix';
$LANG['pages_previewing'] = 'Pr�visualisation :';
$LANG['pages_contents_part'] = 'Contenu de la page';
$LANG['pages_delete_success'] = 'La page a �t� supprim�e avec succ�s';
$LANG['pages_delete_failure'] = 'La page n\'a pas pu �tre supprim�e';
$LANG['pages_confirm_delete'] = 'Etes-vous sur de vouloir supprimer cette page ?';

//Divers
$LANG['pages_links_list'] = 'Outils';
$LANG['pages_com'] = 'Commentaires';
$LANG['pages_explorer'] = 'Explorateur';
$LANG['pages_root'] = 'Racine';
$LANG['pages_cats_tree'] = 'Arborescence des pages';
$LANG['pages_display_coms'] = 'Commentaires (%d)';
$LANG['pages_post_com'] = 'Poster un commentaire';
$LANG['pages_page_com'] = 'Commentaires de la page %s';

//Accueil
$LANG['pages_explain'] = 'Vous �tes sur le panneau de contr�le des pages. Vous pouvez ici g�rer l\'ensemble de vos pages.<br /><br />
<p>Vous utilisez l\'�diteur que vous avez choisi dans votre profil pour mettre en forme les pages. Pour ins�rer du code HTML, utilisez la balise BBCode suivante :<br /><div class="code">[html]code html[/html]</div></p>
<p>La balise est la m�me que vous utilisiez l\'�diteur BBCode ou TinyMCE.</p><br />
<p>Pour faire des liens entre les diff�rentes pages, il suffit d\'utiliser la balise BBCode suivante :<br /><div class="code">[link=titre-de-la-page]Lien vers la page[/link]</div></p>
<p>Cette balise existe que sur ce module.</p>
<div class="warning">Pour des raisons de s�curit� il est interdit d\'ins�rer du code PHP dans les pages.</div>';
$LANG['pages_redirections'] = 'Gestion des redirections';
$LANG['pages_num_pages'] = '%d page(s) existantes';
$LANG['pages_num_coms'] = '%d commentaire(s) sur l\'ensemble des pages soit %1.1f commentaire par page';
$LANG['pages_stats'] = 'Statistiques';
$LANG['pages_tools'] = 'Outils';

//Redirections et renommer
$LANG['pages_rename'] = 'Renommer';
$LANG['pages_redirection_management'] = 'Gestion des redirections';
$LANG['pages_redirection_manage'] = 'G�rer les redirections';
$LANG['pages_rename_page'] = 'Renommer la page <em>%s</em>';
$LANG['pages_new_title'] = 'Nouveau titre de la page';
$LANG['pages_create_redirection'] = 'Cr�er une redirection depuis l\'ancien titre vers le nouveau';
$LANG['pages_explain_rename'] = 'Vous �tes sur le point de renommer la page. Vous devez savoir que tous les liens qui m�nent vers cet article seront rompus. C\'est pourquoi vous avez la possibilit� de cr�er une redirection depuis l\'ancien nom vers le nouveau afin de pouvoir continuer � utiliser ces liens';
$LANG['pages_confirm_delete_redirection'] = 'Etes-vous sur de vouloir supprimer cette redirection ?';
$LANG['pages_delete_redirection'] = 'Supprimer cette redirection';
$LANG['pages_redirected_from'] = 'Redirig� depuis <em>%s</em>';
$LANG['pages_redirection_title'] = 'Titre de la redirection';
$LANG['pages_redirection_target'] = 'Cible de la redirection';
$LANG['pages_redirection_actions'] = 'Actions';
$LANG['pages_manage_redirection'] = 'Voir les redirections menant � la m�me page';
$LANG['pages_no_redirection'] = 'Aucune redirection existante';
$LANG['pages_create_redirection'] = 'Cr�er une redirection vers cette page';
$LANG['pages_creation_redirection'] = 'Cr�ation d\'une redirection';
$LANG['pages_creation_redirection_title'] = 'Cr�ation d\'une redirection vers la page : %s';
$LANG['pages_redirection_title'] = 'Nom de la redirection';
$LANG['pages_remove_this_cat'] = 'Suppression de la cat�gorie : <em>%s</em>';
$LANG['pages_remove_all_contents'] = 'Supprimer tout son contenu (action irr�versible)';
$LANG['pages_move_all_contents'] = 'D�placer tout son contenu dans le dossier suivant :';
$LANG['pages_future_cat'] = 'Cat�gorie dans laquelle vous souhaitez d�placer ces �l�ments';
$LANG['pages_change_cat'] = 'Changer de cat�gorie';
$LANG['pages_delete_cat'] = 'Suppression d\'une cat�gorie';
$LANG['pages_confirm_remove_cat'] = 'Etes-vous sur de vouloir supprimer cette cat�gorie ?';
 
//Erreurs
$LANG['page_alert_title'] = 'Vous devez entrer un titre';
$LANG['page_alert_contents'] = 'Vous devez entrer le contenu de votre page';
$LANG['pages_already_exists'] = 'Le titre que vous avez choisi pour la page existe d�j�. Vous devez en choisir un autre, chaque page �tant rep�r�e uniquement par son titre, celui-ci doit �tre unique.';
$LANG['pages_cat_contains_cat'] = 'La cat�gorie que vous avez s�lectionn�e pour placer cette cat�gorie est contenue par cette m�me cat�gorie, ce qui n\'est pas possible. Merci de choisir une autre cat�gorie';
$LANG['pages_notice_previewing'] = 'Vous �tes en train de pr�visualiser ce que vous avez entr�. Aucune modification n\'a �t� apport�e dans la base de donn�es, vous devez valider votre page afin que les modifications soient prises en compte';

$LANG['pages_rss_desc'] = 'Pages actualit�s';

?>