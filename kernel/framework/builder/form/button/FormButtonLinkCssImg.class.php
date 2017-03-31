<?php






























class FormButtonLinkCssImg extends AbstractFormButton
{
public function __construct($label,$link,$css_class_image='')
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
parent::__construct('button',$full_label,'','window.location='.TextHelper::to_js_string(Url::to_rel($link)),'image');
}
}
?>
