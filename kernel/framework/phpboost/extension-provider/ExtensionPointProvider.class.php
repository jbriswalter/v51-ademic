<?php



































abstract class ExtensionPointProvider
{



private $id;




private $extensions_points=array();






public function __construct($extension_provider_id='')
{
$this->id=$extension_provider_id;
$this->extensions_points=$this->get_provider_extensions_points($this);
}




public function get_id()
{
return $this->id;
}








public function get_extension_point($extension_point,$args=null)
{
if($this->has_extension_point($extension_point))
{
return $this->$extension_point($args);
}
throw new ExtensionPointNotFoundException($extension_point);
}






public function has_extension_point($extension_point)
{
return in_array($extension_point,$this->extensions_points);
}






public function has_extensions_points(array $extensions_points)
{
foreach($extensions_points as $extension_point)
{
if(!$this->has_extension_point($extension_point))
{
return false;
}
}
return true;
}

private function get_provider_extensions_points($provider)
{
$module_methods=get_class_methods($provider);
$generics_methods=get_class_methods('ExtensionPointProvider');
return array_values(array_diff($module_methods,$generics_methods));
}
}
?>
