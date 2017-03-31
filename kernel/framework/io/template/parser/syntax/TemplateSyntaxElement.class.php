<?php


























interface TemplateSyntaxElement
{
const RESULT='$_result';
const DATA='$_data';
const FUNCTIONS='$_functions';






function parse(TemplateSyntaxParserContext $context,StringInputStream $input,StringOutputStream $output);
}

?>
