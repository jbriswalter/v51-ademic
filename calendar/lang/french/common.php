<?php
/*##################################################
 *                              common.php
 *                            -------------------
 *   begin                : August 20, 2013
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
# French                                           #
####################################################

//Titre du module
$lang['module_title'] = 'Calendrier';
$lang['module_config_title'] = 'Configuration du calendrier';

//Messages divers
$lang['calendar.notice.no_current_action'] = 'Aucun �v�nement pour cette date';
$lang['calendar.notice.no_pending_event'] = 'Aucun �v�nement en attente';
$lang['calendar.notice.suscribe.event_date_expired'] = 'L\'�v�nement est termin�, vous ne pouvez pas vous inscrire.';
$lang['calendar.notice.unsuscribe.event_date_expired'] = 'L\'�v�nement est termin�, vous ne pouvez pas vous d�sinscrire.';

//Titres
$lang['calendar.titles.add_event'] = 'Ajouter un �v�nement';
$lang['calendar.titles.delete_event'] = 'Supprimer l\'�v�nement';
$lang['calendar.titles.delete_occurrence'] = 'L\'occurrence';
$lang['calendar.titles.delete_all_events_of_the_serie'] = 'Tous les �v�nements de la s�rie';
$lang['calendar.titles.event_edition'] = 'Edition de l\'�v�nement';
$lang['calendar.titles.event_removal'] = 'Suppression de l\'�v�nement';
$lang['calendar.titles.events_of'] = 'Ev�nements du';
$lang['calendar.titles.event'] = 'Ev�nement';
$lang['calendar.titles.recurrence'] = 'R�currence';
$lang['calendar.titles.repetition'] = 'R�p�tition';
$lang['calendar.pending'] = 'Ev�nements en attente';
$lang['calendar.manage'] = 'G�rer les �v�nements';
$lang['calendar.events_list'] = 'Liste des �v�nements';

//Labels
$lang['calendar.labels.location'] = 'Adresse';
$lang['calendar.labels.created_by'] = 'Cr�� par';
$lang['calendar.labels.registration_authorized'] = 'Activer l\'inscription des membres � l\'�v�nement';
$lang['calendar.labels.max_registered_members'] = 'Nombre de participants maximum';
$lang['calendar.labels.max_registered_members.explain'] = '0 pour illimit�';
$lang['calendar.labels.remaining_place'] = 'Plus qu\'une place disponible !';
$lang['calendar.labels.remaining_places'] = 'Il ne reste que :missing_number places !';
$lang['calendar.labels.max_participants_reached'] = 'Le nombre de participants maximum a �t� atteint.';
$lang['calendar.labels.last_registration_date_enabled'] = 'D�finir une date limite d\'inscription';
$lang['calendar.labels.last_registration_date'] = 'Derni�re date d\'inscription';
$lang['calendar.labels.remaining_day'] = 'Dernier jour pour s\'inscrire !';
$lang['calendar.labels.remaining_days'] = 'Il ne reste que :days_left jours pour s\'inscrire !';
$lang['calendar.labels.registration_closed'] = 'Les inscriptions pour cet �v�nement sont termin�es.';
$lang['calendar.labels.repeat_type'] = 'R�p�ter';
$lang['calendar.labels.repeat_number'] = 'Nombre de r�p�titions';
$lang['calendar.labels.repeat_times'] = 'fois';
$lang['calendar.labels.repeat.never'] = 'Jamais';
$lang['calendar.labels.events_number'] = ':events_number �v�nements';
$lang['calendar.labels.one_event'] = '1 �v�nement';
$lang['calendar.labels.start_date'] = 'Date de d�but';
$lang['calendar.labels.end_date'] = 'Date de fin';
$lang['calendar.labels.contribution.explain'] = 'Vous n\'�tes pas autoris� � cr�er un �v�nement, cependant vous pouvez en proposer un.';
$lang['calendar.labels.birthday'] = 'Anniversaire';
$lang['calendar.labels.birthday_title'] = 'Anniversaire de';
$lang['calendar.labels.participants'] = 'Participants';
$lang['calendar.labels.no_one'] = 'Personne';
$lang['calendar.labels.suscribe'] = 'S\'inscrire';
$lang['calendar.labels.unsuscribe'] = 'Se d�sinscrire';

//Administration
$lang['calendar.config.events.management'] = 'Gestion des �v�nements';
$lang['calendar.config.category.color'] = 'Couleur';
$lang['calendar.config.items_number_per_page'] = 'Nombre d\'�v�nements affich�s par page';
$lang['calendar.config.event_color'] = 'Couleur des �v�nements';
$lang['calendar.config.members_birthday_enabled'] = 'Afficher les anniversaires des membres';
$lang['calendar.config.birthday_color'] = 'Couleur des anniversaires';

$lang['calendar.authorizations.display_registered_users'] = 'Autorisation d\'afficher la liste des inscrits';
$lang['calendar.authorizations.register'] = 'Autorisation de s\'inscrire � l\'�v�nement';

//SEO
$lang['calendar.seo.description.root'] = 'Tous les �v�nements du site :site.';
$lang['calendar.seo.description.pending'] = 'Tous les �v�nements en attente.';

//Feed name
$lang['calendar.feed.name'] = 'Ev�nements';

//Messages
$lang['calendar.message.success.add'] = 'L\'�v�nement <b>:title</b> a �t� ajout�';
$lang['calendar.message.success.edit'] = 'L\'�v�nement <b>:title</b> a �t� modifi�';
$lang['calendar.message.success.delete'] = 'L\'�v�nement <b>:title</b> a �t� supprim�';

//Erreurs
$lang['calendar.error.e_invalid_date'] = 'La date entr�e est invalide';
$lang['calendar.error.e_invalid_start_date'] = 'La date de d�but entr�e est invalide';
$lang['calendar.error.e_invalid_end_date'] = 'La date de fin entr�e est invalide';
$lang['calendar.error.e_user_born_field_disabled'] = 'Le champ <b>Date de naissance</b> n\'est pas affich� dans le profil des membres. Veuillez activer l\'affichage du champ dans la <a href="' . AdminExtendedFieldsUrlBuilder::fields_list()->rel() . '">Gestion des champs du profils</a> pour permettre aux membres de renseigner leur date de naissance et afficher leur date d\'anniversaire dans le calendrier.';
?>
