<?php






























interface FormFieldset extends FormElement
{
function get_id();




function add_field(FormField $field);





function add_element(FormElement $element);





function set_form_id($prefix);

function get_html_id();

function validate();

function disable();

function enable();

function is_disabled();

function get_onsubmit_validations();

function get_validation_error_messages();





function has_field($field_id);




function get_field($field_id);

function get_fields();

function set_template(Template $template);
}

?>
