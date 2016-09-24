<?php
/*##################################################
 *		                         common.php
 *                            -------------------
 *   begin                : June 23, 2016
 *   copyright            : (C) 2016 Sebastien LARTIGUE
 *   email                : babsolune@phpboost.com
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

/**
 * @author Sebastien LARTIGUE <babsolune@phpboost.com>
 */

 ####################################################
 #                     French                       #
 ####################################################

$lang['module_config_title'] = 'Configuration des annonces';
$lang['module_title'] = 'Petites annonces';

$lang['smallads'] = 'Petites annonces';
$lang['smallads.add'] = 'Ajouter une annonce';
$lang['smallads.edit'] = 'Modifier une annonce';
$lang['smallads.pending'] = 'Annonces en attente';
$lang['smallads.manage'] = 'Gérer les annonces';
$lang['smallads.management'] = 'Gestion des annonces';

$lang['smallads.seo.description.root'] = 'Toutes les annonces du site :site.';
$lang['smallads.seo.description.tag'] = 'Toutes les annonces sur le sujet :subject.';
$lang['smallads.seo.description.pending'] = 'Toutes les annonces en attente.';

$lang['smallads.type'] = 'Type d\'annonce';
$lang['smallads.status.all'] = 'Tous';
$lang['smallads.status.sell'] = 'Vente';
$lang['smallads.status.buy'] = 'Achat';
$lang['smallads.status.give'] = 'Don';
$lang['smallads.status.exchange'] = 'échange';
$lang['smallads.form.short_contents'] = 'Condensé de l\'annonce';
$lang['smallads.form.short_contents.description'] = 'Pour que le condensé de l\'annonce soit affiché, veuillez activer l\'option dans la configuration du module';
$lang['smallads.form.short_contents.enabled'] = 'Personnaliser le condensé de l\'annonce';
$lang['smallads.form.short_contents.enabled.description'] = 'Si non coché, l\'annonce est automatiquement coupée é :number caractéres et le formatage du texte supprimé.';
$lang['smallads.form.contribution.explain'] = 'Vous n\'étes pas autorisé é créer une annonce, cependant vous pouvez en proposer une.';
$lang['smallads.form.price'] = 'Prix';
$lang['smallads.form.picture'] = 'Image principale';
$lang['smallads.form.carousels'] = 'Ajouter un carrousel d\'image';
$lang['smallads.form.colors'] = 'Couleur';
$lang['smallads.form.details'] = 'Caractéristiques';
$lang['smallads.form.city'] = 'Ville';
$lang['smallads.form.zipcode'] = 'Code postal';
$lang['smallads.form.top.list'] = 'Placer l\'annonce en téte de liste';
$lang['smallads.form.sold'] = 'Article(s) vendu(s)';

$lang['smallads.category.filter'] = 'Sélectionnez une catégories';
$lang['smallads.options.details'] = 'Détails de l\'annonce';
$lang['smallads.reference'] = 'Référence';
$lang['smallads.price'] = 'Prix';
$lang['smallads.colors'] = 'Couleurs disponibles';
$lang['smallads.description'] = 'Description :';
$lang['smallads.location'] = 'Lieu de vente';
$lang['smallads.sold'] = 'VENDU';

//Administration
$lang['admin.config.number_columns_display_smallads'] = 'Nombre de colonnes pour afficher les annonces';
$lang['admin.config.display_condensed'] = 'Afficher le condensé de l\'annonce et non l\'annonce entiére';
$lang['admin.config.display_descriptions_to_guests'] = 'Afficher le condensé des annonces aux visiteurs s\'ils n\'ont pas l\'autorisation de lecture';
$lang['admin.config.number_character_to_cut'] = 'Nombre de caractéres pour couper l\'annonce';
$lang['admin.config.smallads_suggestions_enabled'] = 'Activer l\'affichage des suggestions';

$lang['admin.config.display.options'] = 'Affichage des options des annonces';
$lang['admin.config.send.author.email'] = 'Envoyer l\'email de réponse é l\'auteur de l\'annonce et non aux administrateurs';

//Feed name
$lang['feed.name'] = 'Actualités des petites annonces';

//Messages
$lang['smallads.message.success.add'] = 'L\'annonce <b>:name</b> a été ajoutée';
$lang['smallads.message.success.edit'] = 'L\'annonce <b>:name</b> a été modifiée';
$lang['smallads.message.success.delete'] = 'L\'annonce <b>:name</b> a été supprimée';

// Answer form
$lang['answer.btn'] = 'Répondre é cette annonce';
$lang['answer.mail.success'] = 'le mail a été envoyé avec succes';
$lang['answer.email'] = 'Répondre é cette annonce';
$lang['answer.form.cookies'] = 'Aucune donnée n\'est enregistrée sur le site';
$lang['answer.form.title'] = 'Titre de l\'annonce';
$lang['answer.form.lastname'] = 'Nom :';
$lang['answer.form.firstname'] = 'Prénom :';
$lang['answer.form.phone'] = 'Téléphone :';
$lang['answer.form.email'] = 'Adresse email :';
$lang['answer.form.recipient.mail'] = 'Email du destinataire :';
$lang['is.interested.in'] = 'est intéressé par l\'annonce : ';
$lang['answer.form.message'] = 'Message';

// Mini module
$lang['mini.title'] = 'Petites annonces';
$lang['mini.there'] = 'Il y a';
$lang['mini.no.smallads'] = 'Il n\'y a aucune annonce sur le site';
$lang['mini.smallads'] = 'annonce(s) sur le site';
$lang['mini.last.smallads'] = 'Annonce la plus récente';
$lang['mini.view.all'] = 'Voir toutes les annonces';

?>