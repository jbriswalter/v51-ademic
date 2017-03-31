<?php






























class FormFieldDateTime extends FormFieldDate
{
public function __construct($id,$label,Date $value=null,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-datetime');
}




public function display()
{
$template=parent::display();

$template->put_all(array(
'C_HOUR'=>true,
'HOURS'=>$this->get_value()?$this->get_value()->get_hours():'0',
'MINUTES'=>$this->get_value()?$this->get_value()->get_minutes():'00',
'L_AT'=>LangLoader::get_message('at','main'),
'L_H'=>LangLoader::get_message('unit.hour','date-common')
));

return $template;
}




public function retrieve_value()
{
parent::retrieve_value();

$request=AppContext::get_request();
$date=$this->get_value();

if($date!==null)
{
$date->set_minutes($request->get_int($this->get_html_id().'_minutes',0));
$date->set_hours($request->get_int($this->get_html_id().'_hours',0));
}

$this->set_value($date);
}
}
?>
