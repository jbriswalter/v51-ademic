<?php































class Module
{
private $module_id;
private $activated;
private $installed_version;

public function __construct($module_id,$activated=false)
{
$this->module_id=$module_id;
$this->installed_version=$this->get_configuration()->get_version();
$this->activated=$activated;
}

public function get_id()
{
return $this->module_id;
}

public function is_activated()
{
return $this->activated;
}

public function get_installed_version()
{
return $this->installed_version;
}

public function set_activated($activated)
{
$this->activated=$activated;
}

public function set_installed_version($installed_version)
{
$this->installed_version=$installed_version;
}




public function get_configuration()
{
return ModuleConfigurationManager::get($this->module_id);
}
}
?>
