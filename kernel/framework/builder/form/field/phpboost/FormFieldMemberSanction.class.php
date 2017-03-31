<?php






























class FormFieldMemberSanction extends FormFieldSimpleSelectChoice
{
private $lang;
private $timestamp=0;









public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
$this->load_lang();
$this->timestamp=$value;
parent::__construct($id,$label,$this->get_time_value(),$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$sanctions=$this->get_sanctions_duration();
$options=array();
foreach($sanctions as $duration=>$name)
{
$options[]=new FormFieldSelectChoiceOption($name,$duration);
}
return $options;
}

private function load_lang()
{
$this->lang=LangLoader::get('date-common');
}

private function get_time_value()
{
$difference=($this->timestamp-time());

$times=array_keys($this->get_sanctions_duration());
if($difference>0)
{
for($i=count($times)-1;$i>0;$i--)
{
$t=ceil(($times[$i]+$times[$i-1])/2);

if($difference>=$t)
{
return $times[$i];
}
}
return 0;
}
}

private function get_sanctions_duration()
{
return array(
'0'=>LangLoader::get_message('no','common'),
'60'=>'1 '.$this->lang['minute'],
'300'=>'5 '.$this->lang['minutes'],
'900'=>'15 '.$this->lang['minutes'],
'1800'=>'30 '.$this->lang['minutes'],
'3600'=>'1 '.$this->lang['hour'],
'7200'=>'2 '.$this->lang['hours'],
'86400'=>'1 '.$this->lang['day'],
'172800'=>'2 '.$this->lang['days'],
'604800'=>'1 '.$this->lang['week'],
'1209600'=>'2 '.$this->lang['weeks'],
'2419200'=>'1 '.$this->lang['month'],
'4838400'=>'2 '.$this->lang['month'],
'326592000'=>LangLoader::get_message('illimited','main')
);
}
}
?>
