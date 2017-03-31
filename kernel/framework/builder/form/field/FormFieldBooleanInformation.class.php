<?php

























class FormFieldBooleanInformation extends FormFieldFree
{



public function __construct($id,$label,$value,array $properties)
{
parent::__construct($id,$label,$value,$properties);
}

public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$template->assign_block_vars('fieldelements',array(
'ELEMENT'=>$this->get_html_value()
));

return $template;
}

protected function get_html_value()
{
return '<i class="'.($this->get_value()?'fa fa-success':'fa fa-error').' fa-2x"></i>';
}
}
?>
