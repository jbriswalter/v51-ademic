<?php


























class ConstantTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
public static function is_element(StringInputStream $input)
{
return $input->assert_next('(?:[0-9]+(?:\.[0-9]+)?)|(?:\'[^\']*\')|(?:true)|(?:false)');
}

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$matches=array();
if($input->consume_next('(?P<constant>(?:[0-9]+(?:\.[0-9]+)?)|(?:\'[^\']*\')|(?:true)|(?:false))','',$matches))
{
$constant=$matches['constant'];
$output->write($constant);
}
else
{
throw new TemplateRenderingException('invalid constant variable',$input);
}
}
}
?>
