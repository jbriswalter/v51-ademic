<?php
/*##################################################
 *                                status-messages-common.php
 *                            -------------------
 *   begin                : April 12, 2012
 *   copyright            : (C) 2012 Kevin MASSY
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

$lang['success'] = 'Succ�s';
$lang['error'] = 'Erreur';

$lang['error.fatal'] = 'Fatale';
$lang['error.notice'] = 'Suggestion';
$lang['error.warning'] = 'Avertissement';
$lang['error.question'] = 'Question';
$lang['error.unknow'] = 'Inconnue';

//PHPBoost errors
$lang['error.auth'] = 'Vous n\'avez pas le niveau requis !';
$lang['error.auth.guest'] = 'Le contenu de cette page est prot�g�. Veuillez vous inscrire ou vous connecter sur le site pour y acc�der.';
$lang['error.page.forbidden'] = 'L\'acc�s � ce dossier est interdit !';
$lang['error.page.unexist'] = 'La page que vous demandez n\'existe pas !';
$lang['error.action.unauthorized'] = 'Action non autoris�e !';
$lang['error.module.uninstalled'] = 'Ce module n\'est pas install� !';
$lang['error.module.unactivated'] = 'Ce module n\'est pas activ� !';
$lang['error.invalid_archive_content'] = 'Le contenu de l\'archive est incorrect !';
$lang['error.404.message'] = 'Il semblerait qu\'une tornade soit pass�e par ici.<br />Il ne reste malheureusement plus rien � voir.';
$lang['error.403.message'] = 'Il semblerait qu\'une tornade soit pass�e par ici.<br />L\'acc�s est interdit au public.';

$lang['csrf_invalid_token'] = 'Jeton de session invalide. Veuillez essayer de recharger la page car l\'op�ration n\'a pas pu �tre effectu�e.';

//Element
$lang['element.already_exists'] = 'L\'�l�ment existe d�j�.';
$lang['element.unexist'] = 'L\'�l�ment que vous demandez n\'existe pas.';
$lang['element.not_visible'] = 'Cet �l�ment n\'est pas encore ou n\'est plus approuv�, il n\'est pas affich� pour les autres utilisateurs du site.';

$lang['misfit.php'] = 'Version PHP inadapt�e';
$lang['misfit.phpboost'] = 'Version de PHPBoost inadapt�e';

//Process
$lang['process.success'] = 'L\'op�ration s\'est d�roul�e avec succ�s';
$lang['process.error'] = 'Une erreur s\'est produite lors de l\'op�ration';

$lang['confirm.delete'] = 'Voulez-vous vraiment supprimer cet �l�ment ?';

$lang['message.success.config'] = 'La configuration a �t� modifi�e';
$lang['message.success.position.update'] = 'Les �l�ments ont �t� repositionn�s';

$lang['message.delete_install_and_update_folders'] = 'Par mesure de s�curit� nous vous conseillons fortement de supprimer les dossiers <b>install</b> et <b>update</b> et tout ce qu\'ils contiennent, des personnes mal intentionn�es pourraient relancer le script d\'installation et �craser certaines de vos donn�es !';
$lang['message.delete_install_or_update_folders'] = 'Par mesure de s�curit� nous vous conseillons fortement de supprimer le dossier <b>:folder</b> et tout ce qu\'il contient, des personnes mal intentionn�es pourraient relancer le script d\'installation et �craser certaines de vos donn�es !';

//Captcha
$lang['captcha.validation_error'] = 'Le champ de v�rification visuel n\'a pas �t� saisi correctement !';
$lang['captcha.is_default'] = 'Le captcha que vous souhaitez d�sinstaller ou d�sactiver est d�fini sur le site, veuillez d\'abord s�lectionner un autre captcha dans la configuration du contenu.';
$lang['captcha.last_installed'] = 'Dernier captcha, vous ne pouvez pas le supprimer ou le d�sactiver. Veuillez d\'abord en installer un autre.';

//Form
$lang['form.explain_required_fields'] = 'Les champs marqu�s * sont obligatoires !';
$lang['form.doesnt_match_regex'] = 'La valeur saisie n\'est pas au bon format';
$lang['form.doesnt_match_date_regex'] = 'La valeur saisie doit �tre une date valide';
$lang['form.doesnt_match_url_regex'] = 'La valeur saisie doit �tre une url valide';
$lang['form.doesnt_match_mail_regex'] = 'La valeur saisie doit �tre un mail valide';
$lang['form.doesnt_match_tel_regex'] = 'La valeur saisie doit �tre un num�ro de t�l�phone valide';
$lang['form.doesnt_match_number_regex'] = 'La valeur saisie doit �tre un nombre';
$lang['form.doesnt_match_picture_file_regex'] = 'La valeur saisie doit correspondre � une image';
$lang['form.doesnt_match_length_intervall'] = 'La valeur saisie ne respecte par la longueur d�finie (:lower_bound <= valeur <= :upper_bound)';
$lang['form.doesnt_match_length_min'] = 'La valeur saisie doit faire au moins :lower_bound caract�res';
$lang['form.doesnt_match_length_max'] = 'La valeur saisie doit faire au maximum :upper_bound caract�res';
$lang['form.doesnt_match_integer_intervall'] = 'La valeur saisie ne respecte pas l\'intervalle d�finie (:lower_bound <= valeur <= :upper_bound)';
$lang['form.doesnt_match_integer_min'] = 'La valeur saisie doit �tre sup�rieure ou �gale � :lower_bound';
$lang['form.doesnt_match_integer_max'] = 'La valeur saisie doit �tre inf�rieure ou �gale � :upper_bound';
$lang['form.doesnt_match_medium_password_regex'] = 'Le mot de passe doit comporter au moins une minuscule et une majuscule ou une minuscule et un chiffre';
$lang['form.doesnt_match_strong_password_regex'] = 'Le mot de passe doit comporter au moins une minuscule, une majuscule et un chiffre';
$lang['form.invalid_url'] = 'L\'url n\'est pas valide';
$lang['form.invalid_picture'] = 'Le fichier indiqu� n\'est pas une image';
$lang['form.unexisting_file'] = 'Le fichier n\'a pas �t� trouv�, son adresse doit �tre incorrecte';
$lang['form.has_to_be_filled'] = 'Le champ ":name" doit �tre renseign�';
$lang['form.validation_error'] = 'Veuillez corriger les erreurs du formulaire';
$lang['form.fields_must_be_equal'] = 'Les champs ":field1" et ":field2" doivent �tre �gaux';
$lang['form.fields_must_not_be_equal'] = 'Les champs ":field1" et ":field2" doivent avoir des valeurs diff�rentes';
$lang['form.first_field_must_be_inferior_to_second_field'] = 'Le champ ":field2" doit avoir une valeur inf�rieure au champ ":field1"';
$lang['form.first_field_must_be_superior_to_second_field'] = 'Le champ ":field2" doit avoir une valeur sup�rieure au champ ":field1"';

//User
$lang['user.not_authorized_during_maintain'] = 'Vous n\'avez pas l\'autorisation d\'acc�der au site pendant la maintenance';
$lang['user.not_exists'] = 'L\'utilisateur n\'existe pas !';
$lang['user.auth.passwd_flood'] = 'Il vous reste :remaining_tries essai(s) apr�s cela il vous faudra attendre 5 minutes pour obtenir 2 nouveaux essais (10min pour 5)!';
$lang['user.auth.passwd_flood_max'] = 'Vous avez �puis� tous vos essais de connexion, votre compte est verrouill� pendant 5 minutes.';

//Extended fields
$lang['extended_field.avatar_upload_invalid_format'] = 'Format du fichier invalide pour l\'avatar';
$lang['extended_field.avatar_upload_max_dimension'] = 'Dimensions maximales du fichier d�pass�es pour l\'avatar';
?>
