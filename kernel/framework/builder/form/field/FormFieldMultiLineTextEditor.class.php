<?php






























class FormFieldMultiLineTextEditor extends AbstractFormField
{
protected $rows=5;
protected $cols=40;














public function __construct($id,$label,$value,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);
$this->assign_textarea_template_variables($template);

return $template;
}

private function assign_textarea_template_variables(Template $template)
{
$template->put_all(array(
'ROWS'=>$this->rows,
'COLS'=>$this->cols
));
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'rows':
$this->rows=$value;
unset($field_options['rows']);
break;
case 'cols':
$this->cols=$value;
unset($field_options['cols']);
break;
}
}
parent::compute_options($field_options);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldMultiLineTextEditor.tpl');
}
}
?>
