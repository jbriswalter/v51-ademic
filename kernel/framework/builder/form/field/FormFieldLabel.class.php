<?php



































class FormFieldLabel extends AbstractFormField
{
public function __construct($value,array $properties=array())
{
parent::__construct('','',$value,$properties);
}

public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->put('LABEL',$this->get_value());

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldLabel.tpl');
}

protected function get_js_specialization_code()
{
return 'field.validate = function() { return true; };'.
'field.disable = function() { }; field.enable = function() { };'.
'field.isDisabled = function() { return false; };'.
'field.getValue = function() { return ""; };';
}
}
?>
