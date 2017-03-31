<?php






























class CSSCacheManager
{
private $css_optimizer;
private $cache_file_location='';

public function __construct()
{
$this->css_optimizer=new CSSFileOptimizer();
}


public static function get_css_path($files)
{
if(!empty($files))
{
if(is_array($files))
{
$cache_file_location='/cache/css/css-cache-'.md5(implode(';',$files)).'.css';
}
else
{
$files=str_replace('{THEME}',AppContext::get_current_user()->get_theme(),$files);
$cache_file_location='/cache/css/css-cache-'.md5($files).'.css';
$files=explode(';',$files);
}

$css_cache=new CSSCacheManager();
$css_cache->set_files($files);
$css_cache->set_cache_file_location(PATH_TO_ROOT.$cache_file_location);
$css_cache->execute(CSSCacheConfig::load()->get_optimization_level());

return TPL_PATH_TO_ROOT.$cache_file_location;
}
}

public function set_files(Array $files)
{
foreach($files as $file)
{
$this->css_optimizer->add_file(PATH_TO_ROOT.$file);
}
}

public function set_cache_file_location($location)
{
$this->cache_file_location=$location;
}

public function execute($intensity=CSSFileOptimizer::LOW_OPTIMIZATION)
{
if(!file_exists($this->cache_file_location))
{
$this->force_regenerate_cache($intensity);
}
else
{
$files=$this->css_optimizer->get_files();
$cache_file_time=filemtime($this->cache_file_location);
foreach($files as $file)
{
if(filemtime($file)>$cache_file_time)
{
$this->force_regenerate_cache($intensity);
break;
}
}
}
}

public function get_cache_file_location()
{
return $this->cache_file_location;
}

public function force_regenerate_cache($intensity)
{
$this->css_optimizer->optimize($intensity);
$this->css_optimizer->export_to_file($this->cache_file_location);
}
}
?>
