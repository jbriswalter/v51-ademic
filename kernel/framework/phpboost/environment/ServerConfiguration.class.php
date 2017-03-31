<?php































class ServerConfiguration
{
const MIN_PHP_VERSION='5.4';
private static $mod_rewrite='mod_rewrite';

public static function get_phpversion()
{
$system_phpversion=phpversion();
$matches=array();
if(preg_match('`^([0-9]+(?:\.[0-9]+){0,2})`',$system_phpversion,$matches))
{
return $matches[1];
}
return $system_phpversion;
}




public function is_php_compatible()
{
return ServerConfiguration::get_phpversion()>=self::MIN_PHP_VERSION;
}




public function has_gd_library()
{
return @extension_loaded('gd');
}




public function has_curl_library()
{
return @extension_loaded('curl');
}




public function has_url_rewriting()
{
if(function_exists('apache_get_modules'))
{
return in_array(self::$mod_rewrite,apache_get_modules());
}
throw new UnsupportedOperationException('can\'t check url rewriting availabilty');
}
}
?>
