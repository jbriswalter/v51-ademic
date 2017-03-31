<?php






























class FormFieldConstraintUrl extends FormFieldConstraintRegex
{
private static $regex='`^((https?|ftp)://[^ ]+)|(/[^ ]+)$`';

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.doesnt_match_url_regex','status-messages-common');
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
