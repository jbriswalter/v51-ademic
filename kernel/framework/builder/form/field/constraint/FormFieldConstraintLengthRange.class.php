<?php






























class FormFieldConstraintLengthRange extends AbstractFormFieldConstraint
{
private $error_message;
private $upper_bound;
private $lower_bound;

public function __construct($lower_bound,$upper_bound,$js_message='')
{
if(empty($js_message))
{
$js_message=LangLoader::get_message('form.doesnt_match_length_intervall','status-messages-common');
}
$this->error_message=StringVars::replace_vars($js_message,array('lower_bound'=>$lower_bound,'upper_bound'=>$upper_bound));
$this->set_validation_error_message($this->error_message);
$this->lower_bound=$lower_bound;
$this->upper_bound=$upper_bound;
}

public function validate(FormField $field)
{
$value=strlen($field->get_value());
$is_required=$field->is_required();
if(!empty($value)|| $is_required)
{
return($value>=$this->lower_bound&&$value<=$this->upper_bound);
}
return true;
}

public function get_js_validation(FormField $field)
{
return 'lengthIntervalFormFieldValidator('.TextHelper::to_js_string($field->get_id()).', '.$this->lower_bound.', '.
$this->upper_bound.', '.TextHelper::to_js_string($this->error_message).')';
}
}

?>
