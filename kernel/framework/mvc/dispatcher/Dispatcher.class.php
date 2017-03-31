<?php


























define('REQUEST_URI',$_SERVER['REQUEST_URI']);







class Dispatcher
{


const URL_PARAM_NAME='url';

private $url_controller_mappers=array();







public function __construct($url_controller_mappers)
{
$this->url_controller_mappers=&$url_controller_mappers;
}






public function dispatch()
{
$url=AppContext::get_request()->get_getstring('url','');
foreach($this->url_controller_mappers as $url_controller_mapper)
{
if($url_controller_mapper->match($url))
{
$url_controller_mapper->call();
Environment::destroy();
return;
}
}
throw new NoUrlMatchException($url);
Environment::destroy();
}
}
?>
