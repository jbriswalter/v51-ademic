<?php


































class FormFieldMultipleFilePicker extends AbstractFormField
{
private $max_size=0;
private $max_input=5;

public function __construct($id,$label,array $field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,null,$field_options,$constraints);
}




function display()
{
$template=$this->get_template_to_use();

$tpl=new FileTemplate('framework/builder/form/FormFieldMultipleFilePicker.tpl');
$tpl->put_all(array(
'MAX_FILE_SIZE'=>$this->get_max_file_size(),
'NAME'=>$this->get_html_id(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'C_DISABLED'=>$this->is_disabled(),
'MAX_INPUT'=>$this->max_input
));

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$tpl->render()
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
case 'max_input':
$this->max_input=$value;
unset($field_options['max_input']);
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
$array_file=array();
for($i=1;$i<=$this->max_input;$i++)
{
$id=$this->get_html_id().'_'.$i;
if(isset($_FILES[$id]))
{
$array_file[]=$request->get_file($id);
}
}
$this->set_value($array_file);
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormField.tpl');
}
}
?>
