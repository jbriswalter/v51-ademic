<?php


































class CachedStringTemplateLoader implements TemplateLoader
{
private $content='';
private $cache_file_path='';





public function __construct($content)
{
$this->content=$content;
$this->compute_cache_file_path();
}

private function compute_cache_file_path()
{
$this->cache_file_path=PATH_TO_ROOT.'/cache/tpl/string-'.md5($this->content).'.php';
}




public function load()
{
if(!$this->file_cache_exists())
{
$content=$this->get_parsed_content();
$this->generate_cache_file($content);
return $content;
}

return file_get_contents($this->cache_file_path);
}

private function file_cache_exists()
{
return file_exists($this->cache_file_path)&&@filesize($this->cache_file_path)!==0;
}

private function generate_cache_file()
{
try
{
$cache_file=new File($this->cache_file_path);
$cache_file->open(File::WRITE);
$cache_file->lock();
$cache_file->write($this->get_parsed_content());
$cache_file->unlock();
$cache_file->close();
$cache_file->change_chmod(0666);
}
catch(IOException $ex)
{
throw new TemplateLoadingException('The template file cache couldn\'t been written due to this problem: '.$ex->getMessage());
}
}

private function get_parsed_content()
{
$parser=new TemplateSyntaxParser();
return $parser->parse($this->content);
}




public function supports_caching()
{
return true;
}




public function get_cache_file_path()
{
if(!$this->file_cache_exists())
{
$content=$this->get_parsed_content();
$this->generate_cache_file($content);
}
return $this->cache_file_path;
}
}
?>
