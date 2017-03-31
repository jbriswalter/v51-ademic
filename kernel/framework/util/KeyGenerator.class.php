<?php






























class KeyGenerator
{
public static function generate_key($length=null)
{
if($length==null)
{
return self::string_hash(uniqid(mt_rand(),true),false);
}
else
{
return substr(self::string_hash(uniqid(mt_rand(),true),false),0,$length);
}
}

public static function generate_token()
{
return self::generate_key(16);
}









public static function string_hash($string,$salt=true)
{
if($salt===true)
{
$string=md5($string).$string;
}
elseif($salt!==false)
{
$string=$salt.$string;
}
return hash('sha256',$string);
}
}
?>
