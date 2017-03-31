<?php






























interface FormField extends FormElement
{




function get_id();





function get_label();





function set_id($id);





function set_form_id($prefix);





function set_fieldset_id($fieldset_id);




function get_value();





function set_value($value);




function retrieve_value();





function get_html_id();





function is_disabled();




function disable();




function enable();





function validate();




function get_validation_error_message();





function set_validation_error_message($error_message);





function add_constraint(FormFieldConstraint $constraint);




function add_form_constraint(FormConstraint $constraint);





function has_constraints();





function get_js_validations();
}
?>
