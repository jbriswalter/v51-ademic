<?php

























class Timezone
{
const SERVER_TIMEZONE=1;
const SITE_TIMEZONE=2;
const USER_TIMEZONE=3;

private static $server_timezone;
private static $site_timezone;
private static $user_timezone;

public static function get_supported_timezones()
{
return DateTimeZone::listIdentifiers();
}






public static function get_timezone($timezone_code)
{
switch($timezone_code)
{
case self::SERVER_TIMEZONE:
return self::get_server_timezone();
case self::SITE_TIMEZONE:
return self::get_site_timezone();
default:
return self::get_user_timezone();
}
}

public static function get_server_timezone()
{
if(self::$server_timezone==null)
{
self::$server_timezone=new DateTimeZone(date_default_timezone_get());
}
return self::$server_timezone;
}

public static function get_site_timezone()
{
if(self::$site_timezone==null)
{
self::$site_timezone=new DateTimeZone(GeneralConfig::load()->get_site_timezone());
}
return self::$site_timezone;
}

public static function get_user_timezone()
{
if(self::$user_timezone==null)
{
self::$user_timezone=new DateTimeZone(AppContext::get_current_user()->get_timezone());
}
return self::$user_timezone;
}
}
?>
