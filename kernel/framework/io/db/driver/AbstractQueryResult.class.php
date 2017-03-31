<?php

































abstract class AbstractQueryResult implements QueryResult
{
private $query;
private $parameters;

public function __construct($query,array $parameters)
{
$this->query=$query;
$this->parameters=$parameters;
}

public function get_query()
{
return $this->query;
}

public function get_parameters()
{
return $this->parameters;
}
}
?>
