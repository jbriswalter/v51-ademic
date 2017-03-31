<?php


























class ArgumentNotFoundException extends Exception
{
public function __construct($argument,$args)
{
parent::__construct('argument '.$argument.' was not found in arguments: '.
'("'.implode('", "',$args).'")');
}
}
?>
