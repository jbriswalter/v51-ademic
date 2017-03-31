<?php








































class CacheManager
{



private static $ram_cache=null;




private static $fs_cache=null;




private static function get_ram_cache()
{
if(self::$ram_cache==null)
{
self::$ram_cache=new RAMDataStore();
}
return self::$ram_cache;
}




private static function get_fs_cache()
{
if(self::$fs_cache===null)
{
self::$fs_cache=DataStoreFactory::get_filesystem_store(__CLASS__);
}
return self::$fs_cache;
}









public static function load($classname,$module_name,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);
try
{
return self::try_load($classname,$module_name,$entry_name);
}
catch(CacheDataNotFoundException $ex)
{

$data=new $classname();
$data->synchronize();
self::file_cache_data($name,$data);
self::memory_cache_data($name,$data);
return $data;
}
}









public static function try_load($classname,$module_name,$entry_name)
{
$name=self::compute_entry_name($module_name,$entry_name);

if(self::is_memory_cached($name))
{
return self::get_memory_cached_data($name);
}
else if(self::is_file_cached($name))
{
$data=self::get_file_cached_data($name);
if($data instanceof $classname)
{
self::memory_cache_data($name,$data);
return $data;
}
}
throw new CacheDataNotFoundException($name);
}








public static function invalidate($module_name,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);
self::invalidate_file_cache($name);
self::invalidate_memory_cache($name);
}




public static function clear()
{
self::get_ram_cache()->clear();
self::get_fs_cache()->clear();
}







public static function save($data,$module_name,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);
self::file_cache_data($name,$data);
self::memory_cache_data($name,$data);
}




private static function compute_entry_name($module_name,$entry_name)
{
if(!empty($entry_name))
{
return Url::encode_rewrite($module_name.'-'.$entry_name);
}
else
{
return Url::encode_rewrite($module_name);
}
}





private static function is_memory_cached($name)
{
return self::get_ram_cache()->contains($name);
}




private static function get_memory_cached_data($name)
{
return self::get_ram_cache()->get($name);
}

private static function memory_cache_data($name,CacheData $value)
{
self::get_ram_cache()->store($name,$value);
}

private static function invalidate_memory_cache($name)
{
self::get_ram_cache()->delete($name);
}

private static function get_file_name($name)
{
return $name.'.data';
}




private static function is_file_cached($name)
{
return self::get_fs_cache()->contains(self::get_file_name($name));
}




private static function get_file_cached_data($name)
{
return self::get_fs_cache()->get(self::get_file_name($name));
}

private static function file_cache_data($name,CacheData $value)
{
self::get_fs_cache()->store(self::get_file_name($name),$value);
}

private static function invalidate_file_cache($name)
{
self::get_fs_cache()->delete(self::get_file_name($name));
}
}
?>
