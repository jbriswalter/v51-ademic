<?php






























class FormFieldConstraintPasswordStrength extends FormFieldConstraintRegex
{

private static $weak_strength_regex='/^(?=.{6,}).*$/';

private static $medium_strength_regex='/^(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$/';

private static $strong_strength_regex='/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).*$/';

public function __construct($error_message='')
{
switch(SecurityConfig::load()->get_internal_password_strength())
{
case SecurityConfig::PASSWORD_STRENGTH_STRONG:
$regex=self::$strong_strength_regex;
$error_message=empty($error_message)?LangLoader::get_message('form.doesnt_match_strong_password_regex','status-messages-common'):$error_message;
break;

case SecurityConfig::PASSWORD_STRENGTH_MEDIUM:
$regex=self::$medium_strength_regex;
$error_message=empty($error_message)?LangLoader::get_message('form.doesnt_match_medium_password_regex','status-messages-common'):$error_message;
break;

default:
$regex=self::$weak_strength_regex;
break;
}

$this->set_validation_error_message($error_message);

parent::__construct(
$regex,
$regex,
$error_message
);
}

public function get_password_medium_strength_regex()
{
return self::$medium_strength_regex;
}

public function get_password_strong_strength_regex()
{
return self::$strong_strength_regex;
}
}

?>
