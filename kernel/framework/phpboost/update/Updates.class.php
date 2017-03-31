<?php


























define('CHECK_KERNEL',0X01);
define('CHECK_MODULES',0X02);
define('CHECK_THEMES',0X04);
define('CHECK_ALL_UPDATES',CHECK_KERNEL|CHECK_MODULES|CHECK_THEMES);






class Updates
{
private $repositories=array();
private $apps=array();

const PHPBOOST_OFFICIAL_REPOSITORY='http://www.phpboost.com/repository/main.xml';

const PHP_MIN_VERSION_UPDATES='5';





public function __construct($checks=CHECK_ALL_UPDATES)
{
$this->load_apps($checks);
$this->load_repositories();
$this->check_repositories();
}





private function load_apps($checks=CHECK_ALL_UPDATES)
{
if(ServerConfiguration::get_phpversion()>self::PHP_MIN_VERSION_UPDATES)
{
$user_locale=AppContext::get_current_user()->get_locale();
if($checks&CHECK_KERNEL)
{
$this->apps[]=new Application('kernel',$user_locale,Application::KERNEL_TYPE,Environment::get_phpboost_version(),Updates::PHPBOOST_OFFICIAL_REPOSITORY);
}

if($checks&CHECK_MODULES)
{
$activated_modules=ModulesManager::get_activated_modules_map_sorted_by_localized_name();
foreach($activated_modules as $module)
{
$this->apps[]=new Application($module->get_id(),
$user_locale,Application::MODULE_TYPE,
$module->get_configuration()->get_version(),$module->get_configuration()->get_repository());
}
}

if($checks&CHECK_THEMES)
{

$activated_themes=ThemesManager::get_activated_themes_map();
foreach($activated_themes as $id=>$value)
{
$repository=$value->get_configuration()->get_repository();
if(!empty($repository))
{
$this->apps[]=new Application($id,$user_locale,Application::TEMPLATE_TYPE,$value->get_configuration()->get_version(),$repository);
}
}
}
}
}




private function load_repositories()
{
if(ServerConfiguration::get_phpversion()>self::PHP_MIN_VERSION_UPDATES)
{
foreach($this->apps as $app)
{
$rep=$app->get_repository();
if(!empty($rep)&&!isset($this->repositories[$rep]))
$this->repositories[$rep]=new Repository($rep);
}
}
}




private function check_repositories()
{
if(ServerConfiguration::get_phpversion()>self::PHP_MIN_VERSION_UPDATES)
{
foreach($this->apps as $app)
{
$result=$this->repositories[$app->get_repository()]->check($app);
if($result!==null)
{
$this->add_update_alert($result);
}
}
}
}




private function add_update_alert($app)
{
$identifier=$app->get_identifier();

if(AdministratorAlertService::find_by_identifier($identifier,'updates','kernel')===null)
{
$alert=new AdministratorAlert();
require_once(PATH_TO_ROOT.'/lang/'.AppContext::get_current_user()->get_locale().'/admin.php');

if($app->get_type()==Application::KERNEL_TYPE)
$alert->set_entitled(sprintf(LangLoader::get_message('kernel_update_available','admin'),$app->get_version()));
else
$alert->set_entitled(sprintf(LangLoader::get_message('update_available','admin'),$app->get_type(),$app->get_name(),$app->get_version()));

$alert->set_fixing_url('/admin/updates/detail.php?identifier='.$identifier);
$alert->set_priority($app->get_priority());
$alert->set_properties(serialize($app));
$alert->set_type('updates');
$alert->set_identifier($identifier);


AdministratorAlertService::save_alert($alert);
}
}
}
?>
