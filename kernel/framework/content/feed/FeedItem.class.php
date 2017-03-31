<?php































class FeedItem
{
private $title='';
private $link='';
private $date=null;
private $desc='';
private $guid='';
private $image_url='';
private $enclosure;
private $auth=null;

## Setters ##




public function set_title($value){$this->title=strip_tags($value);}




public function set_date($value){$this->date=$value;}




public function set_desc($value){$this->desc=$value;}




public function set_image_url($value){$this->image_url=$value;}




public function set_enclosure(FeedItemEnclosure $value){$this->enclosure=$value;}




public function set_auth($auth){$this->auth=$auth;}




public function set_link($value)
{
if(!($value instanceof Url))
{
$value=new Url($value);
}
$this->link=$value->absolute();
}




public function set_guid($value)
{
if($value instanceof Url)
{
$this->guid=$value->absolute();
}
else
{
$this->guid=$value;
}
}

## Getters ##
public function get_title(){return str_replace('&','&amp;',TextHelper::htmlspecialchars_decode($this->title));}
public function get_link(){return $this->link;}
public function get_guid(){return $this->guid;}
public function get_date(){return $this->date->format(Date::FORMAT_DAY_MONTH,Timezone::USER_TIMEZONE);}
public function get_date_rfc2822(){return $this->date->format(Date::FORMAT_RFC2822,Timezone::USER_TIMEZONE);}
public function get_date_iso8601(){return $this->date->format(Date::FORMAT_ISO8601,Timezone::USER_TIMEZONE);}
public function get_date_text(){return $this->date->format(Date::FORMAT_DAY_MONTH_YEAR_LONG,Timezone::USER_TIMEZONE);}
public function get_desc(){return str_replace('&','&amp;',TextHelper::htmlspecialchars_decode($this->desc));}
public function get_image_url(){return $this->image_url;}
public function get_enclosure(){return $this->enclosure;}
public function get_auth(){return $this->auth;}
}
?>
