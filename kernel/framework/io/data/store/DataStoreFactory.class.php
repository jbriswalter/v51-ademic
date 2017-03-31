<?php































class DataStoreFactory
{
private static $apc_available=null;
private static $apc_enabled=null;






public static function get_ram_store($id)
{
if(self::is_apc_available()&&self::is_apc_enabled())
{
return new APCDataStore($id);
}
return new RAMDataStore();
}






public static function get_filesystem_store($id)
{
if(self::is_apc_available()&&self::is_apc_enabled())
{
return new APCDataStore($id);
}
return new FileSystemDataStore($id);
}

public static function is_apc_available()
{
if(self::$apc_available===null)
{
if(function_exists('apc_cache_info')&&(extension_loaded('apc')|| extension_loaded('apcu'))&&ini_get('apc.enabled'))
{
self::$apc_available=true;
}
else
{
self::$apc_available=false;
}
}
return self::$apc_available;
}

public static function is_apc_enabled()
{
if(self::$apc_available!==null&&self::$apc_enabled===null)
{
$file=new File(PATH_TO_ROOT.'/cache/apc.php');
if($file->exists())
{
include $file->get_path();
if(isset($enable_apc))
{
return $enable_apc;
}
}
}
return false;
}






public static function set_apc_enabled($enabled)
{
$file=new File(PATH_TO_ROOT.'/cache/apc.php');
$file->write('<?php $enable_apc = '.($enabled?'true':'false').';');
$file->close();
}
}
?>
