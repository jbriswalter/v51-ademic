<?php


























require_once 'init.php';

$running_module_name=Environment::get_running_module_name();
if(!in_array($running_module_name,array('user','admin','kernel')))
{
if(ModulesManager::is_module_installed($running_module_name))
{
$module=ModulesManager::get_module($running_module_name);
if(!$module->is_activated())
{
DispatchManager::redirect(PHPBoostErrors::module_not_activated());
}
}
else
{
DispatchManager::redirect(PHPBoostErrors::module_not_installed());
}
}
?>
