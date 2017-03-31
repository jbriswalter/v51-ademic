<?php





























class Path
{
private static $fs_root_directory;




public static function phpboost_path()
{
if(empty(self::$fs_root_directory))
{
self::$fs_root_directory=preg_replace('`^(.+)/kernel/framework/util/?$`i','$1',
self::real_path(dirname(__FILE__)));
}
return self::$fs_root_directory;
}







public static function get_package($class_file)
{
return ltrim(self::get_path_from_root(dirname($class_file)),'/');
}






public static function get_path_from_root($path)
{
$path_from_root=trim(str_replace(self::phpboost_path(),'',self::real_path($path)),'/');
if(!empty($path_from_root))
{
return '/'.$path_from_root;
}
return '';
}






public static function get_classname($class_file)
{
$class_file=self::uniformize_path($class_file);
if(($i=strpos($class_file,'.'))!==false)
{
$class_file=substr($class_file,0,$i);
}
if(($i=strrpos($class_file,'/'))!==false)
{
$class_file=substr($class_file,$i+1);
}
return $class_file;
}







public static function real_path($path)
{
return self::uniformize_path(realpath($path));
}






public static function uniformize_path($path)
{
return str_replace('\\','/',$path);
}
}
?>
