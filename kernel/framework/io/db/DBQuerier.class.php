<?php































class DBQuerier implements SQLQuerier
{



private $querier;

public function __construct(SQLQuerier $querier)
{
$this->querier=$querier;
}




public function select($query,$parameters=array(),$fetch_mode=SelectQueryResult::FETCH_ASSOC)
{
return $this->querier->select($query,$parameters,$fetch_mode);
}




public function inject($query,$parameters=array())
{
return $this->querier->inject($query,$parameters);
}




public function enable_query_translator()
{
$this->querier->enable_query_translator();
}




public function disable_query_translator()
{
$this->querier->disable_query_translator();
}




public function get_executed_requests_count()
{
return $this->querier->get_executed_requests_count();
}





public function truncate($table_name)
{
$query='TRUNCATE '.$table_name.';';
$this->querier->inject($query);
}







public function insert($table_name,array $columns)
{
$columns_names=array_keys($columns);
$query='INSERT INTO '.$table_name.' ('.implode(', ',$columns_names).
') VALUES (:'.implode(', :',$columns_names).');';
return $this->querier->inject($query,$columns);
}











public function update($table_name,array $columns,$condition,array $parameters=array())
{
$columns_names=array_keys($columns);
$columns_definition=array();
foreach($columns_names as $column)
{
$columns_definition[]=$column.'=:'.$column;
}
$query='UPDATE '.$table_name.' SET '.implode(', ',$columns_definition).
' '.$condition.';';
return $this->querier->inject($query,array_merge($parameters,$columns));
}









public function delete($table_name,$condition,array $parameters=array())
{
$query='DELETE FROM '.$table_name.' '.$condition.';';
$this->querier->inject($query,$parameters);
}











public function select_single_row($table_name,array $columns,$condition,array $parameters=array())
{
$query_result=self::select_rows($table_name,$columns,$condition,$parameters);
$query_result->rewind();
if(!$query_result->valid())
{
throw new RowNotFoundException();
}
$result=$query_result->current();
$query_result->next();
if($query_result->valid())
{
throw new NotASingleRowFoundException($query_result);
}
$query_result->dispose();
return $result;
}







public function select_single_row_query($query,$parameters=array())
{
$query_result=self::select($query,$parameters,SelectQueryResult::FETCH_ASSOC);

$query_result->rewind();
if(!$query_result->valid())
{
throw new RowNotFoundException();
}
$result=$query_result->current();
$query_result->next();
if($query_result->valid())
{
throw new NotASingleRowFoundException($query_result);
}
$query_result->dispose();
return $result;
}









public function row_exists($table_name,$condition,array $parameters=array())
{
return $this->count($table_name,$condition,$parameters)>0;
}











public function get_column_value($table_name,$column,$condition,array $parameters=array())
{
$result=$this->select_single_row($table_name,array($column),$condition,$parameters);
return array_shift($result);
}











public function select_rows($table_name,array $columns,$condition='WHERE 1',
$parameters=array())
{
$query='SELECT '.implode(', ',$columns).' FROM '.$table_name.' '.$condition;
return $this->querier->select($query,$parameters);
}











public function count($table_name,$condition='WHERE 1',$parameters=array(),
$count_column='*')
{
$query='SELECT COUNT('.$count_column.') FROM '.$table_name;
if(!empty($condition))
{
$query.=' '.$condition;
}
$row=$this->querier->select($query,$parameters,SelectQueryResult::FETCH_NUM)->fetch();
return(int)$row[0];
}

public function get_querier()
{
return $this->querier;
}
}
?>
