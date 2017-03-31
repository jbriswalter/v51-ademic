<?php


























class CLICacheCommand extends CLIMultipleGoalsCommand
{
private static $name='cache';
private static $goals=array('clear'=>'CLIClearCacheCommand');

public function __construct()
{
parent::__construct(self::$name,self::$goals);
}

public function short_description()
{
return 'manages the phpboost cache';
}
}
?>
