<?php































class StringOutputStream
{
private $stream;
private $index=0;
private $length;

public function __construct($string='')
{
$this->stream=$string;
}

public function write($string)
{
$this->stream.=$string;
}

public function to_string()
{
return $this->stream;
}
}
?>
