<?php



































class StringTemplate extends AbstractTemplate
{



const DONT_USE_CACHE=false;



const USE_CACHE_IF_FASTER=true;







public function __construct($content,$use_cache=self::USE_CACHE_IF_FASTER)
{
$data=new DefaultTemplateData();
$data->auto_load_frequent_vars();
$renderer=new DefaultTemplateRenderer();

if($this->has_to_cache($content,$use_cache))
{
$loader=new CachedStringTemplateLoader($content);
}
else
{
$loader=new StringTemplateLoader($content);
}
parent::__construct($loader,$renderer,$data);
}

private function has_to_cache($content,$use_cache)
{
if($use_cache==self::DONT_USE_CACHE)
{
return false;
}
else
{
if(strlen($content)>200)
{
return true;
}
else
{
return false;
}
}
}
}
?>
