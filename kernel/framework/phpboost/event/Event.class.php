<?php





































class Event
{


const EVENT_STATUS_UNREAD=0;

const EVENT_STATUS_BEING_PROCESSED=1;

const EVENT_STATUS_PROCESSED=2;




protected $id=0;




protected $entitled='';




protected $fixing_url='';




protected $current_status=self::EVENT_STATUS_UNREAD;




protected $creation_date;





protected $id_in_module=0;




protected $identifier='';




protected $type='';




protected $must_regenerate_cache=true;




public function __construct()
{
$this->current_status=self::EVENT_STATUS_UNREAD;
$this->creation_date=new Date();
}





public function set_id($id)
{
if(is_int($id)&&$id>0)
$this->id=$id;
}





public function set_entitled($entitled)
{
$this->entitled=$entitled;
}





public function set_fixing_url($fixing_url)
{
$this->fixing_url=$fixing_url;
}










public function set_status($new_current_status)
{
if(in_array($new_current_status,array(self::EVENT_STATUS_UNREAD,self::EVENT_STATUS_BEING_PROCESSED,self::EVENT_STATUS_PROCESSED),TRUE))
{
$this->current_status=$new_current_status;
}

else
{
$this->current_status=self::EVENT_STATUS_UNREAD;
}

$this->must_regenerate_cache=true;
}





public function set_creation_date($date)
{
if(is_object($date)&&$date instanceof Date)
$this->creation_date=$date;
}






public function set_id_in_module($id)
{
$this->id_in_module=$id;
}






public function set_identifier($identifier)
{
$this->identifier=$identifier;
}





public function set_type($type)
{
$this->type=$type;
}





public function set_must_regenerate_cache($must)
{
if(is_bool($must))
$this->must_regenerate_cache=$must;
}





public function get_id()
{
return $this->id;
}





public function get_entitled()
{
return $this->entitled;
}





public function get_fixing_url()
{
return $this->fixing_url;
}










public function get_status()
{
return $this->current_status;
}





public function get_creation_date()
{
return $this->creation_date;
}





public function get_id_in_module()
{
return $this->id_in_module;
}






public function get_identifier()
{
return $this->identifier;
}





public function get_type()
{
return $this->type;
}





public function get_must_regenerate_cache()
{
return $this->must_regenerate_cache;
}





public function get_status_name()
{
switch($this->current_status)
{
case self::EVENT_STATUS_UNREAD:
return LangLoader::get_message('contribution_status_unread','main');
case self::EVENT_STATUS_BEING_PROCESSED:
return LangLoader::get_message('contribution_status_being_processed','main');
case self::EVENT_STATUS_PROCESSED:
return LangLoader::get_message('contribution_status_processed','main');
}
}












public function build_event($id,$entitled,$fixing_url,$current_status,$creation_date,$id_in_module,$identifier,$type)
{
$this->id=$id;
$this->entitled=$entitled;
$this->fixing_url=$fixing_url;
$this->current_status=$current_status;
$this->creation_date=$creation_date;
$this->id_in_module=$id_in_module;
$this->identifier=$identifier;
$this->type=$type;
$this->must_regenerate_cache=false;
}
}
?>
