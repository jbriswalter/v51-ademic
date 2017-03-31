<?php
































class DBFactory
{
const MYSQL=0x01;
const PDO_MYSQL=0x11;
const PDO_SQLITE=0x12;
const PDO_POSTGRESQL=0x13;




private static $db_connection;




private static $factory;

private static $config_file;

public static function __static()
{
self::$config_file='/kernel/db/config.php';
}

public static function load_prefix()
{
@include_once(PATH_TO_ROOT.self::$config_file);
}

public static function init_factory($dbms)
{
require_once(PATH_TO_ROOT.'/kernel/db/tables.php');
switch($dbms)
{
case self::PDO_MYSQL:
self::$factory=new PDOMySQLDBFactory();
break;
case self::MYSQL:
default:
self::$factory=new MySQLDBFactory();
break;
}
}






public static function get_db_connection()
{
if(self::$db_connection===null)
{
$data=self::load_config();
self::init_factory($data['dbms']);
self::$db_connection=self::new_db_connection();
self::$db_connection->connect($data);
}
return self::$db_connection;
}

public static function close_db_connection()
{
if(self::$db_connection!=null)
{
self::$db_connection->disconnect();
}
}

public static function reset_db_connection()
{
self::$db_connection=null;
}

public static function set_db_connection(DBConnection $connection)
{
self::$db_connection=$connection;
}





public static function new_db_connection()
{
return self::get_factory()->new_db_connection();
}






public static function new_sql_querier(DBConnection $db_connection)
{
return self::get_factory()->new_sql_querier($db_connection);
}

public static function new_dbms_util(SQLQuerier $querier,$dbms_type=null)
{
return self::get_factory()->new_dbms_util($querier);
}

private static function load_config()
{
if(file_exists(PATH_TO_ROOT.self::$config_file))
{
include PATH_TO_ROOT.self::$config_file;
if(defined('PHPBOOST_INSTALLED'))
{
return $db_connection_data;
}
}
throw new PHPBoostNotInstalledException();
}




private static function get_factory()
{
return self::$factory;
}
}
?>
