<?php






























class LangLoader
{
const DEFAULT_LOCALE='english';

private static $locale=self::DEFAULT_LOCALE;




private static $ram_cache=null;





public static function set_locale($locale)
{
self::$locale=$locale;
}





public static function get_locale()
{
return self::$locale;
}







public static function get_message($message_id,$filename,$module='')
{
$lang=self::get($filename,$module);
return $lang[$message_id];
}










public static function get($filename,$module='')
{
$module_name=trim($module,'/');
return self::get_raw($module_name,$filename);
}

private static function get_raw($folder,$filename)
{
$lang_id=$folder.'/'.$filename;
$ram_cache=self::get_ram_cache();
if(!$ram_cache->contains($lang_id))
{
self::load($lang_id,$folder,$filename);
}
return $ram_cache->get($lang_id);
}

private static function load($lang_id,$folder,$filename)
{
$lang=array();
include self::get_real_lang_path($folder,$filename);
if(empty($lang)&&!empty($LANG)&&is_array($LANG))
{
$lang=$LANG;
}
self::get_ram_cache()->store($lang_id,$lang);
}








private static function get_real_lang_path($folder,$filename)
{
$real_folder=PATH_TO_ROOT;
if(!empty($folder))
{
$real_folder.='/'.$folder;
}
$real_folder.='/lang/';
$filename_with_extension='/'.$filename.'.php';

$real_lang_file=$real_folder.self::$locale.$filename_with_extension;
if(file_exists($real_lang_file))
{
return $real_lang_file;
}

$real_lang_file=$real_folder.self::DEFAULT_LOCALE.$filename_with_extension;
if(file_exists($real_lang_file))
{
return $real_lang_file;
}

throw new LangNotFoundException($folder,$filename);
}




public static function clear_lang_cache()
{
self::$ram_cache=null;
self::get_ram_cache();
}




private static function get_ram_cache()
{
if(self::$ram_cache===null)
{
self::$ram_cache=new RAMDataStore('lang');
}
return self::$ram_cache;
}
}
?>
