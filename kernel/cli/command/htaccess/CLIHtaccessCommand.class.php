<?php


























class CLIHtaccessCommand extends CLIMultipleGoalsCommand
{
private static $name='htaccess';
private static $goals=array('content'=>'CLIHtaccessContentCommand','rewriting'=>'CLIHtaccessRewritingCommand');

public function __construct()
{
parent::__construct(self::$name,self::$goals);
}

public function short_description()
{
return 'manages the htaccess file';
}
}
?>
