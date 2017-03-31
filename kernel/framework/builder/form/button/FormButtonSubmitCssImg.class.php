<?php






























class FormButtonSubmitCssImg extends FormButtonSubmit
{
public function __construct($value,$css_class_image,$name,$onclick_action='',$data_confirmation='')
{
$new_value='<i class="'.$css_class_image.'" title="'.$value.'"></i>';
parent::__construct($new_value,$name,$onclick_action,'image',$data_confirmation);
}
}
?>
