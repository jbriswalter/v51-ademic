<?php


























class CLICommandsList implements CLICommands
{
private $commands=array();

public function __construct(array $commands)
{
$this->commands=$commands;
}

public function get_commands()
{
return array_keys($this->commands);
}

public function get_short_description($cmd)
{
$command=$this->get_command($cmd);
return $command->short_description();
}

public function help($cmd,array $args)
{
$command=$this->get_command($cmd);
$command->help($args);
}

public function execute($cmd,array $args)
{
$command=$this->get_command($cmd);
$command->execute($args);
}





private function get_command($command)
{
if(!array_key_exists($command,$this->commands))
{
throw new CommandNotFoundException($command);
}
return new $this->commands[$command]();
}
}
?>
