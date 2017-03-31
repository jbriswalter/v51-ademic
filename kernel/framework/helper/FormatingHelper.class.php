<?php






























class FormatingHelper
{
const NO_EDITOR_UNPARSE=false;








public static function strparse($content,$forbidden_tags=array(),$addslashes=true)
{
$parser=AppContext::get_content_formatting_service()->get_default_parser();


$parser->set_content($content);


if(!empty($forbidden_tags))
{
$parser->set_forbidden_tags($forbidden_tags);
}

$parser->parse();


$result=$parser->get_content();
if($addslashes)
{
$result=addslashes($result);
}
return $result;
}







public static function unparse($content)
{
$parser=AppContext::get_content_formatting_service()->get_default_unparser();
$parser->set_content(stripslashes($content));
$parser->parse();

return $parser->get_content();
}







public static function second_parse($content)
{
$parser=AppContext::get_content_formatting_service()->get_default_second_parser();
$parser->set_content($content);
$parser->parse();

return $parser->get_content();
}







public static function second_parse_url($url)
{
$Url=new Url($url);
return $Url->absolute();
}
}
?>
