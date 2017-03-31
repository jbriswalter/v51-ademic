<?php


























define('PATH_TO_ROOT','../../..');

include_once(PATH_TO_ROOT.'/kernel/begin.php');
AppContext::get_session()->no_session_location();
include_once(PATH_TO_ROOT.'/kernel/header_no_display.php');

$page_path_to_root=retrieve(REQUEST,'path_to_root','');
$page_path=retrieve(REQUEST,'page_path','');


$editor=retrieve(REQUEST,'editor',ContentFormattingConfig::load()->get_default_editor());

$contents=TextHelper::htmlentities(retrieve(POST,'contents',''),ENT_COMPAT,'UTF-8');
$contents=TextHelper::htmlspecialchars_decode(stripslashes(TextHelper::html_entity_decode($contents)));

$ftags=retrieve(POST,'ftags',TSTRING_UNCHANGE);
$forbidden_tags=explode(',',$ftags);

$formatting_factory=AppContext::get_content_formatting_service()->create_factory($editor);


$parser=$formatting_factory->get_parser();

$parser->set_content($contents);
$parser->set_path_to_root($page_path_to_root);
$parser->set_page_path($page_path);

if(!empty($forbidden_tags))
{
$parser->set_forbidden_tags($forbidden_tags);
}

$parser->parse();


$second_parser=$formatting_factory->get_second_parser();
$second_parser->set_content($parser->get_content());
$second_parser->set_path_to_root($page_path_to_root);
$second_parser->set_page_path($page_path);

$second_parser->parse();

$contents=$second_parser->get_content();

echo $contents;

include_once(PATH_TO_ROOT.'/kernel/footer_no_display.php');
?>
