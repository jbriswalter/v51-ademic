<?php






























class FormFieldEditors extends FormFieldSimpleSelectChoice
{








public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$options=array();
foreach(AppContext::get_content_formatting_service()->get_available_editors()as $id=>$name)
{
$options[]=new FormFieldSelectChoiceOption($name,$id);
}
return $options;
}
}
?>
