<?php






























class FormButtonAjaxCssImg extends AbstractFormButton
{
public function __construct($label,AjaxRequest $request,$css_class_image='',array $fields,$condition=null)
{
$full_label='';
if(!empty($css_class_image))
{
$full_label='<i class="'.$css_class_image.'" title="'.$label.'"></i>';
}
else
{
$full_label=$label;
}
parent::__construct('button',$full_label,'',$this->build_ajax_request($request,$fields,$condition),'image');
}

private function build_ajax_request(AjaxRequest $request,array $fields,$condition)
{
if(is_array($fields))
{
foreach($fields as $field)
{
$request->add_param($field->get_id(),'$FF(\''.$field->get_id().'\').getValue()');
}
}
if(!empty($condition))
{
return 'if ('.$condition.'){'.$request->render().'}';
}
return $request->render();
}
}
?>
