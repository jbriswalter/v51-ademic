<?php


























interface ContentFormattingExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='content_formatting';

function get_name();





function get_parser();





function get_unparser();





function get_second_parser();





function get_editor();





function set_forbidden_tags(array $tags);





public function get_forbidden_tags();





function add_forbidden_tag($tag);

function add_forbidden_tags(array $tags);

function set_html_auth(array $array_auth);

function get_html_auth();
}
?>
