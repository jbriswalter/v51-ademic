<?php




























class SQLFragment
{
private $query;
private $parameters;

public function __construct($query='',array $parameters=array())
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





public function add_parameters_to_map(array&$parameters)
{
foreach($this->parameters as $parameter_name=>$parameter_value)
{
$parameters[$parameter_name]=$parameter_value;
}
}
}
?>
