<?php
/*##################################################
 *                           admin-contents-common.php
 *                            -------------------
 *   begin                : August 10, 2011
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
 
$lang = array();

$lang['content'] = 'Contenu';
$lang['content.config'] = 'Configuration du contenu';
$lang['content.config.language'] = 'Langage de formatage';
$lang['content.config.default-formatting-language'] = 'Langage de formatage du contenu par d�faut du site';
$lang['content.config.default-formatting-language-explain'] = 'Chaque utilisateur pourra choisir';
$lang['content.config.html-language'] = 'Langage HTML';
$lang['content.config.html-language-use-authorization'] = 'Niveau d\'autorisation pour ins�rer du langage HTML';
$lang['content.config.html-language-use-authorization-explain'] = 'Attention : le code HTML peut contenir du code Javascript qui peut constituer une source de faille de s�curit� si quelqu\'un y ins�re un code malveillant. Veillez donc � n\'autoriser seulement les personnes de confiance � ins�rer du HTML.';
$lang['content.config.post-management'] = 'Gestion des posts';
$lang['content.config.max-pm-number'] = 'Nombre maximum de messages priv�s';
$lang['content.config.max-pm-number-explain'] = 'Illimit� pour administrateurs et mod�rateurs';
$lang['content.config.anti-flood-enabled'] = 'Anti-flood';
$lang['content.config.anti-flood-enabled-explain'] = 'Emp�che les messages trop rapproch�s, sauf si les visiteurs sont autoris�s';
$lang['content.config.delay-flood'] = 'Interval minimum de temps entre les messages';
$lang['content.config.delay-flood-explain'] = 'En secondes. 7 secondes par d�faut.';

$lang['content.config.captcha'] = 'Captcha';
$lang['content.config.captcha-used'] = 'Code de v�rification utilis� sur le site';
$lang['content.config.captcha-used-explain'] = 'Le code de v�rification vous permet de vous pr�munir contre le spam sur votre site.';

$lang['comments'] = 'Commentaires';
$lang['comments.config'] = 'Configuration des commentaires';
$lang['comments.management'] = 'Gestion des commentaires';

$lang['comments.config.number-comments-display'] = 'Nombre de commentaires � afficher par d�faut';
$lang['comments.config.order-display-comments'] = 'Ordre d\'affichage des commentaires';
$lang['comments.config.order-display-comments.asc'] = 'Du plus ancien au plus r�cent';
$lang['comments.config.order-display-comments.desc'] = 'Du plus r�cent au plus ancien';

$lang['comments.config.authorization'] = 'Autorisations';
$lang['comments.config.authorization-read'] = 'Autorisation de voir les commentaires';
$lang['comments.config.authorization-post'] = 'Autorisation de poster un commentaire';
$lang['comments.config.authorization-moderation'] = 'Autorisation de g�rer les commentaires';
$lang['comments.config.authorization-note'] = 'Autorisation de noter les commentaires';
$lang['comments.config.max-links-comment'] = 'Nombre de liens autoris�s dans un commentaire';
$lang['comments.config.forbidden-tags'] = 'Types de formatage interdits';
$lang['comments.config.approbation'] = 'Approbation des commentaires';
$lang['comments.config.approbation.auto'] = 'Automatiquement';
$lang['comments.config.approbation.moderator'] = 'Mod�rateur';
$lang['comments.config.approbation.administrator'] = 'Administrateur';
?>