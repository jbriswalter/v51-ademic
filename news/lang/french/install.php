<?php
/*##################################################
 *                             install.php
 *                            -------------------
 *   begin                : April 09, 2012
 *   copyright            : (C) 2012 Kevin MASSY
 *   email                : kevin.massy@phpboost.com
 *
 *
 ###################################################
 *
 *   This program is free software, you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY, without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program, if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/


 ####################################################
 #						French						#
 ####################################################

$lang['cat.name'] = 'Test';
$lang['cat.description'] = 'Cat�gorie de test';
$lang['news.title'] = 'Votre site sous PHPBoost ' . GeneralConfig::load()->get_phpboost_major_version();
$lang['news.content'] = 'Votre site boost� par PHPBoost ' . GeneralConfig::load()->get_phpboost_major_version() . ' est bien install�. Afin de vous aider � le prendre en main, 
l\'accueil de chaque module contient un message pour vous guider dans vos premiers pas. Voici �galement quelques recommandations suppl�mentaires que nous vous proposons de lire avec attention : <br />
<br />
<h2 class="formatter-title">N\'oubliez pas de supprimer le r�pertoire "install"</h2><br />
<br />
Supprimez le r�pertoire /install � la racine de votre site pour des raisons de s�curit� afin que personne ne puisse recommencer l\'installation.<br />
<br />
<h2 class="formatter-title">Administrez votre site</h2><br />
<br />
Acc�dez au <a href="' . UserUrlBuilder::administration()->rel() . '">panneau d\'administration de votre site</a> afin de le param�trer comme vous le souhaitez!  Pour cela : <br />
<br />
<ul class="formatter-ul">
<li class="formatter-li"><a href="' . AdminMaintainUrlBuilder::maintain()->rel() . '">Mettez votre site en maintenance</a> en attendant que vous le configuriez � votre guise.
</li><li class="formatter-li">Rendez vous � la <a href="' . AdminConfigUrlBuilder::general_config()->rel() . '">Configuration g�n�rale du site</a>.
</li><li class="formatter-li"><a href="' . AdminModulesUrlBuilder::list_installed_modules()->rel() . '">Configurez les modules</a> disponibles et donnez leur les droits d\'acc�s (si vous n\'avez pas install� le pack complet, tous les modules sont disponibles sur le site de <a href="http://www.phpboost.com/download/">phpboost.com</a> dans la section t�l�chargement).
</li><li class="formatter-li"><a href="' . AdminContentUrlBuilder::content_configuration()->rel() . '">Choisissez le langage de formatage du contenu</a> par d�faut du site.
</li><li class="formatter-li"><a href="' . AdminMembersUrlBuilder::configuration()->rel() . '">Configurez l\'inscription des membres</a>.
</li><li class="formatter-li"><a href="' . AdminThemeUrlBuilder::list_installed_theme()->rel() . '">Choisissez le th�me par d�faut de votre site</a> pour changer l\'apparence de votre site (vous pouvez en obtenir d\'autres sur le site de <a href="http://www.phpboost.com/download/">phpboost.com</a>).
</li><li class="formatter-li">Avant de donner l\'acc�s de votre site � vos visiteurs, prenez un peu de temps pour y mettre du contenu.
</li><li class="formatter-li">Enfin <a href="' . AdminMaintainUrlBuilder::maintain()->rel() . '">d�sactivez la maintenance</a> de votre site afin qu\'il soit visible par vos visiteurs.<br />
</li></ul><br />
<br />
<h2 class="formatter-title">Que faire si vous rencontrez un probl�me ?</h2><br />
<br />
N\'h�sitez pas � consulter <a href="http://www.phpboost.com/wiki/">la documentation de PHPBoost</a> ou � poser vos question sur le <a href="http://www.phpboost.com/forum/">forum d\'entraide</a>.<br /> <br />
<br />
<p class="float-right">Toute l\'�quipe de PHPBoost vous remercie d\'utiliser son logiciel pour cr�er votre site web !</p>';
?>
