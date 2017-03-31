<?php


























class CacheService
{
private static $all_files_regex_without_extensions='`^\.|.*\.log|apc.php|debug.php`i';

private static $cache_folder;
private static $tpl_cache_folder;
private static $css_cache_folder;
private static $syndication_cache_folder;

public function __construct()
{
self::$cache_folder=new Folder(PATH_TO_ROOT.'/cache');
self::$tpl_cache_folder=new Folder(self::$cache_folder->get_path().'/tpl');
self::$css_cache_folder=new Folder(self::$cache_folder->get_path().'/css');
self::$syndication_cache_folder=new Folder(self::$cache_folder->get_path().'/syndication');
}

public function clear_cache()
{
$this->clear_phpboost_cache();
$this->clear_template_cache();
$this->clear_css_cache();
$this->clear_syndication_cache();
}

public function clear_phpboost_cache()
{
CacheManager::clear();
$this->delete_files(self::$cache_folder,self::$all_files_regex_without_extensions);
}

public function clear_template_cache()
{
$this->delete_files(self::$tpl_cache_folder,self::$all_files_regex_without_extensions);
}

public function clear_css_cache()
{
$this->delete_files(self::$css_cache_folder,self::$all_files_regex_without_extensions);
}

public function clear_syndication_cache()
{
$this->delete_files(self::$syndication_cache_folder,self::$all_files_regex_without_extensions);
}

private function delete_files(Folder $folder,$regex='')
{
$files_to_delete=$folder->get_files($regex,true);
foreach($files_to_delete as $file)
{
$file->delete();
}
}
}
?>
