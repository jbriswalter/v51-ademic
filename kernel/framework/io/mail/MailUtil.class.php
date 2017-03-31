<?php































class MailUtil
{
private static $regex='(?:[a-z0-9_!#$%&\'*+/=?^|~-]\.?){0,63}[a-z0-9_!#$%&\'*+/=?^|~-]+@(?:[a-z0-9_-]{2,}\.)+([a-z0-9_-]{2,}\.)*[a-z]{2,4}';






public static function is_mail_valid($mail_address)
{
return(bool)preg_match(self::get_mail_checking_regex(),$mail_address);
}





public static function get_mail_checking_regex()
{
return '`^'.self::$regex.'$`i';
}





public static function get_mail_checking_raw_regex()
{
return self::$regex;
}
}
?>
