<?php
































interface DBMSFactory
{




function new_db_connection();






function new_sql_querier(DBConnection $db_connection);






function new_dbms_util(SQLQuerier $querier);
}
?>
