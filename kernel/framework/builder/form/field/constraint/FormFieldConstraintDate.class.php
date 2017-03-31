<?php






























class FormFieldConstraintDate extends FormFieldConstraintRegex
{
private static $regex='`^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$`';

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.doesnt_match_date_regex','status-messages-common');
}
$this->set_validation_error_message($error_message);

parent::__construct(
self::$regex,
self::$regex,
$error_message
);
}

public function get_url_checking_regex()
{
return self::$regex;
}
}

?>
