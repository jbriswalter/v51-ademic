<?php































abstract class ContentEditor
{
protected $template=null;
protected $forbidden_tags=array();
protected $identifier='contents';

public function __construct()
{
$content_formatting_config=ContentFormattingConfig::load();
$this->forbidden_tags=$content_formatting_config->get_forbidden_tags();
}





public function set_forbidden_tags($forbidden_tags)
{
$this->forbidden_tags=$forbidden_tags;
}





public function get_forbidden_tags()
{
return $this->forbidden_tags;
}





public function set_identifier($identifier)
{
$this->identifier=$identifier;
}





public function set_template($template)
{
$this->template=$template;
}





public function get_template()
{
return $this->template;
}
}
?>
