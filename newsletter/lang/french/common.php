<?php
/*##################################################
 *                             common.php
 *                            -------------------
 *   begin                :  March 11, 2011
 *   copyright            : (C) 2011 MASSY Kevin
 *   email                : kevin.massy@phpboost.com
 *
 *  
 ###################################################
 *
 *   This program is a free software. You can redistribute it and/or modify
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

//Title
$lang['newsletter.home'] = 'Accueil';
$lang['newsletter'] = 'Newsletter';
$lang['newsletter.archives'] = 'Archives';
$lang['newsletter.subscribers'] = 'Liste des inscrits';
$lang['newsletter.streams'] = 'Gestion des flux';
$lang['newsletter.streams.manage'] = 'G�rer les flux';

//Other title
$lang['subscribe.newsletter'] = 'S\'abonner aux newsletters';
$lang['subscriber.edit'] = 'Editer un inscrit';
$lang['archives.list'] = 'Liste des archives';
$lang['newsletter-add'] = 'Ajouter une newsletter';
$lang['newsletter.subscribe_newsletters'] = 'S\'abonner � une newsletter';
$lang['newsletter.unsubscribe_newsletters'] = 'Se d�sabonner d\'une newsletter';
$lang['stream.add'] = 'Ajout d\'un flux';
$lang['stream.edit'] = 'Modification d\'un flux';
$lang['stream.delete'] = 'Suppression d\'un flux';
$lang['stream.delete.description'] = 'Vous �tes sur le point de supprimer le flux. Deux solutions s\'offrent � vous. Vous pouvez soit d�placer l\'ensemble de son contenu (newsletters et flux) dans un autre flux soit supprimer l\'ensemble du flux. <strong>Attention, cette action est irr�versible !</strong>';
$lang['newsletter.list_newsletters'] = 'Liste des newsletters';

//Admin
$lang['admin.mail-sender'] = 'Adresse d\'envoi';
$lang['admin.mail-sender-explain'] = 'Adresse mail valide';
$lang['admin.newsletter-name'] = 'Nom de la newsletter';
$lang['admin.newsletter-name-explain'] = 'Objet du mail envoy�';

//Authorizations
$lang['admin.newsletter-authorizations'] = 'Autorisations';
$lang['auth.read'] = 'Autorisations d\'acc�s aux flux';
$lang['auth.archives-read'] = 'Autorisations de lecture des archives';
$lang['auth.archives-moderation'] = 'Autorisations de mod�ration des archives';
$lang['auth.subscribers-read'] = 'Autorisations de lecture de la liste des inscrits';
$lang['auth.subscribers-moderation'] = 'Autorisations de mod�reration des inscrits';
$lang['auth.subscribe'] = 'Autorisations de s\'enregistrer aux newsletters';
$lang['auth.create-newsletter'] = 'Autorisations de cr�er une newsletter';

//Subscribe
$lang['subscribe.mail'] = 'Mail';
$lang['subscribe.newsletter_choice'] = 'Choisissez les newsletters auxquelles vous souhaitez �tre abonn�';

//Subscribers
$lang['subscribers.list'] = 'Liste des inscrits';
$lang['subscribers.pseudo'] = 'Pseudo';
$lang['subscribers.mail'] = 'Mail';
$lang['subscribers.delete'] = 'Voulez-vous vraiment supprimer cette personne des inscrits ?';
$lang['subscribers.no_users'] = 'Aucun inscrit';

//Unsubcribe
$lang['newsletter.delete_all_streams'] = 'Se d�sinscrire de tous les flux';
$lang['unsubscribe.newsletter'] = 'Se d�sinscrire des newsletters';
$lang['unsubscribe.newsletter_choice'] = 'Choisissez les newsletters auxquelles vous souhaitez rester abonn�';

//Archives
$lang['archives.stream_name'] = 'Nom du flux';
$lang['archives.name'] = 'Nom de la newsletter';
$lang['archives.date'] = 'Date de publication';
$lang['archives.nbr_subscribers'] = 'Nombre d\'inscrits';
$lang['archives.not_archives'] = 'Aucune archive n\'est disponible';

//Add newsletter
$lang['add.choice_streams'] = 'Choisissez le ou les flux o� vous souhaitez envoyer cette newsletter';
$lang['add.send_test'] = 'Envoyer un mail de test';
$lang['add.add_newsletter'] = 'Ajouter une newsletter';

//Types newsletters
$lang['newsletter.types.choice'] = 'Veuillez s�lectionner un type de message';
$lang['newsletter.types.null'] = '--';
$lang['newsletter.types.forall'] = 'Pour tous';
$lang['newsletter.types.text'] = 'Texte';
$lang['newsletter.types.text_explain'] = 'Vous ne pourrez proc�der � aucune mise en forme du message.';
$lang['newsletter.types.bbcode'] = 'BBCode';
$lang['newsletter.types.bbcode_explain'] = 'Vous pouvez formater le texte gr�ce au BBCode, le langage de mise en forme simplifi� adopt� sur tout le portail.';
$lang['newsletter.types.html'] = 'HTML';
$lang['newsletter.types.forexpert'] = 'Utilisateurs exp�riment�s seulement';
$lang['newsletter.types.html_explain'] = 'Vous pouvez mettre en forme le texte � votre guise, mais vous devez conna�tre le langage html.';
$lang['newsletter.types.next'] = 'Suivant';

//Other
$lang['newsletter.no_newsletters'] = 'Aucune newsletter disponible';
$lang['unsubscribe_newsletter'] = 'Se d�sabonner de cette newsletter';
$lang['newsletter.view_archives'] = 'Voir les archives';
$lang['newsletter.view_subscribers'] = 'Voir les inscrits';
$lang['newsletter.title'] = 'Titre de la newsletter';
$lang['newsletter.contents'] = 'Contenu';

//Messages
$lang['stream.message.success.add'] = 'Le flux <b>:name</b> a �t� ajout�';
$lang['stream.message.success.edit'] = 'Le flux <b>:name</b> a �t� modifi�';
$lang['stream.message.success.delete'] = 'Le flux <b>:name</b> a �t� supprim�';
$lang['stream.message.delete_confirmation'] = 'Voulez-vous vraiment supprimer le flux :name ?';

//Errors
$lang['error.sender-mail-not-configured'] = 'L\'adresse email d\'envoi de la newsletter n\'a pas �t� configur�e par l\'administrateur, veuillez r�essayer quand �a sera fait.';
$lang['error.sender-mail-not-configured-for-admin'] = 'L\'adresse email d\'envoi de la newsletter n\'a pas �t� configur�e. Veuillez la <a href="' . NewsletterUrlBuilder::configuration()->rel() . '">configurer</a> avant de pouvoir envoyer une newsletter.';
$lang['admin.stream-not-existed'] = 'Le flux demand� n\'existe pas';
$lang['error-subscriber-not-existed'] = 'L\'incrit n\'existe pas';
$lang['error-archive-not-existed'] = 'L\'archive n\'existe pas';
$lang['newsletter.success-send-test'] = 'Le mail de test a bien �t� envoy�';
$lang['newsletter.message.success.add'] = 'La newsletter a �t� envoy�e';
$lang['newsletter.message.success.delete'] = 'L\'archive a �t� supprim�e';

//Register extended field
$lang['extended_fields.newsletter.name'] = 'Newsletter(s) souscrite(s)';
$lang['extended_fields.newsletter.description'] = 'S�lectionnez la(les) newsletter(s) auxquelles vous souhaitez �tre inscrit';
?>