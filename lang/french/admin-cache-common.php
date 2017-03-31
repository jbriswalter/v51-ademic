<?php
/*##################################################
 *                           admin-cache-common.php
 *                            -------------------
 *   begin                : August 7, 2010
 *   copyright            : (C) 2010 Benoit Sautel
 *   email                : ben.popeye@phpboost.com
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
$lang['cache'] = 'Cache';
$lang['clear_cache'] = 'Vider';
$lang['explain_data_cache'] = '<p>PHPBoost met en cache un certain nombre d\'informations, ce qui permet d\'am�liorer consid�rablement ses performances.
Toutes les donn�es manipul�es par PHPBoost sont stock�es en base de donn�es mais chaque acc�s � la base de donn�es co�te cher en temps. Les donn�es qui sont acc�d�es de fa�on r�guli�re (notamment la configuration) sont ainsi conserv�es par le serveur
de fa�on � ne pas avoir � les demander � la base de donn�es.</p>
<p>En contre partie, cela signifie que certaines donn�es sont pr�sentes � deux endroits : dans la base de donn�es et sur le serveur web. Si vous modifiez des donn�es dans la base de donn�es, la modification ne se fera peut-�tre pas imm�diatement car le fichier de cache contient encore les anciennes donn�es.
Dans ce cas, il faut vider le cache � la main via cette page de configuration de fa�on � ce que PHPBoost soit oblig� de g�n�rer de nouveaux fichiers de cache contenant les donn�es � jour.
L\'emplacement de r�f�rence des donn�es est la base de donn�es. Si vous modifiez un fichier cache, d�s qu\'il sera invalid� car la base de donn�es aura chang�, les modifications seront perdues.</p>';
$lang['syndication_cache'] = 'Cache syndication';
$lang['explain_syndication_cache'] = '<p>PHPBoost met en cache l\'ensemble des flux de donn�es (RSS ou ATOM) qui lui sont demand�s. En pratique, la premi�re fois qu\'on lui demande un flux, il va le chercher en base de donn�es, l\'enregistre sur le serveur web et n\'acc�de plus � la base de donn�es les fois suivantes pour
�viter des requ�tes dans la base de donn�es qui ralentissent consid�rablement l\'affichage des pages.</p>
<p>Via cette page de l\'administration de PHPBoost, vous pouvez vider le cache de fa�on � forcer PHPBoost � rechercher les donn�es dans la base de donn�es. C\'est particuli�rement utile si vous avez modifi� certaines choses manuellement dans la base de donn�es. En effet, elles ne seront pas prises en compte car le cache aura toujours les valeurs pr�c�dentes.</p>';
$lang['cache_configuration'] = 'Configuration du cache';
$lang['php_cache'] = 'Acc�l�rateur PHP';
$lang['explain_php_cache'] = '<p>Il existe des modules compl�mentaires � PHP permettant d\'am�liorer nettement la vitesse d\'ex�cution des applications PHP.
A l\'heure actuelle, PHPBoost supporte <acronym title="Alternative PHP Cache">APCu</acronym> qui est un syst�me de cache additionnel pour am�liorer le temps de chargement des pages.</p>
<p>Par d�faut le cache est enregistr� dans le syst�me de fichier (arborescence de fichiers du serveur) dans le dossier /cache. Un syst�me tel que APCu permet de stocker ces donn�es directement en m�moire centrale (RAM) qui propose des temps d\'acc�s incomparablement plus faibles.</p>';
$lang['enable_apc'] = 'Activer le cache d\'APCu';
$lang['apc_available'] = 'Disponibilit� de l\'extension APCu';
$lang['apcu_cache'] = 'Cache APCu';
$lang['explain_apc_available'] = 'L\'extension est disponible sur un nombre assez restreint de serveurs. Si elle n\'est pas disponible, vous ne pouvez malheureusement pas profiter des gains de performances qu\'elle permet d\'obtenir.';
$lang['css_cache'] = 'Cache CSS';
$lang['explain_css_cache'] = '<p>PHPBoost met en cache l\'ensemble des fichiers CSS fournis par les th�mes et modules. 
En temps normal, � l\'affichage du site, un ensemble de fichiers css va �tre charg�. Le syst�me de cache CSS quant � lui, va d\'abord optimiser les fichiers pour ensuite cr�er un seul et m�me fichier CSS condens�.</p>
<p>Via cette page de l\'administration de PHPBoost, vous pouvez vider le cache CSS de fa�on � forcer PHPBoost � recr�er les fichiers CSS optimis�s. </p>';
$lang['explain_css_cache_config'] = '<p>PHPBoost met en cache l\'ensemble des fichiers CSS fournis par les th�mes et modules pour am�liorer le temps d\'affichage des pages. 
Vous pouvez � travers cette configuration, choisir d\'activer ou non cette fonctionnalit� et son niveau d\'intensit�. <br/>
La d�sactivation de cette option peut vous permettre de personnaliser plus facilement vos th�mes. </p>';
$lang['enable_css_cache'] = 'Activer le cache CSS';
$lang['level_css_cache'] = 'Niveau d\'optimisation';
$lang['low_level_css_cache'] = 'Bas';
$lang['high_level_css_cache'] = 'Haut';
$lang['explain_level_css_cache'] = 'Le niveau bas permet de ne supprimer que les tabulations et les espaces tandis que le niveau haut optimise totalement vos fichiers CSS.';
?>