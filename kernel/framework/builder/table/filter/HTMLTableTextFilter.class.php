<?php






























abstract class HTMLTableTextFilter extends AbstractHTMLTableFilter
{
private $match_regex;

public function __construct($name,$label,$match_regex=null)
{
$this->match_regex=$match_regex;
$input_text=new FormFieldTextEditor($name,$label,'');
parent::__construct($name,$input_text);
}




public function is_value_allowed($value)
{
if(empty($this->match_regex)|| preg_match($this->match_regex,$value))
{
$this->set_value($value);
return true;
}
return false;
}
}

?>
