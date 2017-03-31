<?php


























class ArrayContentTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
while(!$input->assert_next('\s*\]'))
{
$this->process_key();
$this->process_value();
if($input->consume_next('\s*,\s*'))
{
$output->write(', ');
}
else if(!$input->assert_next('\s*\]\s*'))
{
throw new TemplateRenderingException('invalid array definition, missing "," or "]"',$input);
}
}
}

private function process_key()
{
$matches=array();
if($this->input->consume_next('\s*(?P<key>(?:[0-9]+)|(?:\'[^\']+\'))\s*:\s*','',$matches))
{
$this->output->write($matches['key'].'=>');
}
}

private function process_value()
{
$this->parse_elt(new ExpressionContentTemplateSyntaxElement());
}
}
?>
