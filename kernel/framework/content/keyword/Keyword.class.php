<?php


























class Keyword
{
private $id;
private $name;
private $rewrited_name;

public function set_id($id)
{
$this->id=$id;
}

public function get_id()
{
return $this->id;
}

public function set_name($name)
{
$this->name=$name;
}

public function get_name()
{
return $this->name;
}

public function set_rewrited_name($rewrited_name)
{
$this->rewrited_name=$rewrited_name;
}

public function get_rewrited_name()
{
return $this->rewrited_name;
}

public function get_properties()
{
return array(
'id'=>$this->get_id(),
'name'=>$this->get_name(),
'rewrited_name'=>$this->get_rewrited_name(),
);
}

public function set_properties(array $properties)
{
$this->set_id($properties['id']);
$this->set_name($properties['name']);
$this->set_rewrited_name($properties['rewrited_name']);
}
}
?>
