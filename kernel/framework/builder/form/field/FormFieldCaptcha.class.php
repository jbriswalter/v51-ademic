<?php






























class FormFieldCaptcha extends AbstractFormField
{



private $captcha='';




public function __construct($id='captcha')
{
global $LANG;

$this->captcha=AppContext::get_captcha_service()->get_default_factory();

$field_options=$this->is_enabled()?array('required'=>true):array();
parent::__construct($id,LangLoader::get_message('form.captcha','common'),false,$field_options);
}




public function retrieve_value()
{
$this->captcha->set_html_id($this->get_html_id());
if($this->is_enabled())
{
$this->set_value($this->captcha->is_valid());
}
else
{
$this->set_value(true);
}
}




public function display()
{
$this->captcha->set_html_id($this->get_html_id());

$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->put_all(array(
'C_IS_ENABLED'=>$this->is_enabled(),
'CAPTCHA'=>$this->captcha->display(),
));

return $template;
}




public function validate()
{
$this->retrieve_value();
$result=$this->get_value();
if(!$result)
{
$this->set_validation_error_message(LangLoader::get_message('captcha.validation_error','status-messages-common'));
}
return $result;
}

private function is_enabled()
{
return!AppContext::get_current_user()->check_level(User::MEMBER_LEVEL)&&$this->captcha->is_available();
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldCaptcha.tpl');
}
}
?>
