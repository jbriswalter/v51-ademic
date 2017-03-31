<?php


































class FormFieldSimpleSelectChoice extends AbstractFormFieldChoice
{
private $default_value;










public function __construct($id,$label,$value,array $options,array $field_options=array(),array $constraints=array())
{
$this->default_value=$value;
parent::__construct($id,$label,$value,$options,$field_options,$constraints);
$this->set_css_form_field_class('form-field-select');
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$this->get_html_code()->render(),
));

return $template;
}

private function get_html_code()
{
$tpl_src='<select name="${escape(NAME)}" id="${escape(HTML_ID)}" class="${escape(CSS_CLASS)}" # IF C_DISABLED # disabled="disabled" # ENDIF # >'.
'# START options # # INCLUDE options.OPTION # # END options #'.
'</select>';

$tpl=new StringTemplate($tpl_src);

$tpl->put_all(array(
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'CSS_CLASS'=>$this->get_css_class(),
'C_DISABLED'=>$this->is_disabled()
));

foreach($this->get_options()as $option)
{
$tpl->assign_block_vars('options',array(),array(
'OPTION'=>$option->display()
));
}

return $tpl;
}

protected function get_option($raw_value)
{
foreach($this->get_options()as $option)
{
$result=$option->get_option($raw_value);
if($result!==null)
{
return $result;
}
}
return null;
}

protected function assign_common_template_variables(Template $template)
{
parent::assign_common_template_variables($template);
$template->put('C_REQUIRED_AND_HAS_VALUE',$this->is_required()&&$this->default_value);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}

protected function get_js_specialization_code()
{
return($this->is_required()?'
		jQuery("#'.$this->get_html_id().'_field").change(function() {
			HTMLForms.get("'.$this->get_form_id().'").getField("'.$this->get_id().'").enableValidationMessage();
			HTMLForms.get("'.$this->get_form_id().'").getField("'.$this->get_id().'").liveValidate();
		});':'');
}
}
?>
