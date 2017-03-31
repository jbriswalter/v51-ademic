<?php































abstract class AbstractGraphicalEnvironment implements GraphicalEnvironment
{
protected function process_site_maintenance()
{
$maintenance_config=MaintenanceConfig::load();
if($maintenance_config->is_under_maintenance())
{
if(!$maintenance_config->is_authorized_in_maintenance())
{

if(AppContext::get_current_user()->check_level(User::MEMBER_LEVEL))
{
$session=AppContext::get_session();
Session::delete($session);

AppContext::get_response()->redirect(UserUrlBuilder::connect());
}

$maintain_url=UserUrlBuilder::maintain();
if(!Url::is_current_url($maintain_url->relative()))
{
AppContext::get_response()->redirect($maintain_url);
}
}
}
}

protected static function set_page_localization($page_title)
{
AppContext::get_session()->update_location($page_title);
}
}
?>
