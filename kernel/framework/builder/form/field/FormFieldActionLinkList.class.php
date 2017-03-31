<?php






























class FormFieldActionLinkList extends AbstractFormField
{



private $actions;





public function __construct($id,array $actions)
{
$this->actions=$actions;
parent::__construct($id,'','');
}




public function display()
{
$template=$this->get_template_to_use();

foreach($this->actions as $action){
$template->assign_block_vars('action',array(
'C_PICTURE'=>$action->has_css_class()|| $action->has_img(),
'C_IMG'=>$action->has_img(),
'TITLE'=>$action->get_title(),
'CSS_CLASS'=>$action->get_css_class(),
'U_LINK'=>$action->get_url()->rel(),
'U_IMG'=>$action->has_img()?$action->get_img()->rel():'',
));
}

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldActionLinkList.tpl');
}
}
?>
