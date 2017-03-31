<?php






























class FormFieldActionLink extends AbstractFormField
{



private $action;








public function __construct($id,$title,$url,$css_class='',$img='')
{
$this->action=new FormFieldActionLinkElement($title,$url,$css_class,$img);
parent::__construct($id,'','');
}




public function display()
{
$field=new FormFieldActionLinkList($this->id,array($this->action));
return $field->display();
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldActionLinkList.tpl');
}
}
?>
