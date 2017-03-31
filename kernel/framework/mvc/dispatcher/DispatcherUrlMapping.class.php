<?php



























class DispatcherUrlMapping extends UrlMapping
{



public function __construct($dispatcher_name,$match='([\w/_-]*)$')
{
$dispatcher_path='^'.ltrim(substr($dispatcher_name,0,strrpos($dispatcher_name,'/')+1),'/');
$from=$dispatcher_path.$match;
$to=$dispatcher_name.'?url=/$1';
parent::__construct($from,$to);
}
}
?>
