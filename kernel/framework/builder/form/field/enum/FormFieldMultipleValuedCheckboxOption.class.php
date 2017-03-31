<?php






























class FormFieldMultipleValuedCheckboxOption extends FormFieldMultipleCheckboxOption
{
private $value;

public function __construct($id,$label,$value)
{
$this->value=$value;
parent::__construct($id,$label);
}

public function get_value()
{
return $this->value;
}
}

?>
