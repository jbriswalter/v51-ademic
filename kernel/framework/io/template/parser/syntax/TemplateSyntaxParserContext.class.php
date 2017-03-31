<?php


























class TemplateSyntaxParserContext
{
private $loops=array();

public function enter_loop($name)
{
$this->loops[]=$name;
}

public function exit_loop()
{
array_pop($this->loops);
}

public function is_in_loop($name)
{
return in_array($name,$this->loops);
}

public function loops_scopes()
{
return $this->loops;
}
}

?>
