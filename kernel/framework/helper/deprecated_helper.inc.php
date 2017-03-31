<?php


























### Variable types ###
define('GET',1);
define('POST',2);
define('REQUEST',3);
define('COOKIE',4);
define('FILES',5);

define('TBOOL','boolean');
define('TINTEGER','integer');
define('TDOUBLE','double');
define('TFLOAT','double');
define('TSTRING','string');
define('TSTRING_PARSE','string_parse');
define('TSTRING_UNCHANGE','string_unsecure');
define('TSTRING_HTML','string_html');
define('TSTRING_AS_RECEIVED','string_unchanged');
define('TARRAY','array');
define('TUNSIGNED_INT','uint');
define('TUNSIGNED_DOUBLE','udouble');
define('TUNSIGNED_FLOAT','udouble');
define('TNONE','none');

define('USE_DEFAULT_IF_EMPTY',1);





























function retrieve($var_type,$var_name,$default_value,$force_type=NULL,$flags=0)
{
$var=null;
$request=AppContext::get_request();

switch($var_type)
{
case GET:
if($request->has_getparameter($var_name))
{
$var=$request->get_getvalue($var_name);
}
break;
case POST:
if($request->has_postparameter($var_name))
{
$var=$request->get_postvalue($var_name);
}
break;
case REQUEST:
if($request->has_parameter($var_name))
{
$var=$request->get_value($var_name);
}
break;
case COOKIE:
if($request->has_cookieparameter($var_name))
{
$var=$request->get_cookie($var_name);
}
break;
case FILES:
if(isset($_FILES[$var_name]))
{
$var=$_FILES[$var_name];
}
break;
default:
break;
}


if($var===null ||(($flags&USE_DEFAULT_IF_EMPTY!=0)&&empty($var)))
{
return $default_value;
}

$force_type=!isset($force_type)?gettype($default_value):$force_type;
switch($force_type)
{
case TINTEGER:
return(int)$var;
case TSTRING:
return TextHelper::strprotect($var);
case TSTRING_UNCHANGE:
return trim((string)$var);
case TSTRING_PARSE:
return FormatingHelper::strparse($var);
case TBOOL:
return(bool)$var;
case TUNSIGNED_INT:
$var=(int)$var;
return $var>0?$var:max(0,$default_value);
case TUNSIGNED_DOUBLE:
$var=(double)$var;
return $var>0.0?$var:max(0.0,$default_value);
case TSTRING_HTML:
return TextHelper::strprotect($var,TextHelper::HTML_NO_PROTECT);
case TSTRING_AS_RECEIVED:
return(string)$var;
case TARRAY:
return(array)$var;
case TDOUBLE:
return(double)$var;
case TNONE:
return $var;
default:
return $default_value;
}
}









function url($url,$mod_rewrite='',$ampersand='&amp;')
{
if(ServerEnvironmentConfig::load()->is_url_rewriting_enabled()&&!empty($mod_rewrite))
{
return $mod_rewrite;
}
else
{
return $url;
}
}









function load_module_lang($module_name,$path=PATH_TO_ROOT)
{
global $LANG;

$user_locale=AppContext::get_current_user()->get_locale();
$file=$path.'/'.$module_name.'/lang/'.$user_locale.'/'.$module_name.'_'.$user_locale.'.php';
$result=include_once $file;

if(!$result)
{
$lang=find_require_dir(PATH_TO_ROOT.'/'.$module_name.'/lang/',$user_locale,false);
$file2=PATH_TO_ROOT.'/'.$module_name.'/lang/'.$lang.'/'.$module_name.'_'.$lang.'.php';
$result2=include_once $file2;

if(!$result2)
{
$error_message=sprintf('Unable to load lang file \'%s\'!',PATH_TO_ROOT.'/'.$module_name.'/lang/'.$lang.'/'.$module_name.'_'.$lang.'.php');

$controller=new UserErrorController(LangLoader::get_message('error','status-messages-common'),
$error_message,UserErrorController::FATAL);
DispatchManager::redirect($controller);
}
}
}










function load_ini_file($dir_path,$require_dir,$ini_name='config.ini')
{
$dir=find_require_dir($dir_path,$require_dir,false);
$file=$dir_path.$dir.'/'.$ini_name;
if(file_exists($file))
{
$result=parse_ini_file($file);
}
else
{
$result=false;
}
return $result;
}












function find_require_dir($dir_path,$require_dir,$fatal_error=true)
{

if(!@file_exists($dir_path.$require_dir))
{
if(@is_dir($dir_path)&&$dh=@opendir($dir_path))
{
while(!is_bool($dir=readdir($dh)))
{
if(strpos($dir,'.')===false)
{
closedir($dh);
return $dir;
}
}
closedir($dh);
}
}
else
{
return $require_dir;
}

if($fatal_error)
{
$error_message=sprintf('Unable to load required directory \'%s\'!',$dir_path.$require_dir);

$controller=new UserErrorController(LangLoader::get_message('error','status-messages-common'),
$error_message,UserErrorController::FATAL);
DispatchManager::redirect($controller);
}
}
?>
