<?php





























class StatsCache implements CacheData
{
private $stats=array();




public function synchronize()
{
$this->stats=array();
$querier=PersistenceContext::get_querier();

$nbr_members=$querier->count(DB_TABLE_MEMBER);
$last_member=$querier->select_single_row(DB_TABLE_MEMBER,array('user_id','display_name','level','groups'),'ORDER BY registration_date DESC LIMIT 1 OFFSET 0');

$this->stats=array(
'nbr_members'=>$nbr_members,
'last_member_login'=>$last_member['display_name'],
'last_member_id'=>$last_member['user_id'],
'last_member_level'=>$last_member['level'],
'last_member_groups'=>$last_member['groups']
);
}

public function get_stats()
{
return $this->stats;
}

public function get_stats_properties($identifier)
{
if(isset($this->stats[$identifier]))
{
return $this->stats[$identifier];
}
return null;
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','stats');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','stats');
}
}
?>
