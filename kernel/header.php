<?php


























if(defined('PHPBOOST')!==true)
{
exit;
}

$env=new SiteDisplayGraphicalEnvironment();
$env->set_breadcrumb($Bread_crumb);

Environment::set_graphical_environment($env);

if(!defined('TITLE'))
{
define('TITLE',LangLoader::get_message('unknow','main'));
}

$module_id=Environment::get_running_module_name();
$section='';
if(!Environment::home_page_running()&&ModulesManager::is_module_installed($module_id)&&ModulesManager::is_module_activated($module_id))
{
$section=ModulesManager::get_module($module_id)->get_configuration()->get_name();
}

$env->set_page_title(TITLE,$section);

ob_start();
?>
