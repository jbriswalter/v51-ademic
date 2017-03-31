<?php






























class FormFieldsetHTML extends AbstractFormFieldset
{
private $title='';





public function __construct($id,$name='',$options=array())
{
parent::__construct($id,$options);
$this->title=$name;
}






public function display()
{
$template=$this->get_template_to_use();

$template->put_all(array(
'C_TITLE'=>!empty($this->title),
'L_TITLE'=>$this->title
));

$this->assign_template_fields($template);

return $template;
}




public function set_title($title)
{
$this->title=$title;
}




public function get_title()
{
return $this->title;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldset.tpl');
}
}

?>
