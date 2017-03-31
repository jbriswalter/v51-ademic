<?php
































class ContentFormattingService
{



private $default_factory;





public function get_default_factory()
{
if($this->default_factory===null)
{
$this->default_factory=$this->create_factory($this->get_user_editor());
}
return $this->default_factory;
}






public function create_factory($language='')
{
$editor=$this->get_existing_editor($language);
return ContentFormattingProvidersService::create_factory($editor);
}





public function get_user_editor()
{
return AppContext::get_current_user()->get_editor();
}





public function get_default_parser()
{
return $this->get_default_factory()->get_parser();
}





public function get_default_unparser()
{
return $this->get_default_factory()->get_unparser();
}





public function get_default_second_parser()
{
return $this->get_default_factory()->get_second_parser();
}






public function get_default_editor()
{
return $this->get_default_factory()->get_editor();
}





private function get_existing_editor($editor)
{
if(in_array($editor,self::get_editors_identifier()))
{
return $editor;
}
else
{
return ContentFormattingConfig::load()->get_default_editor();
}
}

public function get_editors_identifier()
{
return array_keys(ContentFormattingProvidersService::get_editors());
}

public function get_available_editors()
{
$available_editors=array();
foreach(ContentFormattingProvidersService::get_editors()as $id=>$provider)
{
$available_editors[$id]=$provider->get_name();
}
return $available_editors;
}




public function uninstall_editor($id_module)
{
$editors=$this->get_available_editors();

if(count($editors)>1)
{
$default_editor=ContentFormattingConfig::load()->get_default_editor();
if($default_editor!==$id_module)
{
PersistenceContext::get_querier()->update(DB_TABLE_MEMBER,array('editor'=>$default_editor),
'WHERE editor=:old_editor',array('old_editor'=>$id_module
));
return null;
}
else
{
return LangLoader::get_message('is_default_editor','editor-common');
}
}
return LangLoader::get_message('last_editor_installed','editor-common');
}






public function get_available_tags()
{
$editor_lang=LangLoader::get('editor-common');
return array(
'b'=>$editor_lang['format_bold'],
'i'=>$editor_lang['format_italic'],
'u'=>$editor_lang['format_underline'],
's'=>$editor_lang['format_strike'],
'title'=>$editor_lang['format_title'],
'style'=>$editor_lang['format_style'],
'url'=>$editor_lang['format_url'],
'img'=>$editor_lang['format_img'],
'quote'=>$editor_lang['format_quote'],
'hide'=>$editor_lang['format_hide'],
'list'=>$editor_lang['format_list'],
'color'=>$editor_lang['format_color'],
'bgcolor'=>$editor_lang['format_bgcolor'],
'font'=>$editor_lang['format_font'],
'size'=>$editor_lang['format_size'],
'align'=>$editor_lang['format_align'],
'float'=>$editor_lang['format_float'],
'sup'=>$editor_lang['format_sup'],
'sub'=>$editor_lang['format_sub'],
'indent'=>$editor_lang['format_indent'],
'pre'=>$editor_lang['format_pre'],
'table'=>$editor_lang['format_table'],
'swf'=>$editor_lang['format_flash'],
'movie'=>$editor_lang['format_movie'],
'sound'=>$editor_lang['format_sound'],
'code'=>$editor_lang['format_code'],
'math'=>$editor_lang['format_math'],
'anchor'=>$editor_lang['format_anchor'],
'acronym'=>$editor_lang['format_acronym'],
'block'=>$editor_lang['format_block'],
'fieldset'=>$editor_lang['format_fieldset'],
'mail'=>$editor_lang['format_mail'],
'line'=>$editor_lang['format_line'],
'wikipedia'=>$editor_lang['format_wikipedia'],
'html'=>$editor_lang['format_html'],
'feed'=>$editor_lang['format_feed'],
'youtube'=>$editor_lang['format_youtube'],
'lightbox'=>$editor_lang['format_lightbox'],
'charmap'=>$editor_lang['format_charmap'],
'insertdatetime'=>$editor_lang['format_insertdatetime']
);
}
}
?>
