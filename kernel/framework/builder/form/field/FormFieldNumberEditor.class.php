<?php






























class FormFieldNumberEditor extends AbstractFormField
{
protected $type='number';
protected $min=null;
protected $max=0;
protected $step=0;
protected $pattern='[0-9]*';
protected static $tpl_src='<input type="{TYPE}"# IF C_MIN # min="{MIN}"# ENDIF ## IF C_MAX # max="{MAX}"# ENDIF ## IF C_STEP # step="{STEP}"# ENDIF # name="${escape(NAME)}" id="${escape(HTML_ID)}" value="{VALUE}"
	class="# IF C_READONLY #low-opacity # ENDIF #${escape(CLASS)}" # IF C_PLACEHOLDER # placeholder="{PLACEHOLDER}" # ENDIF # # IF C_PATTERN # pattern="{PATTERN}" # ENDIF # # IF C_DISABLED # disabled="disabled" # ENDIF # # IF C_READONLY # readonly="readonly" # ENDIF #>';















public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-number');
}




public function display()
{
$template=$this->get_template_to_use();

$field=new StringTemplate(self::$tpl_src);

$field->put_all(array(
'C_MIN'=>$this->min!==null,
'MIN'=>$this->min,
'C_MAX'=>$this->max!=0,
'MAX'=>$this->max,
'C_STEP'=>$this->step>0,
'STEP'=>$this->step,
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'TYPE'=>$this->type,
'VALUE'=>$this->get_value(),
'CLASS'=>$this->get_css_class(),
'C_DISABLED'=>$this->is_disabled(),
'C_READONLY'=>$this->is_readonly(),
'C_DISABLED'=>$this->is_disabled(),
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
case 'min':
$this->min=$value;
unset($field_options['min']);
break;
case 'max':
$this->max=$value;
unset($field_options['max']);
break;
case 'step':
$this->step=$value;
unset($field_options['step']);
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
