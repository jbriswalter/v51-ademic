<?php


























class SimpleVarTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public static function is_element(StringInputStream $input)
{
return $input->assert_next('\w+');
}

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$matches=array();
if($input->consume_next('(?P<var>\w+)','',$matches))
{
$varname=$matches['var'];
$output->write(TemplateSyntaxElement::DATA.'->get(\''.$varname.'\')');
}
else
{
throw new TemplateRenderingException('invalid simple variable name',$input);
}
}
}
?>
