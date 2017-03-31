<?php
$db_connection_data = array (
  'dbms' => 1,
  'dsn' => 'mysql:host=cl1-sql20;port=3306dbname=mdm46231',
  'driver_options' => 
  array (
  ),
  'host' => 'cl1-sql20',
  'port' => '3306',
  'login' => 'mdm46231',
  'password' => 'trex550',
  'database' => 'mdm46231',
);

defined('PREFIX') or define('PREFIX' , 'phpboost_');
defined('PHPBOOST_INSTALLED') or define('PHPBOOST_INSTALLED', true);
require_once PATH_TO_ROOT . '/kernel/db/tables.php';
?>