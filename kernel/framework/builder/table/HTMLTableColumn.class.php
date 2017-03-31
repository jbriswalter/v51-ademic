<?php






























class HTMLTableColumn extends HTMLTableRowCell
{
private $sortable_parameter='';

public function __construct($name,$sortable_parameter='',$css_class='',$id='')
{
$this->sortable_parameter=$sortable_parameter;
parent::__construct($name,$css_class,$id);
}

public function is_sortable()
{
return!empty($this->sortable_parameter);
}

public function get_sortable_parameter()
{
return $this->sortable_parameter;
}
}

?>
