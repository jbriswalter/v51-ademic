<?php






























class FormFieldPasswordEditor extends AbstractFormField
{
private $size=30;
private $maxlength=255;
private static $tpl_src='<input type="password" size="{SIZE}" maxlength="{MAX_LENGTH}" name="${escape(NAME)}"
	id="${escape(HTML_ID)}" value="${escape(VALUE)}" class="${escape(CLASS)}" # IF C_DISABLED # disabled="disabled" # ENDIF # />';














public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-password');
}




public function display()
{
$template=$this->get_template_to_use();

$field_tpl=new StringTemplate(self::$tpl_src);

$this->assign_common_template_variables($template);

$field_tpl->put_all(array(
'SIZE'=>$this->size,
'MAX_LENGTH'=>$this->maxlength,
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'VALUE'=>$this->get_value(),
'CLASS'=>$this->get_css_class(),
'C_DISABLED'=>$this->is_disabled()
));

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$field_tpl->render()
));

return $template;
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'size':
$this->size=$value;
unset($field_options['size']);
break;
case 'maxlength':
$this->maxlength=$value;
unset($field_options['maxlength']);
break;
}
}
parent::compute_options($field_options);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}
?>
