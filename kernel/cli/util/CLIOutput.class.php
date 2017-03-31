<?php


























class CLIOutput
{
private static $err_output;

public static function __static()
{
self::$err_output=new File('php://stderr');
}

public static function write($message)
{
echo $message;
}

public static function writeln($message='',$nbLinesBreak=1)
{
$break='';
for($i=0;$i<$nbLinesBreak;$i++)
{
$break.="\n";
}
self::write($message.$break);
}





public static function err($message)
{
self::$err_output->append($message."\n");
}
}
?>
