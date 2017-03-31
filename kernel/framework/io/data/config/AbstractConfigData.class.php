<?php
































abstract class AbstractConfigData implements ConfigData
{
private $properties_map=array();




public function __construct()
{
}





public final function synchronize()
{
}





public function set_default_values()
{
$default_values=$this->get_default_values();
foreach($default_values as $property=>$value)
{
$this->set_property($property,$value);
}
}




public function get_property($name)
{
if(array_key_exists($name,$this->properties_map))
{
return $this->properties_map[$name];
}
else
{
return $this->get_default_value($name);
}
}

private function get_default_value($property)
{
$default_values=$this->get_default_values();
if(array_key_exists($property,$default_values))
{
return $default_values[$property];
}
else
{
throw new PropertyNotFoundException($property);
}
}




public function set_property($name,$value)
{
$this->properties_map[$name]=$value;
}





abstract protected function get_default_values();
}
?>
