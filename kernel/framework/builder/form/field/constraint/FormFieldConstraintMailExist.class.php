<?php






























class FormFieldConstraintMailExist extends AbstractFormFieldConstraint
{
private $user_id=0;
private $error_message;

public function __construct($user_id=0,$error_message='')
{
if(!empty($user_id))
{
$this->user_id=$user_id;
}

if(empty($error_message))
{
$error_message=LangLoader::get_message('e_mail_auth','errors');
}
$this->set_validation_error_message($error_message);
$this->error_message=TextHelper::to_js_string($error_message);
}

public function validate(FormField $field)
{
return!$this->email_exists($field);
}

public function email_exists(FormField $field)
{
if(!empty($this->user_id))
{
return PersistenceContext::get_querier()->row_exists(DB_TABLE_MEMBER,'WHERE email=:email AND user_id != :user_id',array(
'email'=>$field->get_value(),
'user_id'=>$this->user_id
));
}
else if($field->get_value())
{
return PersistenceContext::get_querier()->row_exists(DB_TABLE_MEMBER,'WHERE email=:email',array(
'email'=>$field->get_value()
));
}
return false;
}

public function get_js_validation(FormField $field)
{
return 'MailExistValidator('.TextHelper::to_js_string($field->get_id()).', '.$this->error_message.', '.$this->user_id.')';
}
}
?>
