<?php


































class PersistenceContext
{



private static $sql_querier;



private static $db_querier;



private static $dbms_utils;





public static function get_querier()
{
if(self::$db_querier===null)
{
self::$db_querier=new DBQuerier(self::get_sql_querier());
}
return self::$db_querier;
}





public static function get_dbms_utils()
{
if(self::$dbms_utils===null)
{
self::$dbms_utils=DBFactory::new_dbms_util(self::get_querier());
}
return self::$dbms_utils;
}




public static function close_db_connection()
{
DBFactory::close_db_connection();
self::$sql_querier=null;
self::$db_querier=null;
self::$dbms_utils=null;
}





private static function get_sql_querier()
{
if(self::$sql_querier===null)
{
self::$sql_querier=DBFactory::new_sql_querier(DBFactory::get_db_connection());
}
return self::$sql_querier;
}
}
?>
