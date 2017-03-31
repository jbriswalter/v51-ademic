<?php






























class FormFieldUrlEditor extends FormFieldTextEditor
{








public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$this->set_placeholder('http://');
$constraints[]=new FormFieldConstraintUrl();
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-url');
}
}
?>
