<?php






























class FormFieldConstraintPictureFile extends FormFieldConstraintRegex
{
private static $regex='/\.(png|gif|jpg|jpeg|tiff|ico|svg)$/i';

public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.doesnt_match_picture_file_regex','status-messages-common');
}
$this->set_validation_error_message($error_message);

parent::__construct(
self::$regex,
self::$regex,
$error_message
);
}
}

?>
