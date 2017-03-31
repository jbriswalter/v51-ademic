<?php































class Notification extends Event
{
const NOTIFICATION_AUTH_BIT=1;

const NOTIFICATION_ALERT_LOW_PRIORITY=2;
const NOTIFICATION_ALERT_MEDIUM_PRIORITY=3;
const NOTIFICATION_ALERT_HIGH_PRIORITY=4;




private $priority=self::ADMIN_ALERT_MEDIUM_PRIORITY;




private $module_id='';




private $auth=array();




public function __construct()
{
parent::__construct();
$this->module_id=Environment::get_running_module_name();
}





public function set_module_id($module_id)
{
$this->module_id=$module_id;
}





public function set_fixing_date($date)
{
if(is_object($date)&&$date instanceof Date)
{
$this->fixing_date=$date;
}
}





public function set_auth($auth)
{
if(is_array($auth))
{
$this->auth=$auth;
}
}





public function get_module_id()
{
return $this->module_id;
}





public function get_auth()
{
return $this->auth;
}





public function get_module_name()
{
if(!empty($this->module_id))
{
$module=ModulesManager::get_module($this->module_id);

return $module?$module->get_configuration()->get_name():'';
}
else
{
return '';
}
}
}
?>
