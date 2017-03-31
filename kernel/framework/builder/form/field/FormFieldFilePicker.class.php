<?php


































class FormFieldFilePicker extends AbstractFormField
{
private $max_size=0;
private static $tpl_src='<input name="max_file_size" value="{MAX_FILE_SIZE}" type="hidden">
		<input type="file" name="${escape(NAME)}" id="${escape(HTML_ID)}" # IF C_DISABLED # disabled="disabled" # ENDIF #>
		<script>
		<!--
        jQuery("#${escape(HTML_ID)}").parents("form:first")[0].enctype = "multipart/form-data";
		-->
		</script>';

public function __construct($id,$label,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,null,$field_options,$constraints);
$this->set_css_form_field_class('form-field-file');
}




function display()
{
$template=$this->get_template_to_use();

$file_field_tpl=new StringTemplate(self::$tpl_src);
$file_field_tpl->put_all(array(
'MAX_FILE_SIZE'=>$this->get_max_file_size(),
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'C_DISABLED'=>$this->is_disabled()
));

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$file_field_tpl->render()
));

return $template;
}

private function get_max_file_size()
{
if($this->max_size>0)
{
return $this->max_size;
}
else
{
return 10000000000;
}
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'max_size':
$this->max_size=$value;
unset($field_options['max_size']);

break;
}
}
parent::compute_options($field_options);
}




public function validate()
{
try
{
$this->retrieve_value();
return true;
}
catch(Exception $ex)
{
if($this->is_required())
{
return false;
}
else
{
return true;
}
}
}




public function retrieve_value()
{
$request=AppContext::get_request();
$file=$request->get_file($this->get_html_id());
$this->set_value($file);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}
?>
