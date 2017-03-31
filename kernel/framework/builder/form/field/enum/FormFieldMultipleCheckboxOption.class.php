<?php






























class FormFieldMultipleCheckboxOption
{
private $id;
private $label;

public function __construct($id,$label)
{
$this->id=$id;
$this->label=$label;
}

public function get_id()
{
return $this->id;
}

public function get_label()
{
return $this->label;
}
}

?>
