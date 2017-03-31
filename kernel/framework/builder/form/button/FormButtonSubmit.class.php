<?php






























class FormButtonSubmit extends AbstractFormButton
{
public function __construct($value,$name,$onclick_action='',$css_class='submit',$data_confirmation='')
{
parent::__construct('submit',$value,$name,$onclick_action,$css_class,$data_confirmation);
}

public function has_been_submited()
{
$request=AppContext::get_request();
$button_attribute=$request->get_string($this->get_html_name(),'');
return!empty($button_attribute);
}
}
?>
