<?php



































class MiniCalendar
{



private $num_instance=0;



private $style='';



private $html_id='';




private $date;

private static $num_instances=0;

private static $js_inclusion_already_done=false;






public function __construct($html_id,Date $date=null)
{
$this->html_id=$html_id;
$this->num_instance=++self::$num_instances;

$this->set_date($date);
}





public function set_date($date)
{
$this->date=$date;
}







public function set_style($style)
{
$this->style=$style;
}





public function get_date()
{
return $this->date;
}





public function display()
{

$template=new FileTemplate('framework/util/mini_calendar.tpl');

$template->put_all(array(
'DEFAULT_DATE'=>!empty($this->date)?$this->date->format(Date::FORMAT_ISO_DAY_MONTH_YEAR):'',
'CALENDAR_ID'=>$this->html_id,
'CALENDAR_NUMBER'=>(string)$this->num_instance,
'DAY'=>!empty($this->date)?$this->date->get_day():'',
'MONTH'=>!empty($this->date)?$this->date->get_month():'',
'YEAR'=>!empty($this->date)?$this->date->get_year():'',
'CALENDAR_STYLE'=>$this->style,
'C_INCLUDE_JS'=>!self::$js_inclusion_already_done
));

self::$js_inclusion_already_done=true;

return $template->render();
}






public static function retrieve_date($calendar_name)
{
$value=retrieve(REQUEST,$calendar_name,'',TSTRING_UNCHANGE);
return preg_match('`^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$`',$value)>0?new Date($value):null;
}
}
?>
