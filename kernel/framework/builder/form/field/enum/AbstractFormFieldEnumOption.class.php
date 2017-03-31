<?php






























abstract class AbstractFormFieldEnumOption implements FormFieldEnumOption
{
private $label='';

private $raw_value='';
private $active;
private $disable=false;




private $field;

public function __construct($label,$raw_value,$field_choice_options=array())
{
$this->set_label($label);
$this->set_raw_value($raw_value);
$this->compute_options($field_choice_options);
}




public function get_label()
{
return $this->label;
}




public function set_label($label)
{
$this->label=$label;
}




public function get_raw_value()
{
return $this->raw_value;
}




public function set_raw_value($value)
{
$this->raw_value=$value;
}




public function get_field()
{
return $this->field;
}

public function set_field(FormField $field)
{
$this->field=$field;
}

public function set_active($value=true)
{
$this->active=$value;
}

public function is_active()
{
if(isset($this->active))
{
return $this->active;
}
else
{
return $this->get_field()->get_value()===$this;
}
}

public function set_disable($value=false)
{
$this->disable=$value;
}

protected function is_disable()
{
return $this->disable;
}

protected function get_field_id()
{
return $this->get_field()->get_html_id();
}

protected function get_option_id()
{
return $this->get_field()->get_html_id().$this->get_field()->get_option_id($this->raw_value);
}




public function get_option($raw_value)
{
if($this->get_raw_value()==$raw_value)
{
return $this;
}
else
{
return null;
}
}

protected function compute_options(array&$field_choice_options)
{
foreach($field_choice_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'disable':
$this->set_disable($value);
unset($field_choice_options['disable']);
break;
default:
throw new FormBuilderException('The class '.get_class($this).' hasn\'t the '.$attribute.' attribute');
}
}
}
}

?>
