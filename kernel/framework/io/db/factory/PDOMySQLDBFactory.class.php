<?php
































class PDOMySQLDBFactory implements DBMSFactory
{
public function new_db_connection()
{
return new PDODBConnection();
}

public function new_sql_querier(DBConnection $db_connection)
{
return new PDOQuerier($db_connection,$this->new_query_translator());
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
