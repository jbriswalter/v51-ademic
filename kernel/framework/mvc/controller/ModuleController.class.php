<?php






























abstract class ModuleController extends AbstractController
{
public final function get_right_controller_regarding_authorizations()
{
if(ModulesManager::is_module_installed(Environment::get_running_module_name()))
{
$module=ModulesManager::get_module(Environment::get_running_module_name());
if(!$module->is_activated())
{
return PHPBoostErrors::module_not_activated();
}
}
else
{
return PHPBoostErrors::module_not_installed();
}
return $this;
}
}
?>
