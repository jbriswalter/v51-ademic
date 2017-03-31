<?php


























class ParameterTypeMismatchException extends Exception
{
public function __construct($varname,$type,$value)
{
parent::__construct('The "'.$varname.'" parameter is not of type \''.$type.'\''.
"\n".$value);
}
}
?>
