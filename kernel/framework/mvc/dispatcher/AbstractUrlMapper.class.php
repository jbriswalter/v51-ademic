<?php
































abstract class AbstractUrlMapper implements UrlMapper
{



private $capture_regex;




private $captured_parameters=array();

public function __construct($capture_regex)
{
$this->capture_regex=$capture_regex;
}

public function match($url)
{
$match=preg_match($this->capture_regex,$url,$this->captured_parameters);
if($match===false)
{
throw new MalformedUrlMapperRegexException($this->capture_regex,$url);
}
return $match>0;
}

protected function get_captured_parameters()
{
return $this->captured_parameters;
}
}
?>
