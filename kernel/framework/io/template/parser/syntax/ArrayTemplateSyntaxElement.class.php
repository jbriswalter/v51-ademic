<?php


























class ArrayTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public static function is_element(StringInputStream $input)
{
return $input->assert_next('\s*\[');
}

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
if($input->consume_next('\s*\['))
{
$output->write('array(');
$this->content();
$this->end();
}
else
{
throw new TemplateRenderingException('invalid array',$input);
}
}

private function content()
{
$this->parse_elt(new ArrayContentTemplateSyntaxElement());
}

private function end()
{
if(!$this->input->consume_next('\]\s*'))
{
throw new TemplateRenderingException('invalid array: missing enclosing parenthesis',$this->input);
}
$this->output->write(')');
}
}
?>
