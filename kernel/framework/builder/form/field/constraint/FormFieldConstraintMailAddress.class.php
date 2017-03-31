<?php






























class FormFieldConstraintMailAddress extends FormFieldConstraintRegex
{
public function __construct($error_message='')
{
if(empty($error_message))
{
$error_message=LangLoader::get_message('form.doesnt_match_mail_regex','status-messages-common');
}
$this->set_validation_error_message($error_message);
$mail_service=AppContext::get_mail_service();
$regex=$mail_service->get_mail_checking_regex();

parent::__construct(
$regex,
$regex,
$error_message
);
}
}

?>
