<?php
/*##################################################
 *                              media_french.php
 *                            -------------------
 *   begin               	: October 20, 2008
 *   copyright        	: (C) 2007 Geoffrey ROGUELON
 *   email               	: liaght@gmail.com
 *
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
#                     French                       #
 ####################################################

global $MEDIA_LANG;

$MEDIA_LANG = array(
// media.php
'add_on_date' => 'Ajout� le %s',
'n_time' => '%d fois',
'n_times' => '%d fois',
'num_note' => '%d note',
'num_notes' => '%d notes',
'num_media' => '%d fichier multim�dia',
'num_medias' => '%d fichiers multim�dias',
'sort_popularity' => 'Popularit�',
'sort_title' => 'Titre',
'media_infos' => 'Information sur le fichier multim�dia',
'media_added_by' => 'Par',
'view_n_times' => 'Vu %d fois',

// media_action.php
'contribution_counterpart' => 'Compl�ment de contribution',
'contribution_counterpart_explain' => 'Expliquez les raisons de votre contribution (pourquoi vous souhaitez proposer ce fichier). Ce champ est facultatif.',
'contribute_media' => 'Proposer un fichier multim�dia',
'add_media' => 'Ajouter un fichier multim�dia',
'delete_media' => 'Supprimer un fichier multim�dia',
'deleted_success' => 'Le fichier multim�dia a �t� supprim� avec succ�s !',
'edit_success' => 'Le fichier multim�dia a �t� �dit� avec succ�s !',
'edit_media' => '�diter un fichier multim�dia',
'media_aprobe' => 'Approbation',
'media_approved' => 'Approuv�e',
'media_description' => 'Description du fichier multim�dia',
'media_height' => 'Hauteur de la vid�o',
'media_moderation' => 'Mod�ration',
'media_name' => 'Titre du fichier multim�dia',
'media_url' => 'Lien du fichier multim�dia',
'media_width' => 'Largeur de la vid�o',
'notice_contribution' => 'Vous n\'�tes pas autoris� � ajouter un fichier multim�dia, cependant vous pouvez proposer un fichier multim�dia. Votre contribution suivra le parcours classique et sera trait�e dans la panneau de contribution de PHPBoost. Vous pouvez, dans le champ suivant, justifier votre contribution de fa�on � expliquer votre d�marche � un approbateur.',
'require_name' => 'Vous devez donnez un titre � ce fichier multim�dia !',
'require_url' => 'Vous devez renseigner le lien de votre fichier multim�dia !',
'hide_media' => 'Cacher ce fichier multim�dia',

// moderation_media.php
'all_file' => 'Tous les fichiers',
'confirm_delete_media_all' => 'Cette action supprimera D�FINITIVEMENT tous les fichiers s�lectionn�s !',
'display_file' => 'Afficher les fichiers',
'file_unaprobed' => 'Fichier d�sapprouv�',
'file_unvisible' => 'Fichier invisible',
'file_visible' => 'Fichier approuv� et visible',
'filter' => 'Filtre',
'from_cats' => 'de la cat�gorie',
'hide_media_short' => 'Cacher',
'include_sub_cats' => ', inclure les sous-cat�gories :',
'legend' => 'L�gende',
'moderation_success' => 'Les actions ont �t� r�alis�es avec succ�s !',
'no_media_moderate' => 'Aucun fichier multim�dia � mod�rer !',
'show_media_short' => 'Montrer',
'unaprobed' => 'D�sapprouv�s',
'unvisible' => 'Invisibles',
'unaprobed_media_short' => 'D�sapprouver',
'unvisible_media' => 'Fichier invisible',
'visible' => 'Approuv�s',
);

$LANG['e_mime_disable_media'] = 'Le type de fichier multim�dia que vous souhaitez proposer est d�sactiv� !';
$LANG['e_mime_unknow_media'] = 'Impossible de d�terminer le type de ce fichier !';
$LANG['e_link_empty_media'] = 'Veuillez renseigner le lien de votre fichier multim�dia !';
$LANG['e_unexist_media'] = 'Le fichier multim�dia demand� n\'existe pas !';

?>