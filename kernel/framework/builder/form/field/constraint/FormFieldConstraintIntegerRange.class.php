<?php






























class FormFieldConstraintIntegerRange extends AbstractFormFieldConstraint
{
private $error_message;
private $upper_bound;
private $lower_bound;

public function __construct($lower_bound,$upper_bound,$js_message='')
{
if(empty($js_message))
{
$js_message=LangLoader::get_message('form.doesnt_match_integer_intervall','status-messages-common');
}
$this->error_message=StringVars::replace_vars($js_message,array('lower_bound'=>$lower_bound,'upper_bound'=>$upper_bound));
$this->set_validation_error_message($this->error_message);
$this->lower_bound=$lower_bound;
$this->upper_bound=$upper_bound;
}

public function validate(FormField $field)
{
$is_required=$field->is_required();
$value=$field->get_value();
if(!is_numeric($value))
{
return false;
}
$value=(int)$value;
if(!empty($value)|| $is_required)
{
return($value>=$this->lower_bound&&$value<=$this->upper_bound);
}
return true;
}

public function get_js_validation(FormField $field)
{
return 'integerIntervalFormFieldValidator('.TextHelper::to_js_string($field->get_id()).', 
		'.(int)$this->lower_bound.', '.(int)$this->upper_bound.', '.TextHelper::to_js_string($this->error_message).')';
}
}

?>
