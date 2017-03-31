<?php































class PDOInjectQueryResult extends AbstractQueryResult implements InjectQueryResult
{



private $statement=null;




private $affected_rows=0;




private $last_inserted_id=0;




private $is_disposed=false;

public function __construct($query,$parameters,PDOStatement $statement,PDO $pdo)
{

$this->last_inserted_id=$pdo->lastInsertId();
$this->statement=$statement;
parent::__construct($query,$parameters);
}

public function __destruct()
{
$this->dispose();
}

public function get_last_inserted_id()
{
return $this->last_inserted_id;
}

public function get_affected_rows()
{
return $this->statement->rowCount();
}

public function dispose()
{
if(!$this->is_disposed)
{
$this->statement->closeCursor();
$this->is_disposed=true;
}
}
}
?>
