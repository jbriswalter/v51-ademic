<?php






























class FormFieldRadioChoice extends AbstractFormFieldChoice
{









public function __construct($id,$label,$value,$options,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$options,$field_options,$constraints);
$this->set_css_form_field_class('form-field-radio-button');
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$has_value=false;
foreach($this->get_options()as $option)
{
$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$option->display()->render(),
));
if($option->is_active())
$has_value=true;
}

$template->put_all(array(
'C_HIDE_FOR_ATTRIBUTE'=>true,
'C_REQUIRED_AND_HAS_VALUE'=>$this->is_required()&&$has_value
));

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}

protected function get_js_specialization_code()
{
return 'field.getValue = function()
		{
			return (jQuery("input[name='.$this->get_html_id().']:checked").length > 0);
		}
		'.($this->is_required()?'
		jQuery("#'.$this->get_html_id().'_field input[type=radio]").click(function() {
			HTMLForms.get("'.$this->get_form_id().'").getField("'.$this->get_id().'").enableValidationMessage();
			HTMLForms.get("'.$this->get_form_id().'").getField("'.$this->get_id().'").liveValidate();
		});':'');
}
}
?>
