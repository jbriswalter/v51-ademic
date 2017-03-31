<?php


























class UnexistingHTTPParameterException extends Exception
{
public function __construct($varname)
{
parent::__construct('The "'.$varname.'" parameter does not exists in the http request');
}
}
?>
