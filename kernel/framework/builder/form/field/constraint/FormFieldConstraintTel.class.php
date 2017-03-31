<?php






























class FormFieldConstraintTel extends FormFieldConstraintRegex
{
private static $regex='/^(\+[0-9]+( |-)?|0)?[0-9]( |-)?([0-9]{2}( |-)?){4}$/';
private static $js_regex='^(\\\+[0-9]+( |-)?|0)?[0-9]( |-)?([0-9]{2}( |-)?){4}$';

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.doesnt_match_tel_regex','status-messages-common');
}
$this->set_validation_error_message($error_message);

parent::__construct(
self::$regex,
TextHelper::to_js_string(self::$js_regex),
$error_message
);
}
}

?>
