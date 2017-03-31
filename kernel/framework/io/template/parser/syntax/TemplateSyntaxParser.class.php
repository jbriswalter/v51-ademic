<?php



















































class TemplateSyntaxParser implements TemplateParser
{



private $input;



private $output;

public function parse($content)
{
$this->input=new StringInputStream($content);
$this->output=new StringOutputStream();
$this->output->write('<?php '.TemplateSyntaxElement::RESULT.'=\'');
$this->do_parse();
$this->output->write('\'; ?>');
return $this->output->to_string();
}

private function do_parse()
{
$template_element=new TextTemplateSyntaxElement();
$template_element->parse(new TemplateSyntaxParserContext(),$this->input,$this->output);
if($this->input->has_next())
{
throw new TemplateRenderingException('Unknown statement',$this->input);
}
}
}
?>
