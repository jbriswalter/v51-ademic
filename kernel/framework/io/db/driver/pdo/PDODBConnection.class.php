<?php































class PDODBConnection implements DBConnection
{



private $pdo;

public function __destruct()
{
$this->disconnect();
}

public function connect(array $db_connection_data)
{
try
{
$this->pdo=new PDO(
$db_connection_data['dsn'],
$db_connection_data['login'],
$db_connection_data['password'],
$db_connection_data['driver_options']);
}
catch(PDOException $exception)
{
throw new PDODBConnectionException($exception->getMessage(),$this->pdo);
}
}

public function get_link()
{
return $this->pdo;
}

public function disconnect()
{
$this->pdo=null;
}

public function start_transaction()
{
$this->pdo->beginTransaction();
}

public function commit()
{
$this->pdo->commit();
}

public function rollback()
{
$this->pdo->rollBack();
}
}
?>
