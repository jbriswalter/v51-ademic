<?php






























class FormFieldCheckbox extends AbstractFormField
{
const CHECKED=true;
const UNCHECKED=false;









public function __construct($id,$label,$checked=self::UNCHECKED,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$checked,$field_options,$constraints);
$this->set_css_form_field_class('form-field-checkbox');
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->put_all(array(
'C_REQUIRED_AND_HAS_VALUE'=>$this->is_required()&&$this->get_value(),
'C_CHECKED'=>$this->is_checked()
));

return $template;
}





public function is_checked()
{
return $this->get_value()==self::CHECKED;
}




public function retrieve_value()
{
$request=AppContext::get_request();
if($request->has_parameter($this->get_html_id()))
{
$this->set_value((int)$request->get_value($this->get_html_id())=='on');
}
else
{
$this->set_value(0);
}
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldCheckbox.tpl');
}
}
?>
