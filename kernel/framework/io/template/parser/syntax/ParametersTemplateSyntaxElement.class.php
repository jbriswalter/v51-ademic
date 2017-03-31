<?php


























class ParametersTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
while(!$input->assert_next('\s*\)\s*'))
{
$this->parse_elt(new ExpressionContentTemplateSyntaxElement());
if($input->consume_next('\s*,\s*'))
{
$output->write(', ');
}
else if(!$input->assert_next('\s*\)\s*'))
{
throw new TemplateRenderingException('invalid function call, missing "," or ")"',$input);
}
}
}
}
?>
