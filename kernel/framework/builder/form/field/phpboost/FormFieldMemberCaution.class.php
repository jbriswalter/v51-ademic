<?php






























class FormFieldMemberCaution extends FormFieldSimpleSelectChoice
{








public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$options=array();
for($i=0;$i<=10;$i++)
{
$percentage=10*$i;
$options[]=new FormFieldSelectChoiceOption($percentage.' %',$percentage);
}
return $options;
}
}
?>
