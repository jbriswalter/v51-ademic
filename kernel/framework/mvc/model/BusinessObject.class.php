<?php


























abstract class BusinessObject implements PropertiesMapInterface
{
public function populate($properties_map)
{
foreach($properties_map as $property=>$value)
{
$setter='set_'.$property;
$this->$setter($value);
}
}

public function get_raw_value($properties_list)
{
$properties_map=array();
foreach($properties_list as $property)
{
$getter='get_'.$property;
$properties_map[$property]=$this->$getter();
}
return $properties_map;
}
}
?>
