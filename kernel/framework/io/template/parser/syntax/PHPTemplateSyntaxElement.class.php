<?php


























class PHPTemplateSyntaxElement extends AbstractTemplateSyntaxElement
{
private $ended=false;
private $escaped=false;

public function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output)
{
$this->register($context,$input,$output);
$this->do_parse();
}

private function do_parse()
{
$matches=array();
if($this->input->consume_next('\?php\s*(?P<php>[^\s].*[^\*])\s*\?>','Us',$matches))
{
$this->process_php($matches['php']);
}
else
{
throw new TemplateRenderingException('Missing php code ends: "?>"',$this->input);
}
}

private function process_php($php)
{
$this->output->write('\';$_ob_length=ob_get_length();');
$this->output->write($php);
$this->output->write('if(ob_get_length()>$_ob_length){$_content=ob_get_clean();'.TemplateSyntaxElement::RESULT.
'.=substr($_content, $_ob_length);echo substr($_content, 0, $_ob_length);}');
$this->output->write(TemplateSyntaxElement::RESULT.'.=\'');
}
}
?>
