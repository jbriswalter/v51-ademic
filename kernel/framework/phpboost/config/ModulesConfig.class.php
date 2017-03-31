<?php































class ModulesConfig extends AbstractConfigData
{
private static $modules_property='modules';




public function get_default_values()
{
return array(
self::$modules_property=>array()
);
}





public function get_modules()
{
return $this->get_property(self::$modules_property);
}






public function get_module($module_id)
{
$modules=$this->get_property(self::$modules_property);
return isset($modules[$module_id])?$modules[$module_id]:null;
}





public function set_modules(array $modules)
{
$this->set_property(self::$modules_property,$modules);
}





public function add_module(Module $module)
{
$modules=$this->get_property(self::$modules_property);
$modules[$module->get_id()]=$module;
$this->set_property(self::$modules_property,$modules);
}

public function remove_module(Module $module)
{
$modules=$this->get_property(self::$modules_property);
unset($modules[$module->get_id()]);
$this->set_property(self::$modules_property,$modules);
}

public function remove_module_by_id($module_id)
{
$modules=$this->get_property(self::$modules_property);
unset($modules[$module_id]);
$this->set_property(self::$modules_property,$modules);
}

public function update(Module $module)
{
$modules=$this->get_property(self::$modules_property);
$modules[$module->get_id()]=$module;

$this->set_property(self::$modules_property,$modules);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','modules');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'modules');
}
}
?>
