<?php




























define('ADMINISTRATOR_ALERT_TYPE',1);






class AdministratorAlertService
{
private static $db_querier;

public static function __static()
{
self::$db_querier=PersistenceContext::get_querier();
}





public static function find_by_id($alert_id)
{

$result=self::$db_querier->select("SELECT id, entitled, fixing_url, current_status, id_in_module, identifier, type, priority, creation_date, description
		FROM ".DB_TABLE_EVENTS."
		WHERE id = :alert_id
		ORDER BY creation_date DESC",array(
'alert_id'=>$alert_id
));

$properties=$result->fetch();

$result->dispose();

if((int)$properties['id']>0)
{

$alert=new AdministratorAlert();
$alert->build($properties['id'],$properties['entitled'],$properties['description'],$properties['fixing_url'],$properties['current_status'],new Date($properties['creation_date'],Timezone::SERVER_TIMEZONE),$properties['id_in_module'],$properties['identifier'],$properties['type'],$properties['priority']);
return $alert;
}
else
{
return null;
}
}









public static function find_by_criteria($id_in_module=null,$type=null,$identifier=null)
{
$criterias=array();

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


if(!empty($criterias))
{
$array_result=array();
$result=self::$db_querier->select("SELECT id, entitled, fixing_url, current_status, creation_date, identifier, id_in_module, type, priority, description
			FROM ".DB_TABLE_EVENTS."
			WHERE contribution_type = '".ADMINISTRATOR_ALERT_TYPE."' AND ".implode($criterias," AND "));

while($row=$result->fetch())
{
$alert=new AdministratorAlert();
$alert->build($row['id'],$row['entitled'],$row['description'],$row['fixing_url'],$row['current_status'],new Date($row['creation_date'],Timezone::SERVER_TIMEZONE),$row['id_in_module'],$row['identifier'],$row['type'],$row['priority']);
$array_result[]=$alert;
}
$result->dispose();

return $array_result;
}

else
{
return AdministratorAlertCache::load()->get_all_alerts_number();
}
}







public static function find_by_identifier($identifier,$type='')
{
$result=self::$db_querier->select("SELECT id, entitled, fixing_url, current_status, creation_date, id_in_module, priority, identifier, type, description
			FROM ".DB_TABLE_EVENTS."
			WHERE identifier = :identifier".(!empty($type)?" AND type = :type":'')." ORDER BY creation_date DESC
			LIMIT 1;",array(
'identifier'=>$identifier,
'type'=>$type
));

if($row=$result->fetch())
{
$alert=new AdministratorAlert();
$alert->build($row['id'],$row['entitled'],$row['description'],$row['fixing_url'],$row['current_status'],new Date($row['creation_date'],Timezone::SERVER_TIMEZONE),$row['id_in_module'],$row['identifier'],$row['type'],$row['priority']);

return $alert;
}
$result->dispose();

return null;
}










public static function get_all_alerts($criteria='creation_date',$order='desc',$begin=0,$number=20)
{
$array_result=array();


$result=self::$db_querier->select("SELECT id, entitled, fixing_url, current_status, creation_date, identifier, id_in_module, type, priority, description
		FROM ".DB_TABLE_EVENTS."
		WHERE contribution_type = ".ADMINISTRATOR_ALERT_TYPE."
		ORDER BY ".$criteria." ".strtoupper($order)."
		LIMIT :pagination_number OFFSET :display_from",array(
'pagination_number'=>$number,
'display_from'=>$begin
));
while($row=$result->fetch())
{
$alert=new AdministratorAlert();
$alert->build($row['id'],$row['entitled'],$row['description'],$row['fixing_url'],$row['current_status'],new Date($row['creation_date'],Timezone::SERVER_TIMEZONE),$row['id_in_module'],$row['identifier'],$row['type'],$row['priority']);
$array_result[]=$alert;
}
$result->dispose();

return $array_result;
}





public static function save_alert($alert)
{

if($alert->get_id()>0)
{

$creation_date=$alert->get_creation_date();

self::$db_querier->update(DB_TABLE_EVENTS,array('entitled'=>$alert->get_entitled(),'description'=>$alert->get_properties(),'fixing_url'=>$alert->get_fixing_url(),'current_status'=>$alert->get_status(),'creation_date'=>$creation_date->get_timestamp(),'id_in_module'=>$alert->get_id_in_module(),'identifier'=>$alert->get_identifier(),'type'=>$alert->get_type(),'priority'=>$alert->get_priority()),'WHERE id = :id',array('id'=>$alert->get_id()));


if($alert->get_must_regenerate_cache())
{
AdministratorAlertCache::invalidate();
$alert->set_must_regenerate_cache(false);
}
}
else
{
$creation_date=new Date();
$result=self::$db_querier->insert(DB_TABLE_EVENTS,array('entitled'=>$alert->get_entitled(),'description'=>$alert->get_properties(),'fixing_url'=>$alert->get_fixing_url(),'current_status'=>$alert->get_status(),'creation_date'=>$creation_date->get_timestamp(),'id_in_module'=>$alert->get_id_in_module(),'identifier'=>$alert->get_identifier(),'type'=>$alert->get_type(),'priority'=>$alert->get_priority()));
$alert->set_id($result->get_last_inserted_id());


AdministratorAlertCache::invalidate();
}
}





public static function delete_alert($alert)
{

if($alert->get_id()>0)
{
self::$db_querier->delete(DB_TABLE_EVENTS,'WHERE id = :id',array('id'=>$alert->get_id()));
$alert->set_id(0);
AdministratorAlertCache::invalidate();
}

}





public static function get_number_unread_alerts()
{
return AdministratorAlertCache::load()->get_unread_alerts_number();
}





public static function get_number_alerts()
{
return AdministratorAlertCache::load()->get_all_alerts_number();
}
}
?>
