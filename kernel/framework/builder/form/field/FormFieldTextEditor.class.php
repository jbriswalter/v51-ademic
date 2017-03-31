<?php






























class FormFieldTextEditor extends AbstractFormField
{
protected $type='text';
protected $size=30;
protected $maxlength=255;
protected static $tpl_src='<input type="{TYPE}" size="{SIZE}" maxlength="{MAX_LENGTH}" name="${escape(NAME)}" id="${escape(HTML_ID)}" value="{VALUE}"
	class="# IF C_READONLY #low-opacity # ENDIF #${escape(CLASS)}" # IF C_PLACEHOLDER # placeholder="{PLACEHOLDER}" # ENDIF # # IF C_PATTERN # pattern="{PATTERN}" # ENDIF # # IF C_DISABLED # disabled="disabled" # ENDIF # # IF C_READONLY # readonly="readonly" # ENDIF #>';














public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-text');
}




public function display()
{
$template=$this->get_template_to_use();

$field=new StringTemplate(self::$tpl_src);

$field->put_all(array(
'SIZE'=>$this->size,
'MAX_LENGTH'=>$this->maxlength,
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'TYPE'=>$this->type,
'VALUE'=>$this->get_value(),
'CLASS'=>$this->get_css_class(),
'C_DISABLED'=>$this->is_disabled(),
'C_READONLY'=>$this->is_readonly(),
'C_PATTERN'=>$this->has_pattern(),
'PATTERN'=>$this->pattern,
'C_PLACEHOLDER'=>$this->has_placeholder(),
'PLACEHOLDER'=>$this->placeholder
));

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$field->render()
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




public function get_value()
{
return substr($this->value,0,$this->maxlength);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}
?>
