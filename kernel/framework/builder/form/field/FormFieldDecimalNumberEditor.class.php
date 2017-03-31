<?php






























class FormFieldDecimalNumberEditor extends FormFieldNumberEditor
{








public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$this->pattern='`^[0-9]+([\.|,][0-9]{1,2})?$`i';
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-decimal');
}
}
?>
