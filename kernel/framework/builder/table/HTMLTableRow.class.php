<?php






























class HTMLTableRow extends AbstractHTMLElement
{
private $cells;

public function __construct(array $cells,$css_class='',$id='')
{
$this->cells=$cells;
$this->css_class=$css_class;
$this->id=$id;
}




public function get_cells()
{
return $this->cells;
}
}

?>
