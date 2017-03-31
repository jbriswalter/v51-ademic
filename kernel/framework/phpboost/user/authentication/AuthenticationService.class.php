<?php
































class AuthenticationService
{






public static function associate(AuthenticationMethod $authentication,$user_id)
{
$authentication->associate($user_id);
}







public static function dissociate(AuthenticationMethod $authentication,$user_id)
{
$authentication->dissociate($user_id);
}







public static function authenticate(AuthenticationMethod $authentication,$autoconnect=false)
{
$user_id=$authentication->authenticate();
if($user_id)
{
$session=AppContext::get_session();
if($session!=null)
{
Session::delete($session);
}
$session_data=Session::create($user_id,$autoconnect);
AppContext::set_session($session_data);
}
return $user_id;
}

public static function get_user_types_authentication($user_id)
{
$result=PersistenceContext::get_querier()->select_rows(DB_TABLE_AUTHENTICATION_METHOD,array('method'),'WHERE user_id=:user_id',array('user_id'=>$user_id));

$types=array();
foreach($result as $row){
$types[]=$row['method'];
}
$result->dispose();

return $types;
}

public static function get_activated_types_authentication()
{
$authentication_config=AuthenticationConfig::load();

$types=array(PHPBoostAuthenticationMethod::AUTHENTICATION_METHOD);

if($authentication_config->is_fb_auth_available())
$types[]=FacebookAuthenticationMethod::AUTHENTICATION_METHOD;

if($authentication_config->is_google_auth_available())
$types[]=GoogleAuthenticationMethod::AUTHENTICATION_METHOD;

return $types;
}

public static function get_authentication_method($method_identifier)
{
switch($method_identifier){
case PHPBoostAuthenticationMethod::AUTHENTICATION_METHOD:
return new PHPBoostAuthenticationMethod();
break;

case FacebookAuthenticationMethod::AUTHENTICATION_METHOD:
return new FacebookAuthenticationMethod();
break;

case GoogleAuthenticationMethod::AUTHENTICATION_METHOD:
return new GoogleAuthenticationMethod();
break;

default:
throw new IllegalArgumentException('Method '.$method_identifier.' not exists');
break;
}
}
}

?>
