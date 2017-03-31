<?php


































class ContributionService
{
const CONTRIBUTION_TYPE=0;

private static $db_querier;

public static function __static()
{
self::$db_querier=PersistenceContext::get_querier();
}






public static function find_by_id($id_contrib)
{
$result=self::$db_querier->select("SELECT id, entitled, fixing_url, module, current_status, creation_date, fixing_date, auth, poster_id, fixer_id, id_in_module, identifier, type, poster_member.display_name poster_login, poster_member.level poster_level, poster_member.groups poster_groups, fixer_member.display_name fixer_login, fixer_member.level fixer_level, fixer_member.groups fixer_groups, description
		FROM ".DB_TABLE_EVENTS." c
		LEFT JOIN ".DB_TABLE_MEMBER." poster_member ON poster_member.user_id = c.poster_id
		LEFT JOIN ".DB_TABLE_MEMBER." fixer_member ON fixer_member.user_id = c.poster_id
		WHERE id = :id AND contribution_type = :contribution_type
		ORDER BY creation_date DESC",array(
'id'=>$id_contrib,
'contribution_type'=>self::CONTRIBUTION_TYPE
));

$properties=$result->fetch();

$result->dispose();

if((int)$properties['id']>0)
{
$contribution=new Contribution();
$contribution->build($properties['id'],$properties['entitled'],$properties['description'],$properties['fixing_url'],$properties['module'],$properties['current_status'],new Date($properties['creation_date'],Timezone::SERVER_TIMEZONE),new Date($properties['fixing_date'],Timezone::SERVER_TIMEZONE),unserialize($properties['auth']),$properties['poster_id'],$properties['fixer_id'],$properties['id_in_module'],$properties['identifier'],$properties['type'],$properties['poster_login'],$properties['fixer_login'],$properties['poster_level'],$properties['fixer_level'],$properties['poster_groups'],$properties['fixer_groups']);
return $contribution;
}
else
{
return null;
}
}









public static function get_all_contributions($criteria='creation_date',$order='desc')
{
$array_result=array();


$result=self::$db_querier->select("SELECT id, entitled, fixing_url, auth, current_status, module, creation_date, fixing_date, poster_id, fixer_id, poster_member.display_name poster_login, poster_member.level poster_level, poster_member.groups poster_groups, fixer_member.display_name fixer_login, fixer_member.level fixer_level, fixer_member.groups fixer_groups, identifier, id_in_module, type, description
		FROM ".DB_TABLE_EVENTS." c
		LEFT JOIN ".DB_TABLE_MEMBER." poster_member ON poster_member.user_id = c.poster_id
		LEFT JOIN ".DB_TABLE_MEMBER." fixer_member ON fixer_member.user_id = c.fixer_id
		WHERE contribution_type = :contribution_type
		ORDER BY ".$criteria." ".strtoupper($order).", creation_date DESC",array(
'contribution_type'=>self::CONTRIBUTION_TYPE
));
while($row=$result->fetch())
{
$contri=new Contribution();

$contri->build($row['id'],$row['entitled'],$row['description'],$row['fixing_url'],$row['module'],$row['current_status'],new Date($row['creation_date'],Timezone::SERVER_TIMEZONE),new Date($row['fixing_date'],Timezone::SERVER_TIMEZONE),unserialize($row['auth']),$row['poster_id'],$row['fixer_id'],$row['id_in_module'],$row['identifier'],$row['type'],$row['poster_login'],$row['fixer_login'],$row['poster_level'],$row['fixer_level'],$row['poster_groups'],$row['fixer_groups']);
$array_result[]=$contri;
}
$result->dispose();

return $array_result;
}












