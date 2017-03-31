<?php






























class FormFieldConstraintAntiFlood extends AbstractFormFieldConstraint
{
private $content_management_config;
private $last_posted_timestamp;
private $anti_flood_duration;






public function __construct($last_posted_timestamp,$anti_flood_duration='',$error_message='')
{
$this->content_management_config=ContentManagementConfig::load();

$this->last_posted_timestamp=$last_posted_timestamp;

if(empty($anti_flood_duration))
{
$anti_flood_duration=$this->content_management_config->get_anti_flood_duration();
}
$this->anti_flood_duration=$anti_flood_duration;

if(empty($error_message))
{
$error_message=LangLoader::get_message('e_flood','errors');
}

$this->set_validation_error_message($error_message);
}

public function validate(FormField $field)
{
if($this->content_management_config->is_anti_flood_enabled())
{
return!$this->flooding($field);
}
return true;
}

public function get_js_validation(FormField $field)
{
return '';
}

public function flooding($field)
{
if($this->last_posted_timestamp>=(time()-$this->anti_flood_duration))
{
return true;
}
return false;
}
}
?>
