<?php































class LangConfigurationManager
{
private static $cache_manager=null;

public static function get($id)
{
$cache_manager=self::get_cache_manager();
if(!$cache_manager->contains($id))
{
$configuration=self::get_configuration($id);
$cache_manager->store($id,$configuration);
}
return $cache_manager->get($id);
}

private static function get_cache_manager()
{
if(self::$cache_manager===null)
{
self::$cache_manager=DataStoreFactory::get_ram_store(__CLASS__);
}
return self::$cache_manager;
}

private static function get_configuration($id)
{
$config_ini_file=self::find_config_ini_file($id);
return new LangConfiguration($config_ini_file);
}

private static function find_config_ini_file($id)
{
$config_ini_file=PATH_TO_ROOT.'/lang/'.$id.'/config.ini';
if(file_exists($config_ini_file))
{
return $config_ini_file;
}

throw new IOException('Lang "'.$id.'" config.ini not found in '.
$config_ini_file);
}
}
?>
