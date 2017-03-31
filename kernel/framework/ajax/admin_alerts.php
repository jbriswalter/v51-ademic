<?php






























define('PATH_TO_ROOT','../../..');
require_once(PATH_TO_ROOT.'/kernel/begin.php');
AppContext::get_session()->no_session_location();
require_once(PATH_TO_ROOT.'/kernel/header_no_display.php');


AppContext::get_session()->csrf_get_protect();

if(!AppContext::get_current_user()->check_level(User::ADMIN_LEVEL))
{
exit;
}

$change_status=retrieve(GET,'change_status',0);
$id_to_delete=retrieve(GET,'delete',0);

if($change_status>0)
{
$alert=new AdministratorAlert();


if(($alert=AdministratorAlertService::find_by_id($change_status))!=null)
{

$new_status=$alert->get_status()!=Event::EVENT_STATUS_PROCESSED?Event::EVENT_STATUS_PROCESSED:Event::EVENT_STATUS_UNREAD;

$alert->set_status($new_status);

AdministratorAlertService::save_alert($alert);

echo '1';
}

else
{
echo '0';
}
}
elseif($id_to_delete>0)
{
$alert=new AdministratorAlert();


if(($alert=AdministratorAlertService::find_by_id($id_to_delete))!=null)
{
AdministratorAlertService::delete_alert($alert);
echo '1';
}

else
{
echo '0';
}
}

require_once(PATH_TO_ROOT.'/kernel/footer_no_display.php');
?>
