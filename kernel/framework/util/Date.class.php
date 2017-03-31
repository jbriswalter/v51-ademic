<?php






































class Date
{
const DATE_NOW='now';

const FORMAT_TIMESTAMP=0;
const FORMAT_DAY_MONTH=1;
const FORMAT_DAY_MONTH_YEAR=2;
const FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE=3;
const FORMAT_RFC2822=4;
const FORMAT_ISO8601=5;
const FORMAT_DAY_MONTH_YEAR_LONG=6;
const FORMAT_DAY_MONTH_YEAR_TEXT=7;
const FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE_TEXT=8;
const FORMAT_RELATIVE=9;
const FORMAT_ISO_DAY_MONTH_YEAR=10;




private $date_time;











public function __construct($time=self::DATE_NOW,$referencial_timezone=Timezone::USER_TIMEZONE)
{
$date_timezone=Timezone::get_timezone($referencial_timezone);

if(preg_match('`^([0-9]+)$`i',$time))
{
$this->date_time=new DateTime();
$this->date_time->setTimezone($date_timezone);
$this->date_time->setTimestamp($time);
}
else if(preg_match('`^-([0-9]+)$`i',$time))
{
$this->date_time=new DateTime('@'.$time,$date_timezone);
}
else
{
$this->date_time=new DateTime($time,$date_timezone);
}
}

























public function format($format=self::FORMAT_DAY_MONTH,$referencial_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referencial_timezone);

if(is_string($format))
{
return $this->date_time->format($format);
}

switch($format)
{
case self::FORMAT_DAY_MONTH:
return $this->date_time->format(LangLoader::get_message('date_format_day_month','date-common'));
break;

case self::FORMAT_DAY_MONTH_YEAR:
return $this->date_time->format(LangLoader::get_message('date_format_day_month_year','date-common'));
break;

case self::FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE:
return $this->date_time->format(LangLoader::get_message('date_format_day_month_year_hour_minute','date-common'));
break;

case self::FORMAT_TIMESTAMP:
return $this->date_time->getTimestamp();
break;

case self::FORMAT_RFC2822:
return $this->date_time->format('r');
break;

case self::FORMAT_ISO8601:
return $this->date_time->format('c');
break;

case self::FORMAT_DAY_MONTH_YEAR_LONG:
return self::transform_date($this->date_time->format(LangLoader::get_message('date_format_day_month_year_long','date-common')));
break;

case self::FORMAT_DAY_MONTH_YEAR_TEXT:
return self::transform_date($this->date_time->format(LangLoader::get_message('date_format_day_month_year_text','date-common')));
break;

case self::FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE_TEXT:
return self::transform_date($this->date_time->format(LangLoader::get_message('date_format_day_month_year_hour_minute_text','date-common')));
break;

case self::FORMAT_RELATIVE:
$now=new Date(Date::DATE_NOW,$referencial_timezone);

if($now->get_timestamp()>$this->get_timestamp())
$time_diff=$now->get_timestamp()-$this->get_timestamp();
else
$time_diff=$this->get_timestamp()-$now->get_timestamp();

$secondes=$time_diff;
$minutes=round($time_diff/60);
$hours=round($time_diff/3600);
$days=round($time_diff/86400);
$weeks=round($time_diff/604800);
$months=round($time_diff/2419200);
$years=round($time_diff/29030400);

if($secondes==1)
return LangLoader::get_message('instantly','date-common');
elseif($secondes<60)
return $secondes.' '.LangLoader::get_message('seconds','date-common');
elseif($minutes<60)
return $minutes.' '.($minutes>1?LangLoader::get_message('minutes','date-common'):LangLoader::get_message('minute','date-common'));
elseif($hours<24)
return $hours.' '.($hours>1?LangLoader::get_message('hours','date-common'):LangLoader::get_message('hour','date-common'));
elseif($days<7)
return $days.' '.($days>1?LangLoader::get_message('days','date-common'):LangLoader::get_message('day','date-common'));
elseif($weeks<4)
return $weeks.' '.($weeks>1?LangLoader::get_message('weeks','date-common'):LangLoader::get_message('week','date-common'));
elseif($months<12)
return $months.' '.LangLoader::get_message('months','date-common');
else
return $years.' '.($years>1?LangLoader::get_message('years','date-common'):LangLoader::get_message('year','date-common'));

break;
case self::FORMAT_ISO_DAY_MONTH_YEAR:
return $this->date_time->format('Y-m-d');
break;

default:
return '';
}
}





