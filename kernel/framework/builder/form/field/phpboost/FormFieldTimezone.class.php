<?php






























class FormFieldTimezone extends FormFieldSimpleSelectChoice
{








public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$options=array();
foreach(DateTimeZone::listIdentifiers()as $timezone)
{
$options[]=new FormFieldSelectChoiceOption($timezone,$timezone);
}
return $options;
}

}

?>
