<?php






























class FormFieldConstraintNotEmpty extends AbstractFormFieldConstraint
{
private $error_message;

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.has_to_be_filled','status-messages-common');
}
$this->error_message=$error_message;
}

public function validate(FormField $field)
{
$value=$field->get_value();
$this->set_validation_error_message(StringVars::replace_vars($this->error_message,array('name'=>strtolower($field->get_label()))));

if($value instanceof FormFieldEnumOption){
return $value->get_raw_value()!==null&&$value->get_raw_value()!='';
}

if($value instanceof Date){
return $value->format(Date::FORMAT_ISO_DAY_MONTH_YEAR)!==null&&$value->format(Date::FORMAT_ISO_DAY_MONTH_YEAR)!='';
}

return $value==0 ||($value!==null&&$value!='');
}

public function get_js_validation(FormField $field)
{
return 'notEmptyFormFieldValidator('.TextHelper::to_js_string($field->get_id()).
', '.TextHelper::to_js_string(StringVars::replace_vars($this->error_message,array('name'=>strtolower($field->get_label())))).')';
}
}

?>
