<?php






























interface FormFieldConstraint
{
function validate(FormField $field);

function get_js_validation(FormField $field);

function get_validation_error_message();

function set_validation_error_message($error_message);
}

?>
