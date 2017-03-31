<?php


























class SelectQueryResultMapper implements SelectQueryResult
{



protected $query_result;




protected $model;






public function __construct(QueryResult $query_result,MappingModel $model)
{
$this->query_result=$query_result;
$this->model=$model;
}

public function get_query()
{
return $this->query_result->get_query();
}

public function get_parameters()
{
return $this->query_result->get_parameters();
}

public function set_fetch_mode($fetch_mode)
{
return $this->query_result->set_fetch_mode($fetch_mode);
}

public function get_rows_count()
{
return $this->query_result->get_rows_count();
}

public function __destruct()
{
$this->dispose();
}

public function has_next()
{
return $this->query_result->has_next();
}

public function fetch()
{
return $this->model->new_instance($this->query_result->fetch());
}

public function rewind()
{
return $this->query_result->rewind();
}

public function valid()
{
return $this->query_result->valid();
}

public function current()
{
return $this->model->new_instance($this->query_result->current());
}

public function key()
{
return $this->query_result->key();
}

public function next()
{
return $this->query_result->next();
}

public function dispose()
{
return $this->query_result->dispose();
}
}
?>
