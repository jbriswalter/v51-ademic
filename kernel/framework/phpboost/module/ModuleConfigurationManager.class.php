<?php
































class ModuleConfigurationManager
{



private static $cache_manager=null;






public static function get($module_id)
{
$cache_manager=self::get_cache_manager();
if(!$cache_manager->contains($module_id))
{
$module_configuration=self::get_module_configuration($module_id);
$cache_manager->store($module_id,$module_configuration);
}
return $cache_manager->get($module_id);
}




private static function get_cache_manager()
{
if(self::$cache_manager===null)
{
self::$cache_manager=DataStoreFactory::get_ram_store(__CLASS__);
}
return self::$cache_manager;
}




private static function get_module_configuration($module_id)
{
$config_ini_file=PATH_TO_ROOT.'/'.$module_id.'/config.ini';
$desc_ini_file=self::find_desc_ini_file($module_id);
return new ModuleConfiguration($config_ini_file,$desc_ini_file);
}

private static function find_desc_ini_file($module_id)
{
$desc_ini_folder=PATH_TO_ROOT.'/'.$module_id.'/lang/';

$desc_ini_file=$desc_ini_folder.AppContext::get_current_user()->get_locale().'/desc.ini';
if(file_exists($desc_ini_file))
{
return $desc_ini_file;
}

$folder=new Folder($desc_ini_folder);
$folders=$folder->get_folders();
foreach($folders as $lang_folder)
{
$desc_ini_file=$lang_folder->get_path().'/desc.ini';
if(file_exists($desc_ini_file))
{
return $desc_ini_file;
}
}
throw new IOException('Module "'.$module_id.'" description desc.ini not found in'.
'/'.$module_id.'/lang/');
}
}
?>
