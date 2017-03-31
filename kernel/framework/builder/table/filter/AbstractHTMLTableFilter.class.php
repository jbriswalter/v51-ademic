<?php






























abstract class AbstractHTMLTableFilter implements HTMLTableFilter
{
private $id;



private $field;

public function __construct($id,FormField $field)
{
$this->id=$id;
$this->field=$field;
}

public function get_id()
{
return $this->id;
}

public function get_form_field()
{
return $this->field;
}

protected function set_value($value)
{
$this->field->set_value($value);
}

protected function get_value()
{
return $this->field->get_value();
}
}

?>
