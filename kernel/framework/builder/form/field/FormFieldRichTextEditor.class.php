<?php






























class FormFieldRichTextEditor extends FormFieldMultiLineTextEditor
{



private $formatter=null;












public function __construct($id,$label,$value,array $field_options=array(),array $constraints=array())
{
$this->formatter=AppContext::get_content_formatting_service()->get_default_factory();
parent::__construct($id,$label,'',$field_options,$constraints);

$this->set_value($value);
}




public function display()
{
$template=parent::display();

$this->assign_editor($template);

return $template;
}

private function assign_editor(Template $template)
{
$editor=$this->formatter->get_editor();
$editor->set_identifier($this->get_html_id());

$template->put_all(array(
'C_EDITOR_ENABLED'=>true,
'EDITOR'=>$editor->display(),
'EDITOR_NAME'=>strtolower($this->formatter->get_name()),
'VALUE'=>$this->get_raw_value(),
'PREVIEW_BUTTON'=>$this->get_preview_button_code()
));
}

private function get_preview_button_code()
{
return '<button type="button" class="small" onclick="XMLHttpRequest_preview(\''.$this->get_html_id().'\');">'.LangLoader::get_message('preview','main').'</button>';
}




public function get_value()
{
return $this->parse_value($this->get_raw_value());
}

private function parse_value($value)
{
$parser=$this->formatter->get_parser();
$parser->set_content($value);
$parser->parse();
return $parser->get_content();
}

private function get_raw_value()
{
return parent::get_value();
}




public function set_value($value)
{
$this->set_raw_value($this->unparse_value($value));
}

private function set_raw_value($value)
{
parent::set_value($value);
}

private function unparse_value($value)
{
$unparser=$this->formatter->get_unparser();
$unparser->set_content($value);
$unparser->parse();
return $unparser->get_content();
}

public function get_onblur_validations()
{
return parent::get_onblur_validations();
}




public function retrieve_value()
{
$request=AppContext::get_request();
if($request->has_parameter($this->get_html_id()))
{
$this->set_raw_value($request->get_string($this->get_html_id()));
}
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'formatter':
if($value instanceof ContentFormattingExtensionPoint)
{
$this->formatter=$value;
unset($field_options['formatter']);
}
else
{
throw new FormBuilderException('The value associated to the formatter attribute must be an instance of the ContentFormattingFactory class');
}
break;
}
}
parent::compute_options($field_options);
}
}
?>
