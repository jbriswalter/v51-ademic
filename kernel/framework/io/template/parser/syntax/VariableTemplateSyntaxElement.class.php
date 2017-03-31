<?php


























class VariableTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public static function is_element(StringInputStream $input)
{
return $input->assert_next('\s*(?:@(?:H\|)?)?(?:[a-z0-9A-Z_]\w+\.)*[a-z0-9A-Z_]\w+\s*');
}

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
$input->consume_next('\s*');
$element=null;
if(LangVarTemplateSyntaxElement::is_element($input))
{
$element=new LangVarTemplateSyntaxElement();
}
elseif(LoopVarTemplateSyntaxElement::is_element($input))
{
$element=new LoopVarTemplateSyntaxElement();
}
elseif(SimpleVarTemplateSyntaxElement::is_element($input))
{
$element=new SimpleVarTemplateSyntaxElement();
}
else
{
throw new TemplateRenderingException('invalid variable',$input);
}
$this->parse_elt($element);
$input->consume_next('\s*');
}
}
?>
