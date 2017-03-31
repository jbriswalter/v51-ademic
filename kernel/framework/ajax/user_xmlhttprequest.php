<?php


























define('PATH_TO_ROOT','../../..');

require_once(PATH_TO_ROOT.'/kernel/begin.php');
AppContext::get_session()->no_session_location();
require_once(PATH_TO_ROOT.'/kernel/header_no_display.php');

$login=substr(retrieve(POST,'login',''),0,25);
$display_name=substr(retrieve(POST,'display_name',''),0,100);
$email=retrieve(POST,'mail','');
$user_id=retrieve(POST,'user_id','');

$db_querier=PersistenceContext::get_querier();

if(!empty($login)&&!empty($user_id))
echo $db_querier->count(DB_TABLE_INTERNAL_AUTHENTICATION,'WHERE login=:login AND user_id != :user_id',array('login'=>$login,'user_id'=>$user_id));
elseif(!empty($email)&&!empty($user_id))
echo $db_querier->count(DB_TABLE_MEMBER,'WHERE email=:email AND user_id != :user_id',array('email'=>$email,'user_id'=>$user_id));
elseif(!empty($display_name)&&!empty($user_id))
echo $db_querier->count(DB_TABLE_MEMBER,'WHERE display_name=:display_name AND user_id != :user_id',array('display_name'=>$display_name,'user_id'=>$user_id));
elseif(!empty($display_name))
echo $db_querier->count(DB_TABLE_MEMBER,'WHERE display_name=:display_name',array('display_name'=>$display_name));
elseif(!empty($login))
echo $db_querier->count(DB_TABLE_INTERNAL_AUTHENTICATION,'WHERE login=:login',array('login'=>$login));
elseif(!empty($email))
echo $db_querier->count(DB_TABLE_MEMBER,'WHERE email=:email',array('email'=>$email));
else
echo-1;
?>
