<?php






























class DivHTMLElement extends AbstractHTMLElement
{
private $content;
private $attributs=array();

public function __construct($content,$attributs=array(),$css_class='')
{
$this->content=$content;
$this->attributs=$attributs;
$this->css_class=$css_class;
}

public function display()
{
$tpl=new StringTemplate('<div # IF C_HAS_CSS_CLASSES #class="{CSS_CLASSES}"# ENDIF ## START attributs # {attributs.TYPE}="{attributs.VALUE}"# END attributs #>{CONTENT}</div>');

$tpl->put_all(array(
'C_HAS_CSS_CLASSES'=>$this->has_css_class(),
'CSS_CLASSES'=>$this->get_css_class(),
'CONTENT'=>$this->content
));

foreach($this->attributs as $type=>$value)
{
$tpl->assign_block_vars('attributs',array(
'TYPE'=>$type,
'VALUE'=>$value
));
}

return $tpl->render();
}
}
?>
