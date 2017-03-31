<?php
/*##################################################
 *                           user-common.php
 *                            -------------------
 *   begin                : October 07, 2011
 *   copyright            : (C) 2011 Kevin MASSY
 *   email                : kevin.massy@phpboost.com
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

$lang['user'] = 'Utilisateur';
$lang['users'] = 'Utilisateurs';
$lang['profile'] = 'Profil';
$lang['profile_of'] = 'Profil de :name';
$lang['profile.edit'] = 'Edition du profil';
$lang['messages'] = 'Messages de l\'utilisateur';
$lang['maintain'] = 'Maintenance';
$lang['welcome'] = 'Bienvenue';

$lang['members-list'] = 'Liste des membres';
$lang['member-management'] = 'Gestion du membre';
$lang['punishment-management'] = 'Gestion des sanctions';

$lang['profile.edit.password.error'] = 'Le mot de passe que vous avez entr� n\'est pas correct';
$lang['external-auth.account-exists'] = 'Pour associer votre compte avec la connexion externe vous devez vous connecter sur le site et vous rendre dans l\'�dition de votre profil';
$lang['external-auth.email-not-found'] = 'L\'adresse email de votre compte n\'a pas pu �tre r�cup�r�e, votre compte ne peut pas �tre associ�.';

//Contribution
$lang['contribution'] = 'Contribution';
$lang['contribution.explain'] = 'Votre contribution suivra le parcours classique et sera trait�e dans le panneau de contribution. Vous pouvez, dans le champ suivant, justifier votre contribution de fa�on � expliquer votre d�marche � un approbateur.';
$lang['contribution.description'] = 'Compl�ment de contribution';
$lang['contribution.description.explain'] = 'Expliquez les raisons de votre contribution. Ce champ est facultatif mais il peut aider un approbateur � prendre sa d�cision.';
$lang['contribution.confirmed'] = 'Votre contribution a bien �t� enregistr�e.';
$lang['contribution.confirmed.messages'] = '<p>Vous pourrez la suivre dans le <a href="' . UserUrlBuilder::contribution_panel()->rel() . '">panneau de contribution</a> 
et �ventuellement discuter avec les validateurs si leur choix n\'est pas franc.</p><p>Merci d\'avoir particip� � la vie du site !</p>';


//User fields
$lang['display_name'] = 'Nom d\'affichage';
$lang['display_name.explain'] = 'Nom affich� sur chacun des �l�ments que vous ajoutez.';
$lang['login'] = 'Identifiant de connexion';
$lang['login.explain'] = 'Adresse email ou votre login personnalis� si vous en avez choisi un.';
$lang['login.custom'] = 'Choisir un identifiant de connexion';
$lang['login.custom.explain'] = '<span class="color-alert">Par d�faut, vous devez vous connecter avec votre adresse email.</span>';
$lang['password'] = 'Mot de passe';
$lang['password.new'] = 'Nouveau mot de passe';
$lang['password.old'] = 'Ancien mot de passe';
$lang['password.old.explain'] = 'Remplir seulement en cas de modification';
$lang['password.confirm'] = 'Confirmer le mot de passe';
$lang['password.explain'] = 'Longueur minimale du mot de passe : :number caract�res';
$lang['email'] = 'Email';
$lang['email.hide'] = 'Cacher l\'email';
$lang['theme'] = 'Th�me';
$lang['theme.preview'] = 'Pr�visualiser le th�me';
$lang['text-editor'] = 'Editeur de texte';
$lang['lang'] = 'Langue';
$lang['timezone.'] = 'Fuseau horaire';
$lang['timezone.choice'] = 'Choix du fuseau horaire';
$lang['timezone.choice.explain'] = 'Permet d\'ajuster l\'heure � votre localisation';
$lang['level'] = 'Rang';
$lang['approbation'] = 'Approbation';

$lang['registration_date'] = 'Date d\'inscription';
$lang['last_connection'] = 'Derni�re connexion';
$lang['number-messages'] = 'Nombre de messages';
$lang['private_message'] = 'Message priv�';
$lang['delete-account'] = 'Supprimer le compte';
$lang['avatar'] = 'Avatar';

//Groups
$lang['groups'] = 'Groupes';
$lang['groups.select'] = 'S�lectionner un groupe';
$lang['no_member'] = 'Aucun membre dans ce groupe';

//Other
$lang['caution'] = 'Avertissement';
$lang['readonly'] = 'Lecture seule';
$lang['banned'] = 'Banni';
$lang['connection'] = 'Connexion';
$lang['autoconnect'] = 'Connexion auto';
$lang['disconnect'] = 'Se d�connecter';
$lang['facebook-connect'] = 'Se connecter avec Facebook';
$lang['google-connect'] = 'Se connecter avec Google+';
$lang['twitter-connect'] = 'Se connecter avec Twitter';

$lang['internal_connection'] = 'Connexion interne';
$lang['create_internal_connection'] = 'Cr�er un compte interne';
$lang['edit_internal_connection'] = 'Editer votre compte interne';
$lang['fb_connection'] = 'Connexion par Facebook';
$lang['google_connection'] = 'Connexion par Google';
$lang['associate_account'] = 'Associer votre compte';
$lang['dissociate_account'] = 'Dissocier votre compte';

// Ranks
$lang['rank'] = 'Rang';
$lang['visitor'] = 'Visiteur';
$lang['member'] = 'Membre';
$lang['moderator'] = 'Mod�rateur';
$lang['administrator'] = 'Administrateur';

//Forget password
$lang['forget-password'] = 'Mot de passe oubli�';
$lang['forget-password.select'] = 'S�lectionnez le champ que vous voulez renseigner (email ou pseudo)';
$lang['forget-password.success'] = 'Un email vous a �t� envoy� avec un lien pour changer votre mot de passe';
$lang['forget-password.error'] = 'Les informations fournies ne sont pas correctes, veuillez les rectifier et r�essayer';
$lang['change-password'] = 'Changement de mot de passe';
$lang['forget-password.mail.content'] = 'Cher(e) :pseudo,

Vous recevez cet e-mail parce que vous (ou quelqu\'un qui pr�tend l\'�tre) avez demand� � ce qu\'un nouveau mot de passe vous soit envoy� pour votre compte sur :host. 
Si vous n\'avez pas demand� de changement de mot de passe, veuillez l\'ignorer. Si vous continuez � le recevoir, veuillez contacter l\'administrateur du site.

Pour changer de mot de passe, cliquez sur le lien fourni ci-dessous et suivez les indications sur le site.

:change_password_link

Si vous rencontrez des difficult�s, veuillez contacter l\'administrateur du site.

:signature';

//Registration 
$lang['register'] = 'S\'inscrire';
$lang['registration'] = 'Inscription';

$lang['registration.validation.mail.explain'] = 'Vous devrez activer votre compte dans l\'email qui vous sera envoy� avant de pouvoir vous connecter';
$lang['registration.validation.administrator.explain'] = 'Un administrateur devra activer votre compte avant de pouvoir vous connecter';

$lang['registration.confirm.success'] = 'Votre compte a �t� valid� avec succ�s';
$lang['registration.confirm.error'] = 'Un probl�me est survenue lors de votre activation, v�rifier que votre cl� est bien valide';

$lang['registration.success.administrator-validation'] = 'Vous vous �tes enregistr� avec succ�s. Cependant un administrateur doit valider votre compte avant de pouvoir l\'utiliser';
$lang['registration.success.mail-validation'] = 'Vous vous �tes enregistr� avec succ�s. Cependant il vous faudra cliquer sur le lien d\'activation contenu dans le mail qui vous a �t� envoy�';

$lang['registration.email.automatic-validation'] = 'Vous pouvez d�sormais vous connecter � votre compte directement sur le site.';
$lang['registration.email.mail-validation'] = 'Vous devez activer votre compte avant de pouvoir vous connecter en cliquant sur ce lien : :validation_link';
$lang['registration.email.administrator-validation'] = 'Attention : Votre compte devra �tre activ� par un administrateur avant de pouvoir vous connecter. Merci de votre patience.';
$lang['registration.email.mail-administrator-validation'] = 'Cher(e) :pseudo,

Nous avons le plaisir de vous informer que votre compte sur :site_name vient d\'�tre valid� par un administrateur.

Vous pouvez d�s � pr�sent vous connecter au site � l\'aide des identifiants fournis dans le pr�c�dent email.

:signature';

$lang['registration.pending-approval'] = 'Un nouveau membre s\'est inscrit. Son compte doit �tre approuv� avant de pouvoir �tre utilis�.';
$lang['registration.not-approved'] = 'Votre compte doit �tre approuv� par un administrateur avant de pouvoir �tre utilis�.';
$lang['registration.subject-mail'] = 'Confirmation d\'inscription sur :site_name';
$lang['registration.content-mail'] = 'Cher(e) :pseudo,

Tout d\'abord, merci de vous �tre inscrit sur :site_name. Vous faites partie d�s maintenant des membres du site.
En vous inscrivant sur :site_name, vous obtenez un acc�s � la zone membre qui vous offre plusieurs avantages. Vous pourrez, entre autre, �tre reconnu automatiquement sur tout le site, pour poster des messages, modifier la langue et/ou le th�me par d�faut, �diter votre profil, acc�der � des cat�gories r�serv�es aux membres... Bref vous acc�dez � toute la communaut� du site.

Pour vous connecter, il vous faudra retenir votre identifiant et votre mot de passe.

Nous vous rappelons vos identifiants.

Identifiant : :login
Mot de passe : :password

:accounts_validation_explain

A bient�t sur :host

:signature';

$lang['agreement'] = 'R�glement';
$lang['agreement.agree'] = 'J\'accepte les conditions';
$lang['agreement.agree.required'] = 'Vous devez accepter le r�glement pour vous inscrire';

//Messages
$lang['user.message.success.add'] = 'L\'utilisateur <b>:name</b> a �t� ajout�';
$lang['user.message.success.edit'] = 'Le profil a �t� modifi�';
$lang['user.message.success.delete'] = 'L\'utilisateur <b>:name</b> a �t� supprim�';

############## Extended Field ##############

$lang['extended-field.field.sex'] = 'Sexe';
$lang['extended-field.field.sex-explain'] = '';

$lang['extended-field.field.pmtomail'] = 'Recevoir une notification par mail � la r�ception d\'un message priv�';
$lang['extended-field.field.pmtomail-explain'] = '';

$lang['extended-field.field.date-birth'] = 'Date de naissance';
$lang['extended-field.field.date-birth-explain'] = '';

$lang['extended-field.field.avatar'] = 'Avatar';
$lang['extended-field.field.avatar-explain'] = '';
$lang['extended-field.field.avatar.current_avatar'] = 'Avatar actuel';
$lang['extended-field.field.avatar.upload_avatar'] = 'Uploader un avatar';
$lang['extended-field.field.avatar.upload_avatar-explain'] = 'Avatar directement h�berg� sur le serveur';
$lang['extended-field.field.avatar.link'] = 'Lien avatar';
$lang['extended-field.field.avatar.link-explain'] = 'Adresse directe de l\'avatar';
$lang['extended-field.field.avatar.delete'] = 'Supprimer l\'avatar courant';
$lang['extended-field.field.avatar.no_avatar'] = 'Aucun avatar';

$lang['extended-field.field.location'] = 'Localisation';
$lang['extended-field.field.location-explain'] = '';

$lang['extended-field.field.job'] = 'Emploi';
$lang['extended-field.field.job-explain'] = '';

$lang['extended-field.field.entertainement'] = 'Loisirs';
$lang['extended-field.field.entertainement-explain'] = '';

$lang['extended-field.field.biography'] = 'Biographie';
$lang['extended-field.field.biography-explain'] = '';
?>
