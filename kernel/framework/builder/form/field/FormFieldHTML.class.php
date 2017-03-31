<?php



































class FormFieldHTML extends AbstractFormField
{
public function __construct($id,$value)
{
parent::__construct($id,'',$value,array(),array());
}




public function display()
{
$template=$this->get_template_to_use();

$template->put_all(array(
'HTML'=>$this->get_value()
));

return $template;
}

protected function get_default_template()
{
return new StringTemplate('{HTML}');
}
}
?>
