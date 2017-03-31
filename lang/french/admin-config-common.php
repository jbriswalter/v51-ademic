<?php
/*##################################################
 *                           admin-config-common.php
 *                            -------------------
 *   begin                : April 12, 2010
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

$lang = array(
	'configuration' => 'Configuration',
	//Mail config
	'mail' => 'Envoi de mail',
	'mail-config' => 'Configuration de l\'envoi de mail',
	'mail-config.general_mail_config' => 'Configuration g�n�rale',
	'mail-config.default_mail_sender' => 'Adresse de l\'exp�diteur par d�faut',
	'mail-config.default_mail_sender_explain' => 'Adresse qui sera utilis�e quand l\'adresse de l\'exp�diteur n\'est pas sp�cifi�e.',
	'mail-config.administrators_mails' => 'Adresse des administrateurs',
	'mail-config.administrators_mails_explain' => 'Liste des adresses mail (s�par�es par des virgules) � qui seront envoy�s les mails destin�s aux administrateurs.',
	'mail-config.mail_signature' => 'Signature des mails',
	'mail-config.mail_signature_explain' => 'La signature sera ajout�e � la fin de chaque mail envoy� par PHPBoost',
	'mail-config.send_protocol' => 'Protocole d\'envoi',
	'mail-config.send_protocol_explain' => 'G�n�ralement, les h�bergeurs configurent correctement le serveur pour qu\'il soit directement capable d\'envoyer des mails.
			Cependant, certains utilisateurs souhaitent modifier la fa�on dont le serveur exp�die les mails. Dans ce cas, il faut utiliser une configuration SMTP sp�cifique 
			qui s\'active en cochant la case ci-dessous. Une fois le serveur SMTP configur�, il sera utilis� pour tous les envois de mail de PHPBoost.',
	'mail-config.use_custom_smtp_configuration' => 'Utiliser une configuration SMTP sp�cifique',
	'mail-config.custom_smtp_configuration' => 'Configuration SMTP personnalis�e',
	'mail-config.smtp_host' => 'H�te',
	'mail-config.smtp_port' => 'Port',
	'mail-config.smtp_login' => 'Login',
	'mail-config.smtp_password' => 'Mot de passe',
	'mail-config.smtp_secure_protocol' => 'Protocole s�curis�',
	'mail-config.smtp_secure_protocol_none' => 'Aucun',
	'mail-config.smtp_secure_protocol_tls' => 'TLS',
	'mail-config.smtp_secure_protocol_ssl' => 'SSL',
	
	//General config
	'general-config' => 'Configuration g�n�rale',
	'general-config.site_name' => 'Nom du site',
	'general-config.site_slogan' => 'Slogan du site',
	'general-config.site_description' => 'Description du site',
	'general-config.site_description-explain' => 'Description de votre site dans les moteurs de recherche',
	'general-config.default_language' => 'Langue (par d�faut) du site',
	'general-config.default_theme' => 'Th�me (par d�faut) du site',
	'general-config.theme_picture' => 'Aper�u du th�me',
	'general-config.theme_preview_click' => 'Cliquez pour pr�visualiser',
	'general-config.view_real_preview' => 'Voir en taille r�elle',
	'general-config.start_page' => 'Page de d�marrage du site',
	'general-config.other_start_page' => 'Autre adresse relative ou absolue',
	'general-config.visit_counter' => 'Compteur de visite',
	'general-config.page_bench' => 'Benchmark',
	'general-config.page_bench-explain' => 'Affiche le temps de rendu de la page et le nombre de requ�tes SQL',
	'general-config.display_theme_author' => 'Info sur le th�me',
	'general-config.display_theme_author-explain' => 'Affiche des informations sur le th�me dans le pied de page',
	
	//Advanced config
	'advanced-config' => 'Configuration avanc�e',
	'advanced-config.site_url' => 'URL du serveur',
	'advanced-config.site_url-explain' => 'Ex : http://www.phpboost.com',
	'advanced-config.site_path' => 'Chemin de PHPBoost',
	'advanced-config.site_path-explain' => 'Vide par d�faut : site � la racine du serveur',
	'advanced-config.site_timezone' => 'Choix du fuseau horaire',
	'advanced-config.site_timezone-explain' => 'Permet d\'ajuster l\'heure � votre localisation',
	
	'advanced-config.url-rewriting' => 'Activation de la r��criture des urls',
	'advanced-config.url-rewriting.explain' => 'L\'activation de la r��criture des urls permet d\'obtenir des urls bien plus simples et claires sur votre site. Ces adresses seront donc bien mieux compr�hensibles pour vos visiteurs, mais surtout pour les robots d\'indexation. Votre r�f�rencement sera grandement optimis� gr�ce � cette option.<br /><br />Cette option n\'est malheureusement pas disponible chez tous les h�bergeurs. Cette page va vous permettre de tester si votre serveur supporte la r��criture des urls. Si apr�s le test vous tombez sur des erreurs serveur, ou pages blanches, c\'est que votre serveur ne le supporte pas. Supprimez alors le fichier <strong>.htaccess</strong> � la racine de votre site via acc�s FTP � votre serveur, puis revenez sur cette page et d�sactivez la r��criture.',
	
	'advanced-config.config.not-available' => 'Non disponible sur votre serveur',
	'advanced-config.config.available' => 'Disponible sur votre serveur',
	'advanced-config.config.unknown' => 'Inconnu sur votre serveur',

	'advanced-config.htaccess-manual-content' => 'Contenu du fichier .htaccess',
	'advanced-config.htaccess-manual-content.explain' => 'Vous pouvez dans ce champ mettre les instructions que vous souhaitez int�grer au fichier .htaccess qui se trouve � la racine du site, par exemple pour forcer une configuration du serveur web Apache.',

	'advanced-config.robots-content' => 'Contenu du fichier robots.txt',
	'advanced-config.robots-content.explain' => 'Vous pouvez dans ce champ mettre les instructions que vous souhaitez int�grer au fichier robots.txt qui se trouve � la racine du site, par exemple pour emp�cher les robots d\'indexer certaines parties du site.',

	'advanced-config.sessions-config' => 'Connexion utilisateurs',
	'advanced-config.cookie-name' => 'Nom du cookie des sessions',
	'advanced-config.cookie-name.style-wrong' => 'Le nom du cookie doit obligatoirement �tre une suite de lettres et de chiffres',
	'advanced-config.cookie-duration' => 'Dur�e de la session',
	'advanced-config.cookie-duration.explain' => '3600 secondes conseill�',
	'advanced-config.active-session-duration' => 'Dur�e utilisateurs actifs',
	'advanced-config.active-session-duration.explain' => '300 secondes conseill�',
	'advanced-config.integer-required' => 'La valeur doit �tre un nombre',
	
	'advanced-config.miscellaneous' => 'Divers',
	'advanced-config.output-gziping-enabled' => 'Activation de la compression des pages, ceci acc�l�re la vitesse d\'affichage',
	'advanced-config.debug-mode' => 'Mode Debug',
	'advanced-config.debug-mode.explain' => 'Ce mode est particuli�rement utile pour les d�veloppeurs car les erreurs sont affich�es explicitement. Il est d�conseill� d\'utiliser ce mode sur un site en production.',
	'advanced-config.debug-mode.type' => 'S�lection du mode debug',
	'advanced-config.debug-mode.type.normal' => 'Normal',
	'advanced-config.debug-mode.type.strict' => 'Strict',
	'advanced-config.debug-display-database-query-enabled' => 'Activer l\'affichage et le suivi des requ�tes SQL',
);
?>