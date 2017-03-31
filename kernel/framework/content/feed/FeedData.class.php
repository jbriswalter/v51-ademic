<?php































class FeedData
{
private $title='';
private $link='';
private $date=null;
private $desc='';
private $lang='';
private $host='';
private $items=array();
private $auth_bit=0;





public function __construct($data=null)
{
if($data!==null&&$data instanceof FeedData)
{
$this->title=$data->title;
$this->link=$data->link;
$this->date=$data->date;
$this->desc=$data->desc;
$this->lang=$data->lang;
$this->host=$data->host;
$this->items=$data->items;
}
}

## Setters ##




public function set_title($value){$this->title=strip_tags($value);}




public function set_date($value){$this->date=$value;}




public function set_desc($value){$this->desc=$value;}




public function set_lang($value){$this->lang=$value;}




public function set_host($value){$this->host=$value;}




public function set_auth_bit($value){$this->auth_bit=$value;}




public function set_link($value)
{
if(!($value instanceof Url))
{
$value=new Url($value);
}
$this->link=$value->absolute();
}

public function add_item($item){array_push($this->items,$item);}

## Getters ##
public function get_title(){return $this->title;}
public function get_link(){return $this->link;}
public function get_date(){return $this->date->format(Date::FORMAT_DAY_MONTH,Timezone::USER_TIMEZONE);}
public function get_date_rfc2822(){return $this->date->format(Date::FORMAT_RFC2822,Timezone::USER_TIMEZONE);}
public function get_date_iso8601(){return $this->date->format(Date::FORMAT_ISO8601,Timezone::USER_TIMEZONE);}
public function get_date_text(){return $this->date->format(Date::FORMAT_DAY_MONTH_YEAR_LONG,Timezone::USER_TIMEZONE);}
public function get_desc(){return $this->desc;}
public function get_lang(){return $this->lang;}
public function get_host(){return $this->host;}





public function get_items()
{
$items=array();
foreach($this->items as $item)
{
if((gettype($item->get_auth())!='array' || $this->auth_bit==0)|| AppContext::get_current_user()->check_auth($item->get_auth(),$this->auth_bit))
$items[]=$item;
}

return $items;
}

public function serialize()
{
return serialize($this);
}








public function subitems($number=10,$begin_at=0)
{
$secured_items=$this->get_items();
$nb_items=count($secured_items);

$items=array();
$end_at=$begin_at+$number;
for($i=$begin_at;($i<$nb_items)&&($i<$end_at);$i++)
$items[]=&$secured_items[$i];

return $items;
}
}
?>
