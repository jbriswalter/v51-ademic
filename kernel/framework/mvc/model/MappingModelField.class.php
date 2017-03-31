<?php


























class MappingModelField
{
const DEFAULT_PROPERTY_NAME=0x01;
const GETTER_PREFIX='get_';
const SETTER_PREFIX='set_';




private $db_field_name;




private $property_name;




private $getter;




private $setter;

public function __construct($property_name,$db_field_name=self::DEFAULT_PROPERTY_NAME)
{
$this->property_name=$property_name;
if($db_field_name!==self::DEFAULT_PROPERTY_NAME)
{
$this->db_field_name=$db_field_name;
}
else
{
$this->db_field_name=$this->property_name;
}

$this->getter=self::GETTER_PREFIX.$property_name;
$this->setter=self::SETTER_PREFIX.$property_name;
}




public function get_db_field_name()
{
return $this->db_field_name;
}




public function get_property_name()
{
return $this->property_name;
}




public function getter()
{
return $this->getter;
}




public function setter()
{
return $this->setter;
}
}
?>
