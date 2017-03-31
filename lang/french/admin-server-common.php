<?php
/*##################################################
 *                           admin-server-common.php
 *                            -------------------
 *   begin                : July 8, 2015
 *   copyright            : (C) 2015 Julien BRISWALTER
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
#                     French                       #
 ####################################################
 
$lang['advises'] = 'Conseils';
$lang['advises.modules_management'] = '<a href="' . AdminModulesUrlBuilder::list_installed_modules()->rel() . '">D�sactivez ou d�sinstallez les modules</a> que vous n\'utilisez pas pour �conomiser les ressources du site.';
$lang['advises.check_modules_authorizations'] = 'V�rifiez les autorisations d\'acc�s de tous vos modules et menus avant de mettre le site en ligne pour �viter que les visiteurs ou des utilisateurs non autoris�s aient acc�s � des sections prot�g�es du site.';
$lang['advises.disable_debug_mode'] = '<a href="' . AdminConfigUrlBuilder::advanced_config()->rel() . '">D�sactivez le mode debug</a> pour ne pas afficher les erreurs aux utilisateurs (les erreurs sont quand m�me loggu�es dans les <a href="' . AdminErrorsUrlBuilder::logged_errors()->rel() . '">Erreurs archiv�es</a>).';
$lang['advises.enable_url_rewriting'] = '<a href="' . AdminConfigUrlBuilder::advanced_config()->rel() . '">Activez la r��criture des URL</a> pour que les URL de votre site soient plus lisibles (tr�s utile pour le r�f�rencement).';
$lang['advises.enable_output_gz'] = '<a href="' . AdminConfigUrlBuilder::advanced_config()->rel() . '">Activez la compression des pages</a> pour gagner en performance.';
$lang['advises.enable_apcu_cache'] = '<a href="' . AdminCacheUrlBuilder::configuration()->rel() . '">Activez le cache APCu</a> pour permettre de charger le cache en RAM sur le serveur et non sur le disque-dur et ainsi gagner d\'avantage en performance.';
$lang['advises.upgrade_php_version'] = 'Mettez � jour votre version PHP pour passer en 5.6 (qui est la derni�re version stable) si votre h�bergeur le permet.';
$lang['advises.save_database'] = 'Pensez � sauvegarder votre base de donn�es r�guli�rement.';
$lang['advises.optimize_database_tables'] = '<a href="' . AdminConfigUrlBuilder::advanced_config()->rel() . '">Activez l\'optimisation automatique des tables</a> ou optimisez de temps en temps vos tables dans le module <strong>Base de donn�es</strong> (s\'il est install�) ou dans votre outil de gestion de base de donn�e pour r�cup�rer de la place perdue en base.';
$lang['advises.password_security'] = 'Augmentez la complexit� et la longueur des mots de passe dans la <a href="' . AdminMembersUrlBuilder::configuration()->rel() . '">configuration des membres</a> pour renforcer la s�curit�.';
?>
