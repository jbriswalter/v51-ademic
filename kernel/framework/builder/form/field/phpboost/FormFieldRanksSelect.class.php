<?php






























class FormFieldRanksSelect extends FormFieldSimpleSelectChoice
{
const MEMBER='0';
const MODERATOR='1';
const ADMINISTRATOR='2';









public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$lang=LangLoader::get('user-common');
$options=array();
$options[]=new FormFieldSelectChoiceOption($lang['member'],self::MEMBER);
$options[]=new FormFieldSelectChoiceOption($lang['moderator'],self::MODERATOR);
$options[]=new FormFieldSelectChoiceOption($lang['administrator'],self::ADMINISTRATOR);
return $options;
}
}
?>
