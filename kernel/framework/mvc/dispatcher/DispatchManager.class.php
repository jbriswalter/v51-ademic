<?php






























class DispatchManager
{




public static function dispatch($url_controller_mappers)
{
try
{
$dispatcher=new Dispatcher($url_controller_mappers);
$dispatcher->dispatch();
}
catch(NoUrlMatchException $ex)
{
self::handle_dispatch_exception($ex);
}
}





public static function redirect(Controller $controller)
{
AppContext::get_response()->clean_output();
Environment::init_output_bufferization();
$request=AppContext::get_request();
$response=$controller->execute($request);
$response->send();
Environment::destroy();
exit;
}









public static function get_url($path,$url,$not_rewriting_url_forced=false)
{
$dispatcher_url=new Url(rtrim($path,'/'));
$url=ltrim($url,'/');
if(ServerEnvironmentConfig::load()->is_url_rewriting_enabled()&&!$not_rewriting_url_forced)
{
return new Url(self::get_dispatcher_path($dispatcher_url->relative()).'/'.$url);
}
else
{
$dispatcher=$dispatcher_url->relative();
if(!preg_match('`(?:\.php)|/$`',$dispatcher))
{
$dispatcher.='/';
}
if(strpos($url,'?')!==false)
{
$exploded=explode('?',$url,2);
$exploded[1]=str_replace('?','&',$exploded[1]);
return new Url($dispatcher.'?'.Dispatcher::URL_PARAM_NAME.
'=/'.$exploded[0].'&'.$exploded[1]);
}
else
{
return new Url($dispatcher.'?'.Dispatcher::URL_PARAM_NAME.
'=/'.$url);
}
}
}

private static function get_dispatcher_path($dispatcher_name)
{
return preg_replace('`(.*/)[a-z0-9]+\.php`','$1',$dispatcher_name);
}

private static function handle_dispatch_exception($exception)
{
if(Debug::is_debug_mode_enabled())
{
self::show_error($exception);
}
else
{
$error_controller=PHPBoostErrors::unexisting_page();
DispatchManager::redirect($error_controller);
}
}

private static function show_error($exception)
{
Debug::fatal($exception);
}
}
?>
