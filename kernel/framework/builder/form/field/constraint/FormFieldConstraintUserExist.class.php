<?php






























class FormFieldConstraintUserExist extends AbstractFormFieldConstraint
{
private $error_message;

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('user.not_exists','status-messages-common');
}
$this->set_validation_error_message($error_message);
$this->error_message=TextHelper::to_js_string($error_message);
}

public function validate(FormField $field)
{
return $field->get_value()?$this->user_exists($field):true;
}

public function user_exists(FormField $field)
{
if($field->get_value())
{
return PersistenceContext::get_querier()->row_exists(DB_TABLE_MEMBER,'WHERE display_name=:display_name',array(
'display_name'=>$field->get_value()
));
}
return false;
}

public function get_js_validation(FormField $field)
{
return 'UserExistValidator('.TextHelper::to_js_string($field->get_id()).', '.$this->error_message.')';
}
}

?>
