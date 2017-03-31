<?php


























abstract class AbstractTemplateSyntaxElement implements TemplateSyntaxElement
{



protected $context;



protected $input;



protected $output;

protected function register(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->context=$context;
$this->input=$input;
$this->output=$output;
}

protected function parse_elt(TemplateSyntaxElement $element)
{
$element->parse($this->context,$this->input,$this->output);
}
}

?>
