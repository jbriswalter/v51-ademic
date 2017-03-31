<?php






























class FormButtonSubmitImg extends FormButtonSubmit
{
public function __construct($value,$image,$name,$onclick_action='',$data_confirmation='')
{
$new_value='<img src="'.$image.'" alt="'.$value.'" title="'.$value.'" />';
parent::__construct($new_value,$name,$onclick_action,'image',$data_confirmation);
}
}
?>
