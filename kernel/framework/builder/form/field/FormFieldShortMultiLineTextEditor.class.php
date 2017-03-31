<?php






























class FormFieldShortMultiLineTextEditor extends FormFieldMultiLineTextEditor
{
private $width=0;
private static $tpl_src='<textarea id="${escape(HTML_ID)}" name="${escape(NAME)}" rows="{ROWS}" cols="{COLS}" class="# IF C_READONLY #low-opacity # ENDIF #${escape(CLASS)}" style="{WIDTH}" # IF C_DISABLED # disabled="disabled" # ENDIF # # IF C_READONLY # readonly="readonly" # ENDIF #>{VALUE}</textarea>';















public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$field_options,$constraints);
}




public function display()
{
$template=$this->get_template_to_use();

$field=new StringTemplate(self::$tpl_src);

$field->put_all(array(
'ROWS'=>$this->rows,
'COLS'=>$this->cols,
'WIDTH'=>($this->width>0)?'width: '.$this->width.'%;':'',
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

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'width':
$this->width=$value;
unset($field_options['width']);
break;
}
}
parent::compute_options($field_options);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldShortMultiLineTextEditor.tpl');
}
}
?>
