<?php


























abstract class AdminModuleController extends AbstractController
{
public final function get_right_controller_regarding_authorizations()
{
if(!AppContext::get_current_user()->is_admin())
{
return new UserLoginController(UserLoginController::ADMIN_LOGIN,substr(REWRITED_SCRIPT,strlen(GeneralConfig::load()->get_site_path())));
}
else if(ModulesManager::is_module_installed(Environment::get_running_module_name()))
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
