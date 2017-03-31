<?php






























class FormFieldConstraintUrlExists extends FormFieldConstraintRegex
{
private $error_message;

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.invalid_url','status-messages-common');
}
$this->set_validation_error_message($error_message);
$this->error_message=TextHelper::to_js_string($error_message);
}

public function validate(FormField $field)
{
return $this->url_is_valid($field);
}

public function url_is_valid(FormField $field)
{
$value=$field->get_value();
return!empty($value)?Url::check_url_validity($value):true;
}

public function get_js_validation(FormField $field)
{
return 'UrlExistsValidator('.TextHelper::to_js_string($field->get_id()).', '.$this->error_message.')';
}
}

?>
