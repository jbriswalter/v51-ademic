<?php






























class FormFieldTelEditor extends FormFieldTextEditor
{
protected $type='tel';









public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$constraints[]=new FormFieldConstraintTel();
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-tel');
}
}
?>
