<?php






























class Debug
{
const STRICT_MODE='strict_mode';
const DISPLAY_DATABASE_QUERY='display_database_query';

private static $enabled=true;
private static $options=array();
private static $html_output=true;

public static function __static()
{
$file=new File(PATH_TO_ROOT.'/cache/debug.php');
if($file->exists())
{
include $file->get_path();
self::$enabled=$enabled;
self::$options=$options;
}
}





public static function enabled_current_script_debug(array $options=array())
{
self::$enabled=true;
self::$options=$options;
}











public static function enabled_debug_mode(array $options=array())
{
self::$enabled=true;
self::$options=$options;
self::write_debug_file();
}




public static function disable_debug_mode()
{
self::$enabled=false;
self::$options=array();
self::write_debug_file();
}

private static function write_debug_file()
{
$file=new File(PATH_TO_ROOT.'/cache/debug.php');
$file->write('<?php '."\n".
'$enabled = '.var_export(self::$enabled,true).';'."\n".
'$options = '.var_export(self::$options,true).';'."\n".
' ?>');
$file->close();
}





public static function is_debug_mode_enabled()
{
return self::$enabled;
}






public static function is_strict_mode_enabled()
{
return self::is_debug_mode_enabled()&&self::get_option(self::STRICT_MODE,false);
}






public static function is_display_database_query_enabled()
{
return self::is_debug_mode_enabled()&&self::get_option(self::DISPLAY_DATABASE_QUERY,false);
}

private static function get_option($key,$default)
{
if(array_key_exists($key,self::$options))
{
return self::$options[$key];
}
return $default;
}





public static function is_output_html()
{
return self::$html_output;
}




public static function set_plain_text_output_mode()
{
self::$html_output=false;
}





public static function fatal($exception)
{
if(!self::$html_output)
{
$message=get_class($exception).': '.$exception->getMessage();
if(empty($message))
{
$message.='An exception has been thrown';
}
echo $message."\n--------------------------------------------------------------------------------\n";
Debug::print_stacktrace(0,$exception);
}
else
{
$printer=new HTTPFatalExceptionPrinter($exception);
echo $printer->render();
}
exit;
}





public static function stop($object=null)
{
if($object!=null)
{
Debug::dump($object);
}
self::print_stacktrace();
exit;
}





public static function get_exception_context()
{
return new Exception();
}





public static function get_stacktrace()
{
$stack=self::get_exception_context()->getTrace();
unset($stack[0]);
return array_merge($stack,array());
}




public static function get_stacktrace_as_string($start_trace_index=0,$exception=null)
{
$string_stacktrace='';
$stacktrace=null;
if($exception===null)
{
$stacktrace=self::get_stacktrace();
}
else
{
$start_trace_index--;
$stacktrace=$exception->getTrace();
}
$stacktrace_size=count($stacktrace);
$start_trace_index=$start_trace_index+1;
for($i=$start_trace_index;$i<$stacktrace_size;$i++)
{
$trace=&$stacktrace[$i];
$string_stacktrace.='['.($i-$start_trace_index).'] '.ExceptionUtils::get_file($trace).
':'.ExceptionUtils::get_line($trace).' - '.ExceptionUtils::get_method_prototype($trace)."\n";
}

$string_stacktrace.='[URL] '.$_SERVER['REQUEST_URI'];

if(self::is_output_html())
{
$string_stacktrace=str_replace("\n",'<br />',$string_stacktrace);
}
return $string_stacktrace;
}




public static function print_stacktrace($start_trace_index=0,Exception $exception=null)
{
if($exception!==null)
{
$start_trace_index--;
}
echo self::get_stacktrace_as_string($start_trace_index+1,$exception);
}





public static function dump($object)
{
if(self::$html_output)
{
echo '<pre>';print_r($object);echo '</pre>';
}
else
{
echo "\n";print_r($object);echo "\n";
}
}
}
?>
