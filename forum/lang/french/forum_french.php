<?php
/*##################################################
 *                              forum_french.php
 *                            -------------------
 *   begin                : November 21, 2006
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
#                                                           French                                                                 #
 ####################################################

//Admin
$LANG['forum_management'] = 'Gestion du forum';
$LANG['update_data_cached'] = 'Recompter le nombre de sujets et de messages';

//Erreurs
$LANG['e_topic_lock_forum'] = 'Sujet verrouill�, vous ne pouvez pas poster de message';
$LANG['e_cat_lock_forum'] = 'Forum verrouill�, cr�ation de nouveau sujet/message impossible';
$LANG['e_unexist_topic_forum'] = 'Le topic que vous demandez n\'existe pas';
$LANG['e_unable_cut_forum'] = 'Vous ne pouvez pas scinder le sujet � partir de ce message';
$LANG['e_cat_write'] = 'Vous n\'�tes pas autoris� � �crire dans cette cat�gorie';

//Alertes
$LANG['alert_delete_topic'] = 'Supprimer ce sujet ?';
$LANG['alert_lock_topic'] = 'Verrouiller ce sujet ?';
$LANG['alert_unlock_topic'] = 'D�verrouiller ce sujet ?';
$LANG['alert_move_topic'] = 'D�placer ce sujet ?';
$LANG['alert_warning'] = 'Avertir ce membre ?';
$LANG['alert_history'] = 'Supprimer l\'historique ?';
$LANG['confirm_mark_as_read'] = 'Marquer tous les sujets comme lus ?';
$LANG['contribution_alert_moderators_for_topics'] = 'Sujet non conforme : %s';

//Titres
$LANG['title_forum'] = 'Forum';
$LANG['title_topic'] = 'Sujet';
$LANG['title_post'] = 'Poster';

//Forum
$LANG['forum_index'] = 'Index';
$LANG['forum'] = 'Forum';
$LANG['forum_s'] = 'Forums';
$LANG['subforum_s'] = 'Sous-forums';
$LANG['topic'] = 'Sujet';
$LANG['topic_s'] = 'Sujets';
$LANG['author'] = 'Auteur';
$LANG['distributed'] = 'R�partis en';
$LANG['mark_as_read'] = 'Marquer comme lu';
$LANG['show_topic_track'] = 'Sujets suivis';
$LANG['no_msg_not_read'] = 'Aucun message non lu';
$LANG['show_not_reads'] = 'Messages non lus';
$LANG['show_last_read'] = 'Derniers messages lus';
$LANG['no_last_read'] = 'message lu';
$LANG['last_message'] = 'Dernier message';
$LANG['last_messages'] = 'Derniers messages';
$LANG['forum_new_subject'] = 'Nouveau sujet';
$LANG['post_new_subject'] = 'Poster un nouveau sujet';
$LANG['forum_edit_subject'] = 'Editer Sujet';
$LANG['forum_announce'] = 'Annonce';
$LANG['forum_postit'] = 'Epingl�';
$LANG['forum_lock'] = 'Verrouiller';
$LANG['forum_unlock'] = 'D�verrouiller';
$LANG['forum_move'] = 'D�placer';
$LANG['forum_move_subject'] = 'D�placer le sujet';
$LANG['forum_quote_last_msg'] = 'Reprise du message pr�c�dent';
$LANG['edit_message'] = 'Editer Message';
$LANG['edit_by'] = 'Edit� par';
$LANG['edit_on'] = 'Edit� le';
$LANG['no_message'] = 'Pas de message';
$LANG['group'] = 'Groupe';
$LANG['cut_topic'] = 'Scinder le sujet � partir de ce message';
$LANG['forum_cut_subject'] = 'Scinder le sujet';
$LANG['alert_cut_topic'] = 'Voulez-vous scinder le sujet � partir de ce message ?';
$LANG['track_topic'] = 'Mettre en favori';
$LANG['untrack_topic'] = 'Retirer des favoris';
$LANG['track_topic_pm'] = 'Suivre par message priv�';
$LANG['untrack_topic_pm'] = 'Arr�ter le suivi par message priv�';
$LANG['track_topic_mail'] = 'Suivre par mail';
$LANG['untrack_topic_mail'] = 'Arr�ter le suivi par mail';
$LANG['alert_topic'] = 'Alerter les mod�rateurs';
$LANG['alert_modo_explain'] = 'Vous �tes sur le point d\'alerter les mod�rateurs. Vous aidez l\'�quipe mod�ratrice en lui signalant des topics qui ne respectent pas certaines r�gles, mais sachez que lorsque vous alertez un mod�rateur votre pseudo est enregistr�, il est donc n�cessaire que votre demande soit justifi�e sans quoi vous risquez des sanctions de la part de l\'�quipe des mod�rateurs et administrateurs en cas d\'abus. Afin d\'aider l\'�quipe, merci d\'expliquer ce qui ne respecte pas les conditions dans ce sujet. 

Vous d�sirez alerter les mod�rateurs d\'un probl�me sur le sujet suivant';
$LANG['alert_title'] = 'Br�ve description';
$LANG['alert_contents'] = 'Merci de d�tailler davantage le probl�me afin d\'aider l\'�quipe mod�ratrice';
$LANG['alert_success'] = 'Vous avez signal� avec succ�s la non-conformit� du sujet <em>%title</em>, l\'�quipe mod�ratrice vous remercie de l\'avoir aid�e.';
$LANG['alert_topic_already_done'] = 'Nous vous remercions d\'avoir pris l\'initiative d\'aider l\'�quipe mod�ratrice, mais un membre a d�j� signal� une non-conformit� de ce sujet.';
$LANG['alert_back'] = 'Retour au sujet';
$LANG['explain_track'] = 'Cochez la case Mp pour recevoir un message priv�, Mail pour un email lors d\'une r�ponse au sujet que vous suivez. Cochez la case supprimer pour ne plus suivre le sujet.';
$LANG['sub_forums'] = 'Sous-forums';
$LANG['moderation_forum'] = 'Mod�ration du forum';
$LANG['no_topics'] = 'Aucun sujet � afficher';
$LANG['for_selection'] = 'Pour la s�lection';
$LANG['change_status_to'] = 'Mettre le statut: %s';
$LANG['change_status_to_default'] = 'Mettre le statut par d�faut';
$LANG['move_to'] = 'D�placer vers...';

//Recherche
$LANG['no_result'] = 'Aucun r�sultat';

//Stats
$LANG['stats'] = 'Statistiques';
$LANG['nbr_topics_day'] = 'Nombre de sujets par jour';
$LANG['nbr_msg_day'] = 'Nombre de messages par jour';
$LANG['nbr_topics_today'] = 'Nombre de sujets aujourd\'hui';
$LANG['nbr_msg_today'] = 'Nombre de messages aujourd\'hui';
$LANG['forum_last_msg'] = 'Les 10 derniers sujets ayant eu une r�ponse';
$LANG['forum_popular'] = 'Les 10 sujets les plus populaires';
$LANG['forum_nbr_answers'] = 'Les 10 sujets ayant eu le plus de r�ponses';

//Historique
$LANG['history'] = 'Historique des actions';
$LANG['history_member_concern'] = 'Membre concern�';
$LANG['no_action'] = 'Aucune action enregistr�e';
$LANG['delete_msg'] = 'Suppression d\'un message';
$LANG['delete_topic'] = 'Suppression d\'un sujet';
$LANG['lock_topic'] = 'Verrouillage d\'un sujet';
$LANG['unlock_topic'] = 'D�verrouillage d\'un sujet';
$LANG['move_topic'] = 'D�placement d\'un sujet';
$LANG['cut_topic'] = 'Scindement d\'un sujet';
$LANG['warning_on_user'] = '+10% � un membre';
$LANG['warning_off_user'] = '-10% � un membre';
$LANG['set_warning_user'] = 'Modification pourcentage avertissement';
$LANG['more_action'] = 'Voir 100 actions en plus';
$LANG['ban_user'] = 'Bannissement d\'un membre';
$LANG['edit_msg'] = 'Edition message d\'un membre';
$LANG['edit_topic'] = 'Edition sujet d\'un membre';
$LANG['solve_alert'] = 'R�solution d\'une alerte';
$LANG['wait_alert'] = 'Mise en attente d\'une alerte';
$LANG['del_alert'] = 'Suppression d\'une alerte';

//Messages du membre
$LANG['show_member_msg'] = 'Voir tous les messages du membre';

//Sondages
$LANG['poll'] = 'Sondage';
$LANG['mini_poll'] = 'Mini Sondage';
$LANG['poll_main'] = 'Voil� l\'espace de sondage du site, profitez en pour donner votre avis, ou tout simplement r�pondre aux sondages.';
$LANG['poll_back'] = 'Retour au(x) sondage(s)';
$LANG['redirect_none'] = 'Aucun sondage disponible';
$LANG['confirm_vote'] = 'Votre vote a bien �t� pris en compte';
$LANG['already_vote'] = 'Vous avez d�j� vot�';
$LANG['no_vote'] = 'Votre vote nul a �t� consid�r�';
$LANG['poll_vote'] = 'Vote';
$LANG['poll_vote_s'] = 'Votes';
$LANG['poll_result'] = 'R�sultats';
$LANG['alert_delete_poll'] = 'Supprimer ce sondage ?';
$LANG['unauthorized_poll'] = 'Vous n\'�tes pas autoris� � voter !';
$LANG['question'] = 'Question';
$LANG['answers'] = 'R�ponses';
$LANG['poll_type'] = 'Type de sondage';
$LANG['open_menu_poll'] = 'Ouvrir le menu sondage';
$LANG['simple_answer'] = 'R�ponse simple';
$LANG['multiple_answer'] = 'R�ponses multiples';
$LANG['delete_poll'] = 'Supprimer le sondage';
$LANG['require_title_poll'] = 'Veuillez entrer un titre pour le sondage !';

//Post
$LANG['forum_mail_title_new_post'] = 'Nouveau message sur le forum';
$LANG['forum_mail_new_post'] = 'Cher %s

Vous suivez le sujet: %s
 
Vous avez demand� � �tre averti lors d\'une r�ponse � celui-ci.

%s a r�pondu sur le sujet: 
%s

[Suite du message : %s]




Si vous ne d�sirez plus �tre averti des r�ponses de ce sujet, cliquez sur le lien ci-dessous. 
%s

' . MailServiceConfig::load()->get_mail_signature();

//Gestion des alertes
$LANG['alert_management'] = 'Gestion des alertes';
$LANG['alert_concerned_topic'] = 'Sujet concern�';
$LANG['alert_concerned_cat'] = 'Cat�gorie du sujet concern�';
$LANG['alert_login'] = 'Posteur de l\'alerte';
$LANG['alert_msg'] = 'Pr�cisions';
$LANG['alert_not_solved'] = 'En attente de traitement';
$LANG['alert_solved'] = 'R�solue par ';
$LANG['change_status_to_0'] = 'Mettre en attente de traitement';
$LANG['change_status_to_1'] = 'Mettre en r�solu';
$LANG['alert_not_auth'] = 'Cette alerte a �t� post�e dans un forum dans lequel vous n\'�tes pas mod�rateur.';
$LANG['delete_several_alerts'] = 'Etes vous sur de vouloir supprimer les alertes s�lectionn�es ?';
$LANG['new_alerts'] = 'nouvelle alerte';
$LANG['new_alerts_s'] = 'nouvelles alertes';
$LANG['action'] = 'Action';

//Ranks
$LANG['upload_rank'] = 'Uploader une image de rang';
$LANG['explain_upload_img'] = 'JPG, GIF, PNG, BMP autoris�s';
$LANG['rank'] = 'Rang';
$LANG['special_rank'] = 'Rang sp�cial';
$LANG['rank_name'] = 'Nom du Rang';
$LANG['nbr_msg'] = 'Nombre de message(s)';
$LANG['img_assoc'] = 'Image associ�e';
$LANG['require_rank_name'] = 'Veuillez entrer un nom pour le rang !';
$LANG['require_nbr_msg_rank'] = 'Veuillez entrer un nombre de messages pour le rang !';
?>