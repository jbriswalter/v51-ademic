<?php


























class ModuleMenus implements MenusExtensionPoint
{
private $menus=array();

public function __construct(Array $menus)
{
$this->menus=$menus;
}

public function get_menus()
{
return $this->menus;
}
}
?>
