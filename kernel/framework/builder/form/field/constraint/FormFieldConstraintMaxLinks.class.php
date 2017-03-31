<?php






























class FormFieldConstraintMaxLinks extends AbstractFormFieldConstraint
{
private $number_links_authorized;
private $has_html_content;






public function __construct($number_links_authorized,$has_html_links=false,$error_message='')
{
$this->number_links_authorized=$number_links_authorized;
$this->has_html_links=$has_html_links;

if(empty($error_message))
{
$error_message=sprintf(LangLoader::get_message('e_l_flood','errors'),$this->number_links_authorized);
}
$this->set_validation_error_message($error_message);
}

public function validate(FormField $field)
{
return $this->exceeding_links($field);
}

public function get_js_validation(FormField $field)
{
return '';
}

public function exceeding_links($field)
{
return TextHelper::check_nbr_links($field->get_value(),$this->number_links_authorized,$this->has_html_links);
}
}

?>
