<?php



































class FormFieldFree extends AbstractFormField
{
public function __construct($id,$label,$value,array $properties=array())
{
parent::__construct($id,$label,$value,$properties);
$this->set_css_form_field_class(empty($label)?'form-field-free-large':'form-field-free');
}

public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$this->get_value()
));

$template->put('C_HIDE_FOR_ATTRIBUTE',true);

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}

?>
