<?php


























class I18NMessages
{
private $messages=array();

public function __construct($resources=null)
{
$this->resources($resources);
}

public function resources($resources)
{
if(is_string($resources))
{
$this->add_resource($resources);
}
elseif(is_array($resources))
{
foreach($resources as $resource)
{
$this->add_resource($resource);
}
}
}

private function add_resource($resource)
{
$module='';
$filename='';
$resource=trim($resource,'/');
$slash_idx=strrpos($resource,'/');
if($slash_idx>-1)
{
$module=substr($resource,0,$slash_idx);
$filename=substr($resource,$slash_idx+1);
}
else
{
$filename=$resource;
}
$this->add_language_maps(LangLoader::get($filename,$module));
}

public function add_language_maps(array $lang)
{
if(empty($this->messages))
{
$this->messages=$lang;
}
else
{
$this->messages=array_merge($lang,$this->messages);
}
}

public function i18n($key,$parameters)
{
return TextHelper::htmlspecialchars($this->i18nraw($key,$parameters));
}

public function i18njs($key,$parameters)
{
return TextHelper::to_js_string($this->i18n($key,$parameters));
}

public function i18njsraw($key,$parameters)
{
return TextHelper::to_js_string($this->i18nraw($key,$parameters));
}

public function i18nraw($key,$parameters)
{
if(!empty($parameters))
{
StringVars::replace_vars($this->messages[$key],$parameters);
}
return $this->messages[$key];
}
}
?>
