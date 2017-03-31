<?php






























class FormButtonLink extends AbstractFormButton
{
public function __construct($label,$link,$img='')
{
$full_label='';
if(!empty($img))
{
$full_label='<img src="'.$img.'" alt="'.$label.'" title="'.$label.'" />';
}
else
{
$full_label=$label;
}
parent::__construct('button',$full_label,'','window.location='.TextHelper::to_js_string(Url::to_rel($link)),!empty($img)?'image':'');
}
}
?>
