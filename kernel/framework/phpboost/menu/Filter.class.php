<?php
































abstract class Filter
{
protected $pattern;





public function __construct($pattern)
{
$this->pattern=$pattern;
}

function get_pattern()
{
return $this->pattern;
}

function set_pattern($pattern)
{
return $this->pattern=$pattern;
}

abstract function match();
}
?>