public static function find_by_criteria($module,$id_in_module=null,$type=null,$identifier=null,$poster_id=null,$fixer_id=null)
{
$criterias=array();


if(empty($module)||!is_string($module))
{
return array();
}

$criterias[]="module = '".TextHelper::strprotect($module)."'";

if($id_in_module!=null)
{
$criterias[]="id_in_module = '".intval($id_in_module)."'";
}

if($type!=null)
{
$criterias[]="type = '".TextHelper::strprotect($type)."'";
}

if($identifier!=null)
{
$criterias[]="identifier = '".TextHelper::strprotect($identifier)."'";
}

if($poster_id!=null)
{
$criterias[]="poster_id = '".intval($poster_id)."'";
}

if($fixer_id!=null)
{
$criterias[]="fixer_id = '".intval($fixer_id)."'";
}

$array_result=array();

$result=self::$db_querier->select("SELECT id, entitled, fixing_url, auth, current_status, module, creation_date, fixing_date, poster_id, fixer_id, poster_member.display_name poster_login, fixer_member.display_name fixer_login, identifier, id_in_module, type, description
		FROM ".DB_TABLE_EVENTS." c
		LEFT JOIN ".DB_TABLE_MEMBER." poster_member ON poster_member.user_id = c.poster_id
		LEFT JOIN ".DB_TABLE_MEMBER." fixer_member ON fixer_member.user_id = c.fixer_id
		WHERE contribution_type = '".self::CONTRIBUTION_TYPE."' AND ".implode(" AND ",$criterias));

while($row=$result->fetch())
{
$contri=new Contribution();
$contri->build($row['id'],$row['entitled'],$row['description'],$row['fixing_url'],$row['module'],$row['current_status'],new Date($row['creation_date'],Timezone::SERVER_TIMEZONE),new Date($row['fixing_date']),unserialize($row['auth']),$row['poster_id'],$row['fixer_id'],$row['id_in_module'],$row['identifier'],$row['type'],$row['poster_login'],$row['fixer_login']);
$array_result[]=$contri;
}
$result->dispose();

return $array_result;
}





public static function save_contribution($contribution)
{

if($contribution->get_id()>0)
{

$creation_date=$contribution->get_creation_date();
$fixing_date=$contribution->get_fixing_date();

self::$db_querier->update(DB_TABLE_EVENTS,array('entitled'=>$contribution->get_entitled(),'description'=>$contribution->get_description(),'fixing_url'=>$contribution->get_fixing_url(),'module'=>$contribution->get_module(),'current_status'=>$contribution->get_status(),'creation_date'=>$creation_date->get_timestamp(),'fixing_date'=>$fixing_date->get_timestamp(),'auth'=>serialize($contribution->get_auth()),'poster_id'=>$contribution->get_poster_id(),'fixer_id'=>$contribution->get_fixer_id(),'id_in_module'=>$contribution->get_id_in_module(),'identifier'=>$contribution->get_identifier(),'type'=>$contribution->get_type()),'WHERE id = :id',array('id'=>$contribution->get_id()));
}
else
{
$creation_date=$contribution->get_creation_date();
$result=self::$db_querier->insert(DB_TABLE_EVENTS,array('entitled'=>$contribution->get_entitled(),'description'=>$contribution->get_description(),'fixing_url'=>$contribution->get_fixing_url(),'module'=>$contribution->get_module(),'current_status'=>$contribution->get_status(),'creation_date'=>$creation_date->get_timestamp(),'fixing_date'=>0,'auth'=>serialize($contribution->get_auth()),'poster_id'=>$contribution->get_poster_id(),'fixer_id'=>$contribution->get_fixer_id(),'id_in_module'=>$contribution->get_id_in_module(),'identifier'=>$contribution->get_identifier(),'type'=>$contribution->get_type(),'contribution_type'=>self::CONTRIBUTION_TYPE));
$contribution->set_id($result->get_last_inserted_id());
}


if($contribution->get_must_regenerate_cache())
{
UnreadContributionsCache::invalidate();
$contribution->set_must_regenerate_cache(false);
}
}





public static function delete_contribution($contribution)
{

if($contribution->get_id()>0)
{
self::$db_querier->delete(DB_TABLE_EVENTS,'WHERE id = :id',array('id'=>$contribution->get_id()));

$contribution->set_id(0);


UnreadContributionsCache::invalidate();
}
}





public static function delete_contribution_module($module_id)
{
self::$db_querier->delete(DB_TABLE_EVENTS,'WHERE module = :module_id',array('module_id'=>$module_id));
}




public static function generate_cache()
{
UnreadContributionsCache::invalidate();
}













public static function compute_number_contrib_for_each_profile()
{
$array_result=array('r2'=>0,'r1'=>0,'r0'=>0);

$result=self::$db_querier->select("SELECT auth FROM ".DB_TABLE_EVENTS."
		WHERE current_status = :current_status AND contribution_type = :contribution_type",array(
'current_status'=>Event::EVENT_STATUS_UNREAD,
'contribution_type'=>self::CONTRIBUTION_TYPE
));
while($row=$result->fetch())
{
if(!($this_auth=@unserialize($row['auth'])))
{
$this_auth=array();
}




$array_result['r2']++;


if(Authorizations::check_auth(RANK_TYPE,User::MODERATOR_LEVEL,$this_auth,Contribution::CONTRIBUTION_AUTH_BIT))
{
$array_result['r1']++;
}


if(Authorizations::check_auth(RANK_TYPE,User::MEMBER_LEVEL,$this_auth,Contribution::CONTRIBUTION_AUTH_BIT))
{
$array_result['r0']++;
}

foreach($this_auth as $profile=>$auth_profile)
{

if(is_numeric($profile))
{

if(empty($array_result[$profile])&&Authorizations::check_auth(GROUP_TYPE,(int)$profile,$this_auth,Contribution::CONTRIBUTION_AUTH_BIT))
{
$array_result['g'.$profile]=1;
}
}

elseif(substr($profile,0,1)=='m')
{

if(empty($array_result[$profile])&&Authorizations::check_auth(USER_TYPE,(int)substr($profile,1),$this_auth,Contribution::CONTRIBUTION_AUTH_BIT))
{
$array_result[$profile]=1;
}
}
}
}
$result->dispose();

return $array_result;
}
}
?>
