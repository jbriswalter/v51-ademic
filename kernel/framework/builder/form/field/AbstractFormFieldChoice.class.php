<?php






























abstract class AbstractFormFieldChoice extends AbstractFormField
{



private $options=array();










public function __construct($id,$label,$value,array $options,array $field_options=array(),array $constraints=array())
{
foreach($options as $option)
{
$this->add_option($option);
}
parent::__construct($id,$label,$value,$field_options,$constraints);
$this->set_value($value);
}




protected function get_options()
{
return $this->options;
}





protected function add_option(FormFieldEnumOption $option)
{
$option->set_field($this);
$this->options[]=$option;
}





public function set_options(Array $options)
{
$this->clear_options();
foreach($options as $option)
{
if($option instanceof FormFieldEnumOption)
{
$this->add_option($option);
}
}
}

protected function clear_options()
{
$this->options=array();
}




public function retrieve_value()
{
$request=AppContext::get_request();
if($request->has_parameter($this->get_html_id()))
{
$raw_value=$request->get_value($this->get_html_id());
$option=$this->get_option($raw_value);
if($option!==null)
{
$this->set_value($option);
}
}
}

protected function get_option($raw_option)
{
foreach($this->options as $option)
{
if($option->get_raw_value()==$raw_option)
{
return $option;
}
}
return null;
}

public function get_option_id($raw_option)
{
foreach($this->options as $id=>$option)
{
if($option->get_raw_value()==$raw_option)
{
return $id;
}
}
return null;
}




public function set_value($value)
{
if(is_object($value))
{
parent::set_value($value);
}
else
{
parent::set_value($this->get_option($value));
}
}
}
?>
