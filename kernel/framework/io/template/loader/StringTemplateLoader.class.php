<?php
































class StringTemplateLoader implements TemplateLoader
{
private $content='';
private $hashed_content;



private static $parsing_cache=null;

public static function __static()
{
self::$parsing_cache=new RAMDataStore();
}





public function __construct($content)
{
$this->content=$content;
$this->hashed_content=md5($content);
}




public function load()
{
if(self::is_cached($this->hashed_content))
{
return self::get_cached_template($this->hashed_content);
}
else
{
$parser=new TemplateSyntaxParser();
$parsed_content=$parser->parse($this->content);
self::register_cached_template($this->hashed_content,$parsed_content);
return $parsed_content;
}
}

private static function is_cached($hashed_content)
{
return self::$parsing_cache->contains($hashed_content);
}

private static function get_cached_template($hashed_content)
{
return self::$parsing_cache->get($hashed_content);
}

private static function register_cached_template($hashed_content,$parsed_content)
{
self::$parsing_cache->store($hashed_content,$parsed_content);
}




public function supports_caching()
{
return false;
}




public function get_cache_file_path()
{
return null;
}
}

?>
