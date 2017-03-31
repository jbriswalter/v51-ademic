<?php


























define('ADMIN_NOAUTH_DEFAULT',false);
define('GROUP_DEFAULT_IDSELECT','');
define('GROUP_DISABLE_SELECT','disabled="disabled" ');
define('GROUP_DISABLED_ADVANCED_AUTH',true);






class GroupsService
{
private static $db_querier;

public static function __static()
{
self::$db_querier=PersistenceContext::get_querier();
}







public static function add_member($user_id,$idgroup)
{

$user_groups=self::$db_querier->get_column_value(DB_TABLE_MEMBER,'groups','WHERE user_id = :user_id',array('user_id'=>$user_id));
$user_groups=explode('|',$user_groups);
if(!in_array($idgroup,$user_groups))
{
array_push($user_groups,$idgroup);
self::$db_querier->update(DB_TABLE_MEMBER,array('groups'=>(trim(implode('|',$user_groups),'|'))),'WHERE user_id = :user_id',array('user_id'=>$user_id));
}
else
{
return false;
}


$group_members=self::$db_querier->get_column_value(DB_TABLE_GROUP,'members','WHERE id = :id',array('id'=>$idgroup));
$group_members=explode('|',$group_members);
if(!in_array($user_id,$group_members))
{
array_push($group_members,$user_id);
self::$db_querier->update(DB_TABLE_GROUP,array('members'=>(trim(implode('|',$group_members),'|'))),'WHERE id = :id',array('id'=>$idgroup));
}
else
{
return false;
}

return true;
}






public static function edit_member($user_id,$array_user_groups)
{

$user_groups_old=self::$db_querier->get_column_value(DB_TABLE_MEMBER,'groups','WHERE user_id = :user_id',array('user_id'=>$user_id));
$array_user_groups_old=explode('|',$user_groups_old);


$array_diff_pos=array_diff($array_user_groups,$array_user_groups_old);
foreach($array_diff_pos as $key=>$idgroup)
{
if(!empty($idgroup))
{
self::add_member($user_id,$idgroup);
}
}


$array_diff_neg=array_diff($array_user_groups_old,$array_user_groups);
foreach($array_diff_neg as $key=>$idgroup)
{
if(!empty($idgroup))
{
self::remove_member($user_id,$idgroup);
}
}
}





public static function get_groups_names()
{
static $groups_names=null;
if($groups_names===null)
{
$groups_names=array();
$group_config_data=GroupsCache::load();
foreach($group_config_data->get_groups()as $idgroup=>$array_group_info)
{
$groups_names[$idgroup]=$array_group_info['name'];
}
}
return $groups_names;
}





public static function get_groups()
{
static $groups=null;
if($groups===null)
{
$config=GroupsCache::load();
$groups=$config->get_groups();
}
return $groups;
}






public static function remove_member($user_id,$idgroup)
{

$user_groups=self::$db_querier->get_column_value(DB_TABLE_MEMBER,'groups','WHERE user_id = :user_id',array('user_id'=>$user_id));

$user_groups=explode('|',$user_groups);

unset($user_groups[array_search($idgroup,$user_groups)]);

self::$db_querier->update(DB_TABLE_MEMBER,array('groups'=>implode('|',$user_groups)),'WHERE user_id = :user_id',array('user_id'=>$user_id));


$members_group='';
try{
$members_group=self::$db_querier->get_column_value(DB_TABLE_GROUP,'members','WHERE id = :id',array('id'=>$idgroup));
}catch(RowNotFoundException $e){}

$members_group=explode('|',$members_group);

unset($members_group[array_search($user_id,$members_group)]);

self::$db_querier->update(DB_TABLE_GROUP,array('members'=>implode('|',$members_group)),'WHERE id = :id',array('id'=>$idgroup));
}
}
?>
