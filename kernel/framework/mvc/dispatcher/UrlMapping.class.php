<?php



























class UrlMapping
{
private $to;
private $from;
private $options;




public function __construct($from,$to,$options='L,QSA')
{
$this->to=$to;
$this->from=$from;
$this->options=$options;
}




public function from()
{
return $this->from;
}




public function to()
{
return $this->to;
}




public function options()
{
return $this->options;
}
}
?>
