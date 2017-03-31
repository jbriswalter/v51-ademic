<?php





























class AbstractFormFieldConstraint implements FormFieldConstraint
{
private $validation_error_message='';

public function validate(FormField $field){}

public function get_js_validation(FormField $field){}

public function get_validation_error_message()
{
return $this->validation_error_message;
}

public function set_validation_error_message($error_message)
{
$this->validation_error_message=$error_message;
}
}

?>
