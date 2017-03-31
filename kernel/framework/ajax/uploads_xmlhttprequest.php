<?php






























define('PATH_TO_ROOT','../../..');

include_once(PATH_TO_ROOT.'/kernel/begin.php');
AppContext::get_session()->no_session_location();
include_once(PATH_TO_ROOT.'/kernel/header_no_display.php');



$user=AppContext::get_current_user();
$request=AppContext::get_request();

$new_folder=$request->get_getint('new_folder',0);
$rename_folder=$request->get_getint('rename_folder',0);
$rename_file=$request->get_getint('rename_file',0);

$user_id=$request->get_postint('user_id',$user->get_id());
$name=TextHelper::strprotect(utf8_decode($request->get_postvalue('name','')));
$previous_name=TextHelper::strprotect(utf8_decode($request->get_postvalue('previous_name','')));

if(!empty($new_folder))
{
$id_parent=$request->get_postint('id_parent',0);

if(!empty($user_id)&&$user->get_id()!=$user_id)
{
if($user->check_level(User::ADMIN_LEVEL))
{
echo Uploads::Add_folder($id_parent,$user_id,$name);
}
else
{
echo Uploads::Add_folder($id_parent,$user->get_id(),$name);
}
}
else
{
echo Uploads::Add_folder($id_parent,$user->get_id(),$name);
}
}
elseif(!empty($rename_folder))
{
$id_folder=$request->get_postint('id_folder',0);

if(!empty($id_folder)&&!empty($name))
{
if($user->get_id()!=$user_id)
{
if($user->check_level(User::ADMIN_LEVEL))
{
echo Uploads::Rename_folder($id_folder,$name,$previous_name,$user_id,Uploads::ADMIN_NO_CHECK);
}
else
{
echo Uploads::Rename_folder($id_folder,$name,$previous_name,$user->get_id(),Uploads::ADMIN_NO_CHECK);
}
}
else
{
echo Uploads::Rename_folder($id_folder,$name,$previous_name,$user->get_id());
}
}
else
echo 0;
}
elseif(!empty($rename_file))
{
$id_file=$request->get_postint('id_file',0);

if(!empty($id_file)&&!empty($name))
{
if($user->get_id()!=$user_id)
{
if($user->check_level(User::ADMIN_LEVEL))
{
echo Uploads::Rename_file($id_file,$name,$previous_name,$user_id,Uploads::ADMIN_NO_CHECK);
}
else
{
echo Uploads::Rename_file($id_file,$name,$previous_name,$user->get_id(),Uploads::ADMIN_NO_CHECK);
}
}
else
{
echo Uploads::Rename_file($id_file,$name,$previous_name,$user->get_id());
}
}
else
{
echo 0;
}
}
?>
