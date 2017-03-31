<?php






























class FormFieldLangsSelect extends FormFieldSimpleSelectChoice
{
private $check_authorizations=false;









public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$options=array();
foreach(LangsManager::get_activated_langs_map()as $lang)
{
if($this->check_authorizations)
{
if($lang->check_auth())
{
$options[]=new FormFieldSelectChoiceOption($lang->get_configuration()->get_name(),$lang->get_id());
}
}
else
{
$options[]=new FormFieldSelectChoiceOption($lang->get_configuration()->get_name(),$lang->get_id());
}
}
return $options;
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'check_authorizations':
$this->check_authorizations=(bool)$value;
unset($field_options['check_authorizations']);
break;
}
}
parent::compute_options($field_options);
}
}
?>
