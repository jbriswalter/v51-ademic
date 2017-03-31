<?php





























class AdministratorAlertCache implements CacheData
{
private $all_administrator_alert;

private $unread_administrator_alert;



public function synchronize()
{
$querier=PersistenceContext::get_querier();

$parameters=array(
'current_status'=>AdministratorAlert::ADMIN_ALERT_STATUS_UNREAD,
'contribution_type'=>ADMINISTRATOR_ALERT_TYPE
);
$this->unread_administrator_alert=$querier->count(DB_TABLE_EVENTS,'WHERE current_status = :current_status AND contribution_type = :contribution_type',$parameters);

$parameters=array('contribution_type'=>ADMINISTRATOR_ALERT_TYPE);
$this->all_administrator_alert=$querier->count(DB_TABLE_EVENTS,'WHERE contribution_type = :contribution_type',$parameters);

}

public function get_all_alerts_number()
{
return $this->all_administrator_alert;
}

public function get_unread_alerts_number()
{
return $this->unread_administrator_alert;
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','administrator-alert');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','administrator-alert');
}
}
?>
