<?php


































class SQLQueryVars extends StringVars
{



private $querier;

public function __construct(AbstractSQLQuerier $querier)
{
$this->querier=$querier;
$strict=true;
parent::__construct($strict);
}

protected function set_var($parameter)
{
if($parameter===null)
{
return 'NULL';
}
elseif(is_array($parameter))
{
$nb_value=count($parameter);
for($i=0;$i<$nb_value;$i++)
{
$parameter[$i]='\''.$this->querier->escape($parameter[$i]).'\'';
}
return '('.implode(', ',$parameter).')';
}
elseif(is_string($parameter))
{
return '\''.$this->querier->escape($parameter).'\'';
}
else
{
return $parameter;
}
}
}
?>
