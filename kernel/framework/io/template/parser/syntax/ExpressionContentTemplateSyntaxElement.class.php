<?php


























class ExpressionContentTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
private $ended=false;

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
$this->do_parse();
}

private function do_parse()
{
$element=null;
if(ArrayTemplateSyntaxElement::is_element($this->input))
{
$element=new ArrayTemplateSyntaxElement();
}
elseif(FunctionTemplateSyntaxElement::is_element($this->input))
{
$element=new FunctionTemplateSyntaxElement();
}
elseif(ConstantTemplateSyntaxElement::is_element($this->input))
{
$element=new ConstantTemplateSyntaxElement();
}
elseif(VariableTemplateSyntaxElement::is_element($this->input))
{
$element=new VariableTemplateSyntaxElement();
}
else
{
throw new TemplateRenderingException('bad expression statement',$this->input);
}
$this->parse_elt($element);
}
}
?>
