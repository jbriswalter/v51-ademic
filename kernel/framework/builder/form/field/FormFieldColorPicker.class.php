<?php





























class FormFieldColorPicker extends AbstractFormField
{
private static $tpl_src='<input type="color" name="${escape(NAME)}" id="${escape(HTML_ID)}" value="${escape(VALUE)}" pattern="#[A-Fa-f0-9]{6}" placeholder="#000000" # IF C_DISABLED # disabled="disabled" # ENDIF # # IF C_HIDDEN # style="display:none;" # ENDIF #>';

public function __construct($id,$label,$value,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_css_form_field_class('form-field-color');
}




function display()
{
$template=$this->get_template_to_use();

$field=new StringTemplate(self::$tpl_src);

$field->put_all(array(
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'VALUE'=>$this->get_value(),
'CLASS'=>$this->get_css_class(),
'C_DISABLED'=>$this->is_disabled(),
'C_READONLY'=>$this->is_readonly()
));

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$field->render()
));

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}
?>
