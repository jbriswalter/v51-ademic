<?php






























class FormButtonDefaultSubmit extends FormButtonSubmit
{
public function __construct($value='')
{
if(empty($value))
$value=LangLoader::get_message('submit','main');

parent::__construct($value,'submit');
}
}
?>
