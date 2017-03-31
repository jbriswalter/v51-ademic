<?php


























class CommandNotFoundException extends Exception
{
public function __construct($command)
{
parent::__construct('command '.$command.' does not exists in current commands list');
}
}
?>