public function get_timestamp()
{
return $this->date_time->getTimestamp();
}





public function get_date_time()
{
return $this->date_time;
}






public function get_year($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return $this->date_time->format('Y');
}

public function set_year($year,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setDate($year,$this->get_month(),$this->get_day());
}






public function get_month($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return $this->date_time->format('m');
}

public function set_month($month,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setDate($this->get_year(),$month,$this->get_day());
}






public function get_week_number($referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
return $this->date_time->format('W');
}

public function set_week_number($week_number)
{
$this->date_time->setISODate($this->get_year(),$week_number);
}






public function get_day($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return(int)$this->date_time->format('d');
}

public function set_day($day,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setDate($this->get_year(),$this->get_month(),$day);
}






public function get_day_of_week($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return(int)$this->date_time->format('w');
}






public function get_day_of_year($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return(int)$this->date_time->format('z');
}

public function set_day_of_year($day_of_year)
{
$this->date_time->modify($this->get_year().'-01-00 '.$day_of_year.'days');
}






public function get_hours($timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($timezone);
return $this->date_time->format('H');
}

public function set_hours($hours,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setTime($hours,$this->get_minutes(),$this->get_seconds());
}





public function get_minutes()
{
return $this->date_time->format('i');
}

public function set_minutes($minutes,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setTime($this->get_hours(),$minutes,$this->get_seconds());
}





public function get_seconds()
{
return $this->date_time->format('s');
}

public function set_seconds($seconds,$referential_timezone=Timezone::USER_TIMEZONE)
{
$this->compute_server_user_difference($referential_timezone);
$this->date_time->setTime($this->get_hours(),$this->get_minutes(),$seconds);
}





public function to_date()
{
return $this->date_time->format('Y-m-d');
}






public function is_anterior_to(Date $date)
{
return $this->get_date_time()<$date->get_date_time();
}






public function is_posterior_to(Date $date)
{
return!$this->is_anterior_to($date);
}






public function equals(Date $date)
{
return $this->get_date_time()==$date->get_date_time();
}





public function add_days($number_days)
{
$this->date_time->modify('+'.$number_days.' days');
}





public function add_weeks($number_weeks)
{
$this->date_time->modify('+'.$number_weeks.' weeks');
}





public function is_date_year_bissextile()
{
return $this->date_time->format('L')==1;
}








private static function check_date($month,$day,$year)
{
return checkdate($month,$day,$year);
}

public static function to_format($time,$format=self::FORMAT_DAY_MONTH,$referencial_timezone=Timezone::USER_TIMEZONE)
{
$date=new Date($time,$referencial_timezone);
return $date->format($format);
}

public static function set_default_timezone()
{
$default=@date_default_timezone_get();
@date_default_timezone_set($default);
}





private function compute_server_user_difference($referencial_timezone=Timezone::SERVER_TIMEZONE)
{
$this->date_time->setTimezone(Timezone::get_timezone($referencial_timezone));
}

private static function transform_date($date)
{
$date_lang=LangLoader::get('date-common');

$search=array(
'january','february','march','april','may','june','july','august','september','october','november','december',
'monday','tuesday','wednesday','thursday','friday','saturday','sunday'
);
$replace=array(
$date_lang['january'],$date_lang['february'],$date_lang['march'],$date_lang['april'],$date_lang['may'],$date_lang['june'],
$date_lang['july'],$date_lang['august'],$date_lang['september'],$date_lang['october'],$date_lang['november'],$date_lang['december'],
$date_lang['monday'],$date_lang['tuesday'],$date_lang['wednesday'],$date_lang['thursday'],$date_lang['friday'],$date_lang['saturday'],$date_lang['sunday'],
);
return str_replace($search,$replace,strtolower($date));
}
}
?>
