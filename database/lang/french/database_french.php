<?php
/*##################################################
 *                              database_frenchphp
 *                            -------------------
 *   begin                : Februar 02, 2009
 *   copyright            : (C) 2009 Viarre R�gis
 *   email                : crowkait@phpboost.com
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
#                                                          French                                                                        #
 ####################################################

//Administration
$LANG['database'] = 'Base de donn�es';
$LANG['creation_date'] = 'Date de cr�ation';
$LANG['database_management'] = 'Gestion base de donn�es';
$LANG['db_sql_queries'] = 'Requ�tes SQL';
$LANG['db_explain_actions'] = 'Ce panneau vous permet de g�rer votre base de donn�es. Vous pouvez y voir la liste des tables utilis�es par PHPBoost, leurs propri�t�s, ainsi que divers outils qui vous permettront de faire quelques op�rations basiques sur certaines tables. Vous pouvez aussi effectuer une sauvegarde de votre base de donn�es, ou de seulement quelques tables que vous s�lectionnerez ici.';
$LANG['db_explain_actions.question'] = 'L\'optimisation de la base de donn�es permet de r�organiser la structure de la table afin de faciliter les op�rations au serveur SQL. Cette op�ration est effectu�e automatiquement sur chaque table une fois par jour. Vous pouvez optimiser les tables manuellement via ce panneau d\'administration.
<br />
La r�paration n\'est normalement pas � envisager mais en cas de probl�me elle peut s\'av�rer utile. Le support vous dira de l\'effectuer quand cela sera n�cessaire.
<br />
<strong>Attention : </strong>C\'est une op�ration lourde, elle consomme beaucoup de ressources, il est donc conseill� d\'�viter de r�parer les tables si ce n\'est pas utile !';
$LANG['db_restore_from_server'] = 'Vous pouvez utiliser les fichiers que vous n\'aviez pas supprim� lors de restaurations ant�rieures.';
$LANG['db_view_file_list'] = 'Voir la liste des fichiers disponibles (<em>cache/backup</em>)';
$LANG['import_file_explain'] = 'Vous pouvez restaurer votre base de donn�es par un fichier que vous poss�dez sur votre ordinateur. Si votre fichier d�passe la taille maximale autoris�e par votre serveur, c\'est-�-dire %s, vous devez utiliser l\'autre m�thode en envoyant par FTP votre fichier dans le r�pertoire <em>cache/backup</em>.';
$LANG['db_restore'] = 'Restaurer';
$LANG['db_table_list'] = 'Liste des tables';
$LANG['db_table_name'] = 'Nom de la table';
$LANG['db_table_rows'] = 'Enregistrements';
$LANG['db_table_rows_format'] = 'Format';
$LANG['db_table_engine'] = 'Type';
$LANG['db_table_structure'] = 'Structure';
$LANG['db_table_collation'] = 'Interclassement';
$LANG['db_table_data'] = 'Taille';
$LANG['db_table_index'] = 'Index';
$LANG['db_table_field'] = 'Champ';
$LANG['db_table_attribute'] = 'Attribut';
$LANG['db_table_null'] = 'Null';
$LANG['db_table_value'] = 'Valeur';
$LANG['db_table_extra'] = 'Extra';
$LANG['db_autoincrement'] = 'Suivant autoindex';
$LANG['db_table_free'] = 'Perte';
$LANG['db_selected_tables'] = 'S�lectionner';
$LANG['db_select_all'] = 'S�lectionner toutes les tables';
$LANG['db_for_selected_tables'] = 'Actions � r�aliser sur la s�lection de tables';
$LANG['db_optimize'] = 'Optimiser';
$LANG['db_repair'] = 'R�parer';
$LANG['db_insert'] = 'Ins�rer';
$LANG['db_backup'] = 'Sauvegarder';
$LANG['db_download'] = 'T�l�charger';
$LANG['db_succes_repair_tables'] = 'La s�lection de tables (<em>%s</em>) a �t� r�par�e avec succ�s';
$LANG['db_succes_optimize_tables'] = 'La s�lection de tables (<em>%s</em>) a �t� optimis�e avec succ�s';
$LANG['db_backup_database'] = 'Sauvegarder la base de donn�es';
$LANG['db_backup_explain'] = 'Vous pouvez encore modifier la liste des tables que vous souhaitez s�lectionner dans le formulaire.
<br />
Ensuite vous devez choisir ce que vous souhaitez sauvegarder.';
$LANG['db_backup_all'] = 'Donn�es et structure';
$LANG['db_backup_struct'] = 'Structure seulement';
$LANG['db_backup_data'] = 'Donn�es seulement';
$LANG['db_backup_success'] = 'Votre base de donn�es a �t� correctement sauvegard�e. Vous pouvez la t�l�charger en cliquant sur le lien suivant : <a href="admin_database.php?read_file=%s">%s</a>';
$LANG['db_execute_query'] = 'Ex�cuter une requ�te dans la base de donn�es';
$LANG['db_tools'] = 'Outils de gestion de la base de donn�es';
$LANG['db_query_explain'] = 'Vous pouvez dans ce panneau d\'administration ex�cuter des requ�tes dans la base de donn�es. Cette interface ne devrait servir que lorsque le support vous demande d\'ex�cuter une requ�te dans la base de donn�es qui vous sera communiqu�e.<br />
<strong>Attention :</strong> si cette requ�te n\'a pas �t� propos�e par le support vous �tes responsable de son ex�cution et des pertes de donn�es qu\'elle pourrait provoquer. Il est donc fortement d�conseill� d\'utiliser ce module si vous ne ma�trisez pas compl�tement la structure des tables de PHPBoost.';
$LANG['db_submit_query'] = 'Ex�cuter';
$LANG['db_query_result'] = 'R�sultat';
$LANG['db_executed_query'] = 'Requ�te SQL';
$LANG['db_confirm_query'] = 'Voulez-vous vraiment ex�cuter la requ�te suivante : ';
$LANG['db_file_list'] = 'Liste des fichiers';
$LANG['db_confirm_restore'] = 'Etes-vous s�r de vouloir restaurer votre base de donn�es � partir de la sauvegarde s�lectionn�e ?';
$LANG['db_restore_file'] = 'Cliquez sur le fichier que vous voulez restaurer.';
$LANG['db_restore_success'] = 'La restauration de la base de donn�es a �t� effectu�e avec succ�s';
$LANG['db_restore_failure'] = 'Une erreur est survenue pendant la restauration de la base de donn�es';
$LANG['db_upload_failure'] = 'Une erreur est survenue lors du transfert du fichier � partir duquel vous souhaitez importer votre base de donn�es';
$LANG['db_file_already_exists'] = 'Un fichier du r�pertoire cache/backup porte le m�me nom que celui que vous souhaitez importer. Merci de renommer un des deux fichiers pour pouvoir l\'importer.';
$LANG['db_unlink_success'] = 'Le fichier a �t� supprim� avec succ�s !';
$LANG['db_unlink_failure'] = 'Le fichier n\'a pas pu �tre supprim�';
$LANG['db_confirm_delete_file'] = 'Etes-vous s�r de vouloir supprimer ce fichier ?';
$LANG['db_confirm_delete_table'] = 'Etes-vous s�r de vouloir supprimer cette table ?';
$LANG['db_confirm_truncate_table'] = 'Etes-vous s�r de vouloir vider cette table ?';
$LANG['db_confirm_delete_entry'] = 'Etes-vous s�r de vouloir supprimer cette entr�e ?';
$LANG['db_file_does_not_exist'] = 'Le fichier que vous souhaitez supprimer n\'existe pas ou n\'est pas un fichier SQL';
$LANG['db_empty_dir'] = 'Le dossier est vide';
$LANG['db_file_name'] = 'Nom du fichier';
$LANG['db_file_weight'] = 'Taille du fichier';

?>