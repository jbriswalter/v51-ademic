<?php


























class CaptchaProvidersService
{
public static function create_factory($identifier)
{
return self::get_captcha($identifier);
}

public static function get_captcha($identifier)
{
$captchas=self::get_captchas();
if(array_key_exists($identifier,$captchas))
{
return $captchas[$identifier];
}
}

public static function get_captchas()
{
$captchas=array();
foreach(self::get_extensions_point()as $id=>$provider)
{
$captchas[$id]=$provider;
}
return $captchas;
}

public static function get_extensions_point()
{
return AppContext::get_extension_provider_service()->get_extension_point(Captcha::EXTENSION_POINT);
}
}
?>
