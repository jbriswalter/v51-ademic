<?php

































interface DBConnection
{






function connect(array $db_connection_data);




function disconnect();





function get_link();






function start_transaction();




function commit();




function rollback();
}
?>
