<?php































class MySQLSelectQueryResult extends AbstractSelectQueryResult
{



private $resource=null;




private $index=0;




private $current='';




private $fetch_mode;




private $is_disposed=false;

public function __construct($query,$parameters,$resource,$fetch_mode=self::FETCH_ASSOC)
{
$this->fetch_mode=$fetch_mode;
$this->resource=$resource;
parent::__construct($query,$parameters);
}

public function __destruct()
{
$this->dispose();
}

public function set_fetch_mode($fetch_mode)
{
$this->fetch_mode=$fetch_mode;
}

public function get_rows_count()
{
return mysqli_num_rows($this->resource);
}

public function rewind()
{
if($this->index>0)
{
@mysqli_data_seek($this->resource,0);
$this->index=0;
}
$this->next();
}

public function valid()
{
return $this->current!==null;
}

public function current()
{
return $this->current;
}

public function key()
{
return $this->index;
}

public function next()
{
switch($this->fetch_mode)
{
case SelectQueryResult::FETCH_NUM:
$this->current=mysqli_fetch_row($this->resource);
break;
case SelectQueryResult::FETCH_ASSOC:
default:
$this->current=mysqli_fetch_assoc($this->resource);
break;
}
$this->index++;
}

public function dispose()
{
if(!$this->is_disposed&&is_resource($this->resource))
{
if(!@mysqli_free_result($this->resource))
{
throw new MySQLQuerierException('can\'t close sql resource');
}
$this->is_disposed=true;
}
}

protected function needs_rewind()
{
return $this->index==0;
}
}
?>
