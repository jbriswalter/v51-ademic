<?php

































class AdministratorAlert extends Event
{


const ADMIN_ALERT_VERY_LOW_PRIORITY=1;

const ADMIN_ALERT_LOW_PRIORITY=2;

const ADMIN_ALERT_MEDIUM_PRIORITY=3;

const ADMIN_ALERT_HIGH_PRIORITY=4;

const ADMIN_ALERT_VERY_HIGH_PRIORITY=5;



const ADMIN_ALERT_STATUS_UNREAD=Event::EVENT_STATUS_UNREAD;

const ADMIN_ALERT_STATUS_PROCESSED=Event::EVENT_STATUS_PROCESSED;




private $priority=self::ADMIN_ALERT_MEDIUM_PRIORITY;




private $properties='';




public function __construct()
{
parent::__construct();
$this->priority=self::ADMIN_ALERT_MEDIUM_PRIORITY;
$this->properties='';
}














public function build($id,$entitled,$properties,$fixing_url,$current_status,$creation_date,$id_in_module,$identifier,$type,$priority)
{
parent::build_event($id,$entitled,$fixing_url,$current_status,$creation_date,$id_in_module,$identifier,$type);
$this->set_priority($priority);
$this->set_properties($properties);
}












public function get_priority()
{
return $this->priority;
}





public function get_properties()
{
return $this->properties;
}












public function set_priority($priority)
{
$priority=intval($priority);
if($priority>=self::ADMIN_ALERT_VERY_LOW_PRIORITY&&$priority<=self::ADMIN_ALERT_VERY_HIGH_PRIORITY)
{
$this->priority=$priority;
}
else
{
$this->priority=self::ADMIN_ALERT_MEDIUM_PRIORITY;
}
}





public function set_properties($properties)
{

if(is_string($properties))
{
$this->properties=$properties;
}
}





public function get_priority_name()
{
global $LANG;

$admin_lang=LangLoader::get('admin');
switch($this->priority)
{
case self::ADMIN_ALERT_VERY_LOW_PRIORITY:
return $admin_lang['priority_very_low'];
break;
case self::ADMIN_ALERT_LOW_PRIORITY:
return $admin_lang['priority_low'];
break;
case self::ADMIN_ALERT_MEDIUM_PRIORITY:
return $admin_lang['priority_medium'];
break;
case self::ADMIN_ALERT_HIGH_PRIORITY:
return $admin_lang['priority_high'];
break;
case self::ADMIN_ALERT_VERY_HIGH_PRIORITY:
return $admin_lang['priority_very_high'];
break;
default:

return $LANG['normal'];
}
}
}
?>
