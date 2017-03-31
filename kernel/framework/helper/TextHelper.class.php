<?php































class TextHelper
{
const HTML_NO_PROTECT=false;
const HTML_PROTECT=true;

const ADDSLASHES_FORCE=1;
const ADDSLASHES_NONE=2;









public static function strprotect($var,$html_protect=self::HTML_PROTECT,$addslashes=self::ADDSLASHES_FORCE)
{
$var=trim((string)$var);


if($html_protect)
{
$var=self::htmlspecialchars($var);

$var=preg_replace('`&amp;((?:#[0-9]{2,5})|(?:[a-z0-9]{2,8}));`i',"&$1;",$var);
}

switch($addslashes)
{
case self::ADDSLASHES_FORCE:
default:

$var=addslashes($var);
break;
case self::ADDSLASHES_NONE:

$var=stripslashes($var);
break;
}

return $var;
}










public static function wordwrap_html($str,$lenght,$cut_char='<br />',$cut=true)
{
$str=wordwrap(TextHelper::html_entity_decode($str),$lenght,$cut_char,$cut);
return str_replace('&lt;br /&gt;','<br />',self::htmlspecialchars($str,ENT_NOQUOTES));
}











public static function substr_html($str,$start,$end='')
{
if($end=='')
{
return self::htmlspecialchars(substr(self::html_entity_decode($str),$start),ENT_NOQUOTES);
}
else
{
return self::htmlspecialchars(substr(self::html_entity_decode($str),$start,$end),ENT_NOQUOTES);
}
}







public static function to_js_string($string,$add_quotes=true)
{
$bounds=$add_quotes?'\'':'';
return $bounds.str_replace(array("\r\n","\r","\n",'"'),array('\n','\n','\n','&quot;'),
addcslashes($string,'\'')).$bounds;
}







public static function to_json_string($string,$add_quotes=true)
{
$bounds=$add_quotes?'"':'';
return $bounds.str_replace(array("\r\n","\r","\n",),array('\n','\n','\n',),
addcslashes($string,'"')).$bounds;
}

public static function htmlspecialchars($string,$flags=null,$encoding='windows-1252',$double_encode=true)
{
if($flags===null)
{
$flags=ENT_COMPAT;
}
return str_replace('&amp;','&',htmlspecialchars($string,$flags,$encoding,$double_encode));
}

public static function htmlspecialchars_decode($string,$flags=null)
{
if($flags===null)
{
$flags=ENT_COMPAT;
}
return htmlspecialchars_decode($string,$flags);
}

public static function htmlentities($string,$flags=null,$encoding='windows-1252',$double_encode=true)
{
if($flags===null)
{
$flags=ENT_COMPAT;
}
return htmlentities($string,$flags,$encoding,$double_encode);
}

public static function html_entity_decode($string,$flags=null,$encoding='windows-1252')
{
if($flags===null)
{
$flags=ENT_COMPAT;
}
return html_entity_decode($string,$flags,$encoding);
}

public static function lowercase_first($string)
{
return lcfirst($string);
}

public static function uppercase_first($string)
{
return ucfirst($string);
}








public static function check_nbr_links($contents,$max_nbr,$has_html_links=false)
{
if($max_nbr==-1)
{
return true;
}

if($has_html_links)
{
$nbr_link=preg_match_all('`<a href="(?:ftp|https?)://`',$contents,$array);
}
else
{
$nbr_link=preg_match_all('`(?:ftp|https?)://`',$contents,$array);
}

if($nbr_link!==false&&$nbr_link>$max_nbr)
{
return false;
}

return true;
}
}
?>
