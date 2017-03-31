<?php






























class FormFieldThemesSelect extends FormFieldSimpleSelectChoice
{
private $check_authorizations=true;









public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$options=array();
foreach(ThemesManager::get_activated_themes_map()as $theme)
{
if($this->check_authorizations)
{
if($theme->check_auth())
{
$options[]=new FormFieldSelectChoiceOption($theme->get_configuration()->get_name(),$theme->get_id());
}
}
else
{
$options[]=new FormFieldSelectChoiceOption($theme->get_configuration()->get_name(),$theme->get_id());
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
