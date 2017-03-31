<?php































class ModuleCssFiles implements CssFilesExtensionPoint
{



private $css_files_always_displayed=array();




private $css_files_running_module_displayed=array();






public function adding_always_displayed_file($css_file)
{
$this->css_files_always_displayed[]=$css_file;
}

public function get_css_files_always_displayed()
{
return $this->css_files_always_displayed;
}





public function adding_running_module_displayed_file($css_file)
{
$this->css_files_running_module_displayed[]=$css_file;
}

public function get_css_files_running_module_displayed()
{
return $this->css_files_running_module_displayed;
}
}
?>
