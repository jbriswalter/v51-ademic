<?php

































class RemainingStringVarException extends Exception
{
public function __construct($varname)
{
parent::__construct('the string var ":'.$varname.'" has not value');
}
}
?>
