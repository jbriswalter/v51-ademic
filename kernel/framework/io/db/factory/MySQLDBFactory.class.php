<?php
































class MySQLDBFactory implements DBMSFactory
{
public function new_db_connection()
{
return new MySQLDBConnection();
}

public function new_sql_querier(DBConnection $db_connection)
{
return new MySQLQuerier($db_connection,$this->new_query_translator());
}

public function new_dbms_util(SQLQuerier $querier)
{
return new MySQLDBMSUtils($querier);
}

private function new_query_translator()
{
return new MySQLQueryTranslator();
}
}
?>
