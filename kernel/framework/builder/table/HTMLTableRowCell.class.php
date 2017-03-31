<?php






























class HTMLTableRowCell extends AbstractHTMLElement
{
private $value;
private $colspan=1;

public function __construct($value,$css_class='',$id='')
{
if($value instanceof HTMLElement)
{
$value=$value->display();
}

$this->value=$value;
$this->css_class=$css_class;
$this->id=$id;
}

public function get_value()
{
return $this->value;
}

public function is_multi_column()
{
return $this->colspan>1;
}

public function get_colspan()
{
return $this->colspan;
}

public function set_colspan($colspan)
{
$this->colspan=$colspan;
}
}
?>
