<?php
































class AppContext
{



private static $request;



private static $response;




private static $breadcrumb;



private static $bench;



private static $session;



private static $current_user;



private static $extension_provider_service;



private static $cache_service;




private static $mail_service;



private static $content_formatting_service;



private static $captcha_service;





public static function get_uid()
{
static $uid=1764;
return $uid++;
}





public static function set_request(HTTPRequestCustom $request)
{
self::$request=$request;
}





public static function get_request()
{
if(self::$request==null)
{
self::$request=new HTTPRequestCustom();
}
return self::$request;
}





public static function set_response(HTTPResponseCustom $response)
{
self::$response=$response;
}





public static function get_response()
{
if(self::$response==null)
{
self::$response=new HTTPResponseCustom();
}
return self::$response;
}




public static function init_bench()
{
self::$bench=new Bench();
self::$bench->start();
}





public static function get_bench()
{
return self::$bench;
}




public static function set_session(SessionData $session)
{
self::$session=$session;
}





public static function get_session()
{
return self::$session;
}




public static function init_current_user()
{
self::$current_user=CurrentUser::from_session();
}





public static function get_current_user()
{
if(self::$current_user===null)
{
self::$current_user=CurrentUser::from_session();
}
return self::$current_user;
}

public static function set_current_user($current_user)
{
self::$current_user=$current_user;
}





public static function get_cache_service()
{
if(self::$cache_service===null)
{
self::$cache_service=new CacheService();
}
return self::$cache_service;
}

public static function set_cache_service(CacheService $cache_service)
{
self::$cache_service=$cache_service;
}




public static function init_extension_provider_service()
{
self::$extension_provider_service=new ExtensionPointProviderService();
}




public static function get_extension_provider_service()
{
if(self::$extension_provider_service===null)
{
self::$extension_provider_service=new ExtensionPointProviderService();
}
return self::$extension_provider_service;
}




public static function get_mail_service()
{
if(self::$mail_service===null)
{
$config=MailServiceConfig::load();
if($config->is_smtp_enabled())
{
self::$mail_service=new SMTPMailService($config->to_smtp_config());
}
else
{
self::$mail_service=new DefaultMailService();
}
}
return self::$mail_service;
}




public static function get_content_formatting_service()
{
if(self::$content_formatting_service===null)
{
self::$content_formatting_service=new ContentFormattingService();
}
return self::$content_formatting_service;
}




public static function get_captcha_service()
{
if(self::$captcha_service===null)
{
self::$captcha_service=new CaptchaService();
}
return self::$captcha_service;
}
}
?>
