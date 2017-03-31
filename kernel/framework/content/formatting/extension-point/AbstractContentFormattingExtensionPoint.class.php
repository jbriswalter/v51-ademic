<?php


























abstract class AbstractContentFormattingExtensionPoint implements ContentFormattingExtensionPoint
{
protected $forbidden_tags=array();
protected $html_auth=array();

public function __construct()
{
$content_formatting_config=ContentFormattingConfig::load();
$this->forbidden_tags=$content_formatting_config->get_forbidden_tags();
$this->html_auth=$content_formatting_config->get_html_tag_auth();
}




public function set_forbidden_tags(array $tags)
{
$this->forbidden_tags=$tags;
}




public function get_forbidden_tags()
{
return $this->forbidden_tags;
}




public function add_forbidden_tag($tag)
{
$this->forbidden_tags[]=$tag;
}




public function add_forbidden_tags(array $tags)
{
foreach($tags as $tag)
{
$this->forbidden_tags[]=$tag;
}
}




public function set_html_auth(array $auth)
{
$this->html_auth=$auth;
}




public function get_html_auth()
{
return $this->html_auth;
}
}
?>
