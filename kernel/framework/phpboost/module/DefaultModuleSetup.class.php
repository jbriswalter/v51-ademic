<?php




























class DefaultModuleSetup implements ModuleSetup
{



public function check_environment()
{
return new ValidationResult();
}




public function install()
{

}




public function uninstall()
{

}




public function upgrade($installed_version)
{
return null;
}
}
?>
