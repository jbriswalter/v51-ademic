<?php






























class FormButtonReset implements FormButton
{
private $value;

public function __construct($value='')
{
$this->value=$value;

if(empty($value))
$this->value=LangLoader::get_message('reset','main');
}




public function display()
{
$template=new StringTemplate('<button type="reset" value="true">{L_RESET}</button>');

$template->put_all(array(
'L_RESET'=>$this->value
));

return $template;
}

public function set_form_id($form_id){}
}
?>
