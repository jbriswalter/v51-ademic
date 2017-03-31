<?php


























class TemplateFunctions
{



private $i18n;

public function __construct()
{
$this->i18n=new I18NMessages();
}

public function resources($resources)
{
$this->i18n->resources($resources);
}

private function add_resource($resource)
{
$this->i18n->add_resource($resource);
}

public function add_language_maps(array $lang)
{
$this->i18n->add_language_maps($lang);
}

public function i18n($key,array $parameters=null)
{
return $this->i18n->i18n($key,$parameters);
}

public function i18njs($key,array $parameters=null)
{
return $this->i18n->i18njs($key,$parameters);
}

public function i18njsraw($key,array $parameters=null)
{
return $this->i18n->i18njsraw($key,$parameters);
}

public function i18nraw($key,array $parameters=null)
{
return $this->i18n->i18nraw($key,$parameters);
}






public function escape($string)
{
return TextHelper::htmlspecialchars($string);
}

public function html($string)
{
return TextHelper::htmlspecialchars_decode($string);
}







public function escapejs($string,$add_quotes=true)
{
return TextHelper::to_js_string($string,$add_quotes);
}






public function escapejscharacters($string)
{
return strtr(Url::encode_rewrite($string),'-','_');
}

public function set($string,array $parameters)
{
return StringVars::replace_vars($string,$parameters);
}

public function relative_url(Url $url)
{
return $url->rel();
}

public function absolute_url(Url $url)
{
return $url->absolute();
}
}
?>
