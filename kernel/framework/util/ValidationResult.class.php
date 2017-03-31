<?php






























class ValidationResult
{



private $title;




private $errors=array();

public function __construct($title='Validation result')
{
$this->title=$title;
}

public function get_title()
{
return $this->title;
}





public function add_error($error_msg)
{
$this->errors[]=$error_msg;
}





public function get_errors_messages()
{
return $this->errors;
}





public function has_errors()
{
return!empty($this->errors);
}
}
?>
