<?php






























class FormFieldDate extends AbstractFormField
{
public function __construct($id,$label,Date $value=null,$field_options=array(),array $constraints=array())
{
$constraints[]=new FormFieldConstraintDate();
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-date');
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->put_all(array(
'CALENDAR'=>$this->get_calendar()->display()
));

return $template;
}

public function retrieve_value()
{
$this->set_value(MiniCalendar::retrieve_date($this->get_html_id()));
}




private function get_calendar()
{
return new MiniCalendar($this->get_html_id(),$this->get_value());
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldDate.tpl');
}
}
?>
