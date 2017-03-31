<?php






























define('PATH_TO_ROOT','../../..');

include_once(PATH_TO_ROOT.'/kernel/begin.php');
AppContext::get_session()->no_session_location();
define('TITLE','');
include_once(PATH_TO_ROOT.'/kernel/header_no_display.php');

$request=AppContext::get_request();

$date=$request->get_getvalue('date','');
$field=$request->get_getvalue('field','');
$input_field=$request->get_getvalue('input_field','');
$input_date=$request->get_getvalue('input_date','');
$calendar_number=$request->get_getvalue('calendar_number','');


$calendar_type=!empty($date)?'timestamp':'date';
$field=!empty($field)?trim($field):'calendar';

$date_lang=LangLoader::get('date-common');
$tpl=new FileTemplate('framework/util/mini_calendar_response.tpl');
$tpl->add_lang($date_lang);;


if($calendar_type=='date')
{
$now=new Date();
$year=$request->get_getint('y',$now->get_year());
$month=$request->get_getint('m',$now->get_month());
$day=$request->get_getint('d',$now->get_day());
$input_date=!empty($input_date)?trim($input_date):$day.'/'.$month.'/'.$year;

$selected=explode('/',$input_date);
$selected_day=NumberHelper::numeric($selected[0]);
$selected_month=NumberHelper::numeric($selected[1]);
$selected_year=NumberHelper::numeric($selected[2]);

if(!checkdate($month,$day,$year))
{
list($year,$month,$day)=array(date('Y'),date('n'),date('j'));
}
$bissextile=(date("L",mktime(0,0,0,1,1,$year))==1)?29:28;

$array_month=array(31,$bissextile,31,30,31,30,31,31,30,31,30,31);
$array_l_month=array($date_lang['january'],$date_lang['february'],$date_lang['march'],$date_lang['april'],$date_lang['may'],$date_lang['june'],
$date_lang['july'],$date_lang['august'],$date_lang['september'],$date_lang['october'],$date_lang['november'],$date_lang['december']);
$month_day=$array_month[$month-1];

$tpl->put_all(array(
'FIELD'=>$field,
'INPUT_FIELD'=>$input_field,
'CALENDAR_NUMBER'=>$calendar_number,
'MONTH'=>$month,
'YEAR'=>$year,
'PREVIOUS_YEAR'=>($month==1)?($year-1):$year,
'PREVIOUS_MONTH'=>($month==1)?12:($month-1),
'NEXT_YEAR'=>($month==12)?($year+1):$year,
'NEXT_MONTH'=>($month==12)?1:($month+1)
));


for($i=1;$i<=12;$i++)
{
$selected=($month==$i)?'selected="selected"':'';
$tpl->assign_block_vars('month',array(
'MONTH'=>'<option value="'.$i.'" '.$selected.'>'.TextHelper::htmlentities($array_l_month[$i-1]).'</option>'
));
}
for($i=1900;$i<=2037;$i++)
{
$selected=($year==$i)?'selected="selected"':'';
$tpl->assign_block_vars('year',array(
'YEAR'=>'<option value="'.$i.'" '.$selected.'>'.$i.'</option>'
));
}


$first_day=date('w',@mktime(1,0,0,$month,1,$year));
if($first_day==0)
{
$first_day=7;
}



$month=($month<10&&substr($month,0,1)!=0)?'0'.$month:$month;
$j=1;
$last_day=($month_day+$first_day);
for($i=1;$i<=42;$i++)
{
if($i>=$first_day&&$i<$last_day)
{
$date=StringVars::replace_vars(':year-:month-:day',array('year'=>$year,'month'=>$month,'day'=>($j<10&&substr($j,0,1)!=0)?'0'.$j:$j));
$class='';
if((($i%7)==6)||(($i%7)==0))
{
$class='calendar-weekend';
}

if($j==$selected_day&&$month==$selected_month&&$year==$selected_year)
{
$class='calendar-event';
}

$contents=$j;
$j++;
}
else
{
$date=$contents='';
$class='calendar-none';
}

$tpl->assign_block_vars('day',array(
'DAY'=>$contents,
'CLASS'=>$class,
'CHANGE_LINE'=>(($i%7)==0&&$i!=42),
'INPUT_FIELD'=>$input_field,
'DATE'=>$date,
));
}
}
else
{

}

$tpl->display();

include_once(PATH_TO_ROOT.'/kernel/footer_no_display.php');
?>
