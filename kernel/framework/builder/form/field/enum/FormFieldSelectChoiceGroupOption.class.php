<?php






























class FormFieldSelectChoiceGroupOption extends AbstractFormFieldEnumOption
{
private $options=array();





public function __construct($label,array $options)
{
parent::__construct($label,'');
$this->set_options($options);
}

public function set_field(FormField $field)
{
parent::set_field($field);
foreach($this->options as $option)
{
$option->set_field($field);
}
}

public function display()
{
$tpl_src='<optgroup label="${escape(LABEL)}"> # START options # # INCLUDE options.OPTION # # END options # </optgroup>';

$tpl=new StringTemplate($tpl_src);
$tpl->put_all(array(
'LABEL'=>$this->get_label()
));

foreach($this->options as $option)
{
$tpl->assign_block_vars('options',array(),array(
'OPTION'=>$option->display()
));
}

return $tpl;
}




public function get_option($raw_value)
{
foreach($this->options as $option)
{
if($option->get_option($raw_value))
{
return $option;
}
}
return null;
}

public function set_options(Array $options)
{
$this->options=$options;
}

public function get_options()
{
return $this->options;
}
}
?>
