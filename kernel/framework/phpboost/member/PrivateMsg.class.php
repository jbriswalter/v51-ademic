<?php































class PrivateMsg
{
const NOCHECK_PM_BOX=false;
const CHECK_PM_BOX=true;
const SYSTEM_PM=true;
const DEL_PM_CONVERS=true;
const UPDATE_MBR_PM=false;

private static $db_querier;

public static function __static()
{
self::$db_querier=PersistenceContext::get_querier();
}






public static function count_conversations($userid)
{
$total_pm=self::$db_querier->count(DB_TABLE_PM_TOPIC,"
		WHERE
		(
			:user_id IN (user_id, user_id_dest)
		)
		AND
		(
			user_convers_status = 0
			OR
			(
				(user_id_dest = :user_id AND user_convers_status = 1)
				OR
				(user_id = :user_id AND user_convers_status = 2)
			)
		)
		",array(
'user_id'=>$userid
));

return $total_pm;
}










public static function start_conversation($pm_to,$pm_objet,$pm_contents,$pm_from,$system_pm=false)
{

if($system_pm)
{
$pm_from='-1';
$user_convers_status='1';
}
else
$user_convers_status='0';


$result=self::$db_querier->insert(DB_TABLE_PM_TOPIC,array('title'=>$pm_objet,'user_id'=>$pm_from,'user_id_dest'=>$pm_to,'user_convers_status'=>$user_convers_status,'user_view_pm'=>0,'nbr_msg'=>0,'last_user_id'=>$pm_from,'last_msg_id'=>0,'last_timestamp'=>time()));
$pm_convers_id=$result->get_last_inserted_id();

$pm_msg_id=self::send($pm_to,$pm_convers_id,$pm_contents,$pm_from,$user_convers_status,false);

return array($pm_convers_id,$pm_msg_id);
}










public static function send($pm_to,$pm_idconvers,$pm_contents,$pm_from,$pm_status,$check_pm_before_send=true)
{

if($check_pm_before_send)
{
$info_convers=self::$db_querier->select_single_row(DB_TABLE_PM_TOPIC,array("last_user_id","user_view_pm"),'WHERE id=:id',array('id'=>$pm_idconvers));
if($info_convers['last_user_id']!=$pm_from&&$info_convers['user_view_pm']>0)
{
self::$db_querier->inject("UPDATE ".DB_TABLE_MEMBER." SET unread_pm = unread_pm - '".$info_convers['user_view_pm']."' WHERE user_id = '".$pm_from."'");
self::$db_querier->update(DB_TABLE_PM_TOPIC,array('user_view_pm'=>0),'WHERE id = :id',array('id'=>$pm_idconvers));
}
}


$result=self::$db_querier->insert(DB_TABLE_PM_MSG,array('idconvers'=>$pm_idconvers,'user_id'=>$pm_from,'contents'=>$pm_contents,'timestamp'=>time(),'view_status'=>0));
$pm_msg_id=$result->get_last_inserted_id();


self::$db_querier->inject("UPDATE ".DB_TABLE_PM_TOPIC."  SET user_view_pm = user_view_pm + 1, nbr_msg = nbr_msg + 1, last_user_id = '".$pm_from."', last_msg_id = '".$pm_msg_id."', last_timestamp = '".time()."' WHERE id = '".$pm_idconvers."'");


self::$db_querier->inject("UPDATE ".DB_TABLE_MEMBER." SET unread_pm = unread_pm + 1 WHERE user_id = '".$pm_to."'");

SessionData::recheck_cached_data_from_user_id($pm_to);
return $pm_msg_id;
}









public static function delete_conversation($pm_userid,$pm_idconvers,$pm_expd,$pm_del,$pm_update)
{
$info_convers=self::$db_querier->select_single_row(DB_TABLE_PM_TOPIC,array("user_view_pm","last_user_id"),'WHERE id=:id',array('id'=>$pm_idconvers));
if($pm_update&&$info_convers['last_user_id']!=$pm_userid)
{

if($info_convers['user_view_pm']>0)
self::$db_querier->inject("UPDATE ".DB_TABLE_MEMBER." SET unread_pm = unread_pm - '".$info_convers['user_view_pm']."' WHERE user_id = '".$pm_userid."'");
}

if($pm_expd)
{
if($pm_del)
{
self::$db_querier->delete(DB_TABLE_PM_TOPIC,'WHERE id = :id',array('id'=>$pm_idconvers));
self::$db_querier->delete(DB_TABLE_PM_MSG,'WHERE idconvers = :id',array('id'=>$pm_idconvers));
}
else
self::$db_querier->update(DB_TABLE_PM_TOPIC,array('user_convers_status'=>1),'WHERE id = :id',array('id'=>$pm_idconvers));
}
else
{
if($pm_del)
{
self::$db_querier->delete(DB_TABLE_PM_TOPIC,'WHERE id = :id',array('id'=>$pm_idconvers));
self::$db_querier->delete(DB_TABLE_PM_MSG,'WHERE idconvers = :id',array('id'=>$pm_idconvers));
}
else
self::$db_querier->update(DB_TABLE_PM_TOPIC,array('user_convers_status'=>2),'WHERE id = :id',array('id'=>$pm_idconvers));
}
SessionData::recheck_cached_data_from_user_id($pm_userid);
}








public static function delete($pm_to,$pm_idmsg,$pm_idconvers)
{

self::$db_querier->delete(DB_TABLE_PM_MSG,'WHERE id = :id AND idconvers = :idconvers',array('id'=>$pm_idmsg,'idconvers'=>$pm_idconvers));

$pm_max_id=self::$db_querier->get_column_value(DB_TABLE_PM_MSG,'MAX(id)','WHERE idconvers = :idconvers',array('idconvers'=>$pm_idconvers));
$pm_last_msg=self::$db_querier->select_single_row(DB_TABLE_PM_MSG,array('user_id','timestamp'),'WHERE id=:id',array('id'=>$pm_max_id));

if(!empty($pm_max_id))
{

$user_view_pm=self::$db_querier->get_column_value(DB_TABLE_PM_TOPIC,'user_view_pm','WHERE id = :id',array('id'=>$pm_idconvers));
self::$db_querier->inject("UPDATE ".DB_TABLE_PM_TOPIC."  SET nbr_msg = nbr_msg - 1, user_view_pm = '".($user_view_pm-1)."', last_user_id = '".$pm_last_msg['user_id']."', last_msg_id = '".$pm_max_id."', last_timestamp = '".$pm_last_msg['timestamp']."' WHERE id = '".$pm_idconvers."'");


self::$db_querier->inject("UPDATE ".DB_TABLE_MEMBER." SET unread_pm = unread_pm - 1 WHERE user_id = '".$pm_to."'");
}
SessionData::recheck_cached_data_from_user_id($pm_to);

return $pm_max_id;
}
}
?>
