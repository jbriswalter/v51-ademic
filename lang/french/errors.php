<?php
/*##################################################
 *                                errors.php
 *                            -------------------
 *   begin                : June 27, 2006
 *   copyright            : (C) 2005 Viarre R�gis
 *   email                : mickaelhemri@gmail.com
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
#                        French                     #
 ####################################################

//Erreurs
$LANG['e_incomplete'] = 'Tous les champs obligatoires doivent �tre remplis !';
$LANG['e_readonly'] = 'Vous ne pouvez ex�cuter cette action, car vous avez �t� plac� en lecture seule !';
$LANG['e_flood'] = 'Vous ne pouvez pas encore poster, r�essayez dans quelques instants';
$LANG['e_l_flood'] = 'Nombre maximum de lien(s) internet autoris�(s) dans votre message : %d';

//Upload
$LANG['e_upload_max_dimension'] = 'Dimensions maximales du fichier d�pass�es';
$LANG['e_upload_max_weight'] = 'Poids maximum du fichier d�pass�';
$LANG['e_upload_invalid_format'] = 'Format du fichier invalide';
$LANG['e_upload_php_code'] = 'Contenu du fichier invalide, le code php est interdit';
$LANG['e_upload_error'] = 'Erreur lors de l\'upload du fichier';
$LANG['e_unlink_disabled'] = 'Fonction de suppression des fichiers d�sactiv�e sur votre serveur';
$LANG['e_upload_failed_unwritable'] = 'Upload impossible, interdiction d\'�criture dans ce dossier';
$LANG['e_upload_already_exist'] = 'Le fichier existe d�j�, �crasement non autoris�';
$LANG['e_max_data_reach'] = 'Taille maximale atteinte, supprimez d\'anciens fichiers';

//Membres
$LANG['e_display_name_auth'] = 'Le nom d\'affichage entr� est d�j� utilis� !';
$LANG['e_pseudo_auth'] = 'Le pseudo entr� est d�j� utilis� !';
$LANG['e_mail_auth'] = 'L\'adresse email entr�e est d�j� utilis�e !';
$LANG['e_member_ban'] = 'Vous avez �t� banni! Vous pourrez vous reconnecter dans';
$LANG['e_member_ban_w'] = 'Vous avez �t� banni pour un comportement abusif! Contactez l\'administrateur s\'il s\'agit d\'une erreur.';
$LANG['e_unactiv_member'] = 'Votre compte n\'a pas encore �t� activ� !';

//Groupes
$LANG['e_already_group'] = 'Le membre appartient d�j� au groupe';

//Mps
$LANG['e_pm_full'] = 'Votre boite de messages priv�s est pleine, vous avez <strong>%d</strong> conversation(s) en attente, supprimez d\'anciennes conversations pour pouvoir la/les lire.';
$LANG['e_pm_full_post'] = 'Votre boite de messages priv�s est pleine, supprimez d\'anciennes conversations pour pouvoir en envoyer de nouvelles.';
$LANG['e_unexist_user'] = 'L\'utilisateur s�lectionn� n\'existe pas !';
$LANG['e_pm_del'] = 'Le destinataire a supprim� la conversation, vous ne pouvez plus poster';
$LANG['e_pm_noedit'] = 'Le destinataire a d�j� lu votre message, vous ne pouvez plus l\'�diter';
$LANG['e_pm_nodel'] = 'Le destinataire a d�j� lu votre message, vous ne pouvez plus le supprimer';

?>
