<?php
































class PlainCodeHighlighter extends AbstractParser
{
const HIGHLIGHTING_STYLE='color:#BA154C; font-weight:bold;';




public function __construct()
{
parent::__construct();
}




public function parse()
{
$this->content=preg_replace('`\[highlight\](.*)\[/highlight\]`iSU','<span style="'.self::HIGHLIGHTING_STYLE.'">$1</span>',$this->content);
}
}
?>
