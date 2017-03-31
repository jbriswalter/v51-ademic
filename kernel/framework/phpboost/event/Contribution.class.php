<?php



























## Constants ##









class Contribution extends Event
{
const CONTRIBUTION_AUTH_BIT=1;




private $description;




private $module='';




private $fixing_date;




private $auth=array();




private $poster_id=0;




private $fixer_id=0;




private $poster_login='';




private $fixer_login='';




private $poster_level='';




private $fixer_level='';




private $poster_groups='';




private $fixer_groups='';




public function __construct()
{
parent::__construct();
$this->current_status=Event::EVENT_STATUS_UNREAD;
$this->creation_date=new Date();
$this->fixing_date=new Date();
$this->module=Environment::get_running_module_name();
}



















public function build($id,$entitled,$description,$fixing_url,$module,$status,$creation_date,$fixing_date,$auth,$poster_id,$fixer_id,$id_in_module,$identifier,$type,$poster_login='',$fixer_login='',$poster_level='',$fixer_level='',$poster_groups='',$fixer_groups='')
{

parent::build_event($id,$entitled,$fixing_url,$status,$creation_date,$id_in_module,$identifier,$type);


$this->description=$description;
$this->module=$module;
$this->fixing_date=$fixing_date;
$this->auth=$auth;
$this->poster_id=$poster_id;
$this->fixer_id=$fixer_id;
$this->poster_login=$poster_login;
$this->fixer_login=$fixer_login;
$this->poster_level=$poster_level;
$this->fixer_level=$fixer_level;
$this->poster_groups=$poster_groups;
$this->fixer_groups=$fixer_groups;


$this->must_regenerate_cache=false;
}





public function set_module($module)
{
$this->module=$module;
}





public function set_fixing_date($date)
{
if(is_object($date)&&$date instanceof Date)
{
$this->fixing_date=$date;
}
}










public function set_status($new_current_status)
{
if(in_array($new_current_status,array(Event::EVENT_STATUS_UNREAD,Event::EVENT_STATUS_BEING_PROCESSED,Event::EVENT_STATUS_PROCESSED),TRUE))
{

if($this->current_status!=Event::EVENT_STATUS_PROCESSED&&$new_current_status==Event::EVENT_STATUS_PROCESSED)
{
$this->fixing_date=new Date();

if($this->fixer_id==0)
{
$this->fixer_id=AppContext::get_current_user()->get_id();
}
}

$this->current_status=$new_current_status;
}

else
{
$this->current_status=Event::EVENT_STATUS_UNREAD;
}

$this->must_regenerate_cache=true;
}





public function set_auth($auth)
{
if(is_array($auth))
{
$this->auth=$auth;
}
}





public function set_poster_id($poster_id)
{
if($poster_id>0)
{
$this->poster_id=$poster_id;

$this->poster_login=PersistenceContext::get_querier()->get_column_value(DB_TABLE_MEMBER,'display_name','WHERE user_id = :id',array('id'=>$poster_id));
}
}





public function set_fixer_id($fixer_id)
{
if($fixer_id>0)
{
$this->fixer_id=$fixer_id;

$this->fixer_login=PersistenceContext::get_querier()->get_column_value(DB_TABLE_MEMBER,'display_name','WHERE user_id = :id',array('id'=>$fixer_id));
}
}





public function set_description($description)
{
if(is_string($description))
{
$this->description=$description;
}
}





public function get_description()
{
return $this->description;
}





public function get_module()
{
return $this->module;
}





public function get_fixing_date()
{
return $this->fixing_date;
}





public function get_auth()
{
return $this->auth;
}





public function get_poster_id()
{
return $this->poster_id;
}





public function get_fixer_id()
{
return $this->fixer_id;
}





public function get_poster_login()
{
return $this->poster_login;
}





public function get_fixer_login()
{
return $this->fixer_login;
}





public function get_poster_level()
{
return $this->poster_level;
}





public function get_fixer_level()
{
return $this->fixer_level;
}





public function get_poster_groups()
{
return $this->poster_groups;
}





public function get_fixer_groups()
{
return $this->fixer_groups;
}





public function get_status_name()
{
switch($this->current_status)
{
case Event::EVENT_STATUS_UNREAD:
return LangLoader::get_message('contribution_status_unread','main');
case Event::EVENT_STATUS_BEING_PROCESSED:
return LangLoader::get_message('contribution_status_being_processed','main');
case Event::EVENT_STATUS_PROCESSED:
return LangLoader::get_message('contribution_status_processed','main');
}
}





public function get_module_name()
{
if(!empty($this->module))
{
$module=ModulesManager::get_module($this->module);

return $module?$module->get_configuration()->get_name():'';
}
else
{
return '';
}
}
}
?>
