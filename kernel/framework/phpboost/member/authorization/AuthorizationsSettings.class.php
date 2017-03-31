<?php







































class AuthorizationsSettings
{
private $actions;





public function __construct(array $actions=array())
{
$this->actions=$actions;
}





public function get_actions()
{
return $this->actions;
}





public function add_action(ActionAuthorization $action)
{
$this->actions[]=$action;
}







public function build_auth_array()
{
$auth_array=array();
foreach($this->actions as $action)
{
self::merge_auth_array($auth_array,$action);
}
return $auth_array;
}

private static function merge_auth_array(array&$global,ActionAuthorization $action)
{
foreach($action->build_auth_array()as $role=>$value)
{
if(!empty($global[$role]))
{
$global[$role]|=$value;
}
else
{
$global[$role]=$value;
}
}
}





public function build_from_auth_array(array $auth_array)
{
foreach($this->actions as $action)
{
$action->build_from_auth_array($auth_array);
}
}
}
?>
