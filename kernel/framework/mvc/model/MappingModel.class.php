<?php


























class MappingModel
{
private $classname;
private $table_name;
private $primary_key;
private $fields;
private $joins;
private $properties_list=array();

public function __construct($classname,$table_name,MappingModelField $primary_key,$fields,
$joins=array())
{
$this->classname=$classname;
$this->table_name=$table_name;

$this->primary_key=$primary_key;
$this->fields=$fields;

$this->joins=$joins;
if(empty($this->fields))
{
throw new MappingModelException($this->classname,'fields list can not be empty');
}

$this->build_properties_list();
}





public function new_instance($properties_map=array())
{

$instance=new $this->classname();
$instance->populate($properties_map);
return $instance;
}





public function get_raw_value($instance)
{
return $instance->get_raw_value($this->properties_list);
}




public function get_class_name()
{
return $this->classname;
}




public function get_table_name()
{
return $this->table_name;
}




public function get_primary_key()
{
return $this->primary_key;
}




public function get_fields()
{
return $this->fields;
}




public function get_joins()
{
return $this->joins;
}

private function build_properties_list()
{
$this->properties_list[]=$this->primary_key->get_property_name();
foreach($this->fields as $field)
{
$this->properties_list[]=$field->get_property_name();
}
}
}
?>
