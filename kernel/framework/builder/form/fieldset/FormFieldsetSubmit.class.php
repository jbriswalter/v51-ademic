<?php






























class FormFieldsetSubmit extends FormFieldsetHTML
{



private $template;



private $buttons;

public function __construct($id,$options=array())
{
if(!isset($options['css_class']))
{
$options['css_class']='fieldset-submit';
}
parent::__construct($id,'',$options);
}
}

?>
