<?php
































class LastUseDateConfig extends AbstractConfigData
{




public function set_last_use_date(Date $date)
{
$this->set_property('year',$date->get_year());
$this->set_property('month',$date->get_month());
$this->set_property('day',$date->get_day());
}





public function get_last_use_date()
{
try
{
$date=new Date(Date::DATE_NOW,Timezone::SITE_TIMEZONE);
$date->set_year($this->get_property('year'));
$date->set_month($this->get_property('month'));
$date->set_day($this->get_property('day'));
return $date;
}
catch(Exception $ex)
{
return $this->get_date_far_in_the_past();
}
}

private function get_date_far_in_the_past()
{
$date=new Date();
$date->set_year($date->get_year()-1);
return $date;
}




public function get_default_values()
{
return array();
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','last-use-date');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'last-use-date');
}
}
?>
