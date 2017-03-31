<?php
/*##################################################
 *                            common.php
 *                            -------------------
 *   begin                : August 1, 2013
 *   copyright            : (C) 2013 Julien BRISWALTER
 *   email                : j1.seth@phpboost.com
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
 #						French						#
 ####################################################

//Titre
$lang['module_title'] = 'Contact';
$lang['module_config_title'] = 'Configuration du module contact';

//Contact form
$lang['contact.form.message'] = 'Message';
$lang['contact.send_another_mail'] = 'Envoyer un autre email';
$lang['contact.tracking_number'] = 'Num�ro de suivi';
$lang['contact.acknowledgment_title'] = 'Confirmation';
$lang['contact.acknowledgment'] = 'Votre message a �t� envoy� correctement.

';

//Admin
$lang['admin.config.title'] = 'Titre du formulaire';
$lang['admin.config.informations_bloc'] = 'Zone d\'informations';
$lang['admin.config.informations_enabled'] = 'Afficher la zone d\'informations';
$lang['admin.config.informations_content'] = 'Contenu de la zone d\'informations';
$lang['admin.config.informations.explain'] = 'Cette zone permet d\'afficher des informations (exemple un num�ro de t�l�phone, etc.) � gauche, en haut, � droite ou en dessous du formulaire de contact.';
$lang['admin.config.informations_position'] = 'Position de la zone d\'informations';
$lang['admin.config.informations.position_left'] = 'Gauche';
$lang['admin.config.informations.position_top'] = 'Haut';
$lang['admin.config.informations.position_right'] = 'Droite';
$lang['admin.config.informations.position_bottom'] = 'Bas';
$lang['admin.config.tracking_number_enabled'] = 'G�n�rer un num�ro de suivi pour chaque mail envoy�';
$lang['admin.config.date_in_date_in_tracking_number_enabled'] = 'Afficher la date du jour dans le num�ro de suivi';
$lang['admin.config.date_in_date_in_tracking_number_enabled.explain'] = 'Permet de g�n�rer un num�ro de suivi de la forme <b>aaaammjj-num�ro</b>';
$lang['admin.config.sender_acknowledgment_enabled'] = 'Envoyer une copie du mail � l\'�metteur';
$lang['admin.authorizations.read']  = 'Autorisation d\'afficher le formulaire de contact';
$lang['admin.authorizations.display_field']  = 'Autorisation d\'afficher le champ';

//Fields
$lang['admin.fields.manage'] = 'Gestion des champs';
$lang['admin.fields.manage.page_title'] = 'Gestion des champs du formulaire du module contact';
$lang['admin.fields.title.add_field'] = 'Ajout d\'un nouveau champ';
$lang['admin.fields.title.add_field.page_title'] = 'Ajout d\'un nouveau champ dans le formulaire du module contact';
$lang['admin.fields.title.edit_field'] = 'Edition d\'un champ';
$lang['admin.fields.title.edit_field.page_title'] = 'Edition d\'un champ dans le formulaire du module contact';

//Field
$lang['field.possible_values.email'] = 'Adresse(s) email';
$lang['field.possible_values.email.explain'] = 'Il est possible d\'indiquer plusieurs adresses email s�par�es par une virgule';
$lang['field.possible_values.subject'] = 'Objet';
$lang['field.possible_values.recipient'] = 'Destinataire(s)';
$lang['field.possible_values.recipient.explain'] = 'Le mail sera envoy� au(x) destinataire(s) s�lectionn�(s) si le champ destinataire n\'est pas affich�';

//Messages
$lang['message.success.add'] = 'Le champ <b>:name</b> a �t� ajout�';
$lang['message.success.edit'] = 'Le champ <b>:name</b> a �t� modifi�';
$lang['message.field_name_already_used'] = 'Le nom du champ entr� est d�j� utilis� !';
$lang['message.success_mail'] = 'Votre message a �t� envoy� avec succ�s.';
$lang['message.acknowledgment'] = 'Un message de confirmation vous a �t� envoy� par mail.';
$lang['message.error_mail'] = 'D�sol�, votre mail n\'a pas pu �tre envoy� pour des raisons techniques.';
?>
