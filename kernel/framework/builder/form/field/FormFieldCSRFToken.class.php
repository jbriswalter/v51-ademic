<?php






























class FormFieldCSRFToken extends FormFieldHidden
{
public function __construct()
{
parent::__construct('token',AppContext::get_session()->get_token());
}
}
?>
