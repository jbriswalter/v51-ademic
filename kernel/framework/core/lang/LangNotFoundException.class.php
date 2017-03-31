<?php






























class LangNotFoundException extends Exception
{
public function __construct($folder,$filename)
{
$folder=trim($folder,'/');
if(empty($folder))
{
$folder='lang';
}
parent::__construct('Unable to find language file "'.$filename.'" in: "/'.$folder.'"');
}
}
?>
