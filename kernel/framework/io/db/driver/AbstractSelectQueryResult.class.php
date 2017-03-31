<?php

































abstract class AbstractSelectQueryResult extends AbstractQueryResult implements SelectQueryResult
{
public function __construct($query,array $parameters)
{
parent::__construct($query,$parameters);
}

public function has_next()
{
return $this->valid();
}

public function fetch()
{
if($this->needs_rewind())
{
$this->rewind();
}
$current=$this->current();
$this->key();
$this->next();
return $current;
}




abstract protected function needs_rewind();
}
?>
