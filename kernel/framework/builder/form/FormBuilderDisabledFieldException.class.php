<?php































class FormBuilderDisabledFieldException extends FormBuilderException
{
private $value;

public function __construct($field,$value)
{
parent::__construct('You cannot retrieve the value of the field '.$field.' which is disabled.');
$this->value=$value;
}

public function get_value()
{
return $this->value;
}
}
?>
