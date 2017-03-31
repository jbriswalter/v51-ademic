<?php































class GroupsCache implements CacheData
{
private static $default_groups_value=array();

private $groups=array();




public function synchronize()
{
$this->groups=array();
$columns=array('id','name','img','color','auth','members');
$result=PersistenceContext::get_querier()->select_rows(DB_TABLE_GROUP,$columns,'ORDER BY id');
while($row=$result->fetch())
{
$this->groups[$row['id']]=array(
'name'=>$row['name'],
'img'=>$row['img'],
'color'=>$row['color'],
'auth'=>unserialize(stripslashes($row['auth'])),
'members'=>explode('|',$row['members'])
);
}
$result->dispose();
}





public function get_groups()
{
return $this->groups;
}

public function group_exists($group_id)
{
return array_key_exists($group_id,$this->groups);
}

public function group_name_exists($group_name)
{
$exists=false;
foreach($this->groups as $group)
{
$exists=($group['name']==$group_name?true:false);
}
return $exists;
}






public function get_group($group_id)
{
return $this->groups[$group_id];
}





public function set_groups($groups_list)
{
$this->groups=$groups_list;
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','groups');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','groups');
}
}
?>
