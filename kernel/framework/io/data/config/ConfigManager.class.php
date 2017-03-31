<?php







































class ConfigManager
{








public static function load($classname,$module_name,$entry_name='')
{
try
{
return CacheManager::try_load($classname,$module_name,$entry_name);
}
catch(CacheDataNotFoundException $ex)
{
$data=null;
try
{
$data=self::load_in_db($module_name,$entry_name);
CacheManager::save($data,$module_name,$entry_name);
}
catch(ConfigNotFoundException $ex)
{
$data=new $classname();
$data->set_default_values();
$name=self::compute_entry_name($module_name,$entry_name);
self::save_in_db($name,$data);
CacheManager::save($data,$module_name,$entry_name);
}
catch(PHPBoostNotInstalledException $ex)
{
$data=new $classname();
$data->set_default_values();
}
catch(MySQLUnexistingDatabaseException $ex)
{
$data=new $classname();
$data->set_default_values();
}
catch(MySQLQuerierException $ex)
{
$data=new $classname();
$data->set_default_values();
}

return $data;
}
}




private static function load_in_db($module_name,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);

try
{
$result=PersistenceContext::get_querier()->select_single_row(DB_TABLE_CONFIGS,array('value'),'WHERE name = :name',array('name'=>$name));
}
catch(RowNotFoundException $ex)
{
throw new ConfigNotFoundException($name);
}

$required_value=@unserialize($result['value']);
if($required_value===false)
{
throw new ConfigNotFoundException($name);
}

return $required_value;
}




private static function compute_entry_name($module_name,$entry_name)
{
if(!empty($entry_name))
{
return Url::encode_rewrite($module_name.'-'.$entry_name);
}
else
{
return Url::encode_rewrite($module_name);
}
}







public static function save($module_name,ConfigData $data,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);

self::save_in_db($name,$data);

CacheManager::save($data,$module_name,$entry_name);
}






public static function delete($module_name,$entry_name='')
{
$name=self::compute_entry_name($module_name,$entry_name);

try{
PersistenceContext::get_querier()->delete(DB_TABLE_CONFIGS,'WHERE name=:name',array('name'=>$name));
}catch(MySQLQuerierException $e){
}

CacheManager::invalidate($module_name,$entry_name);
}

private static function save_in_db($name,ConfigData $data)
{
$serialized_data=serialize($data);

$update=PersistenceContext::get_querier()->inject('UPDATE '.DB_TABLE_CONFIGS.' SET value = :value WHERE name = :name',array('value'=>$serialized_data,'name'=>$name));

if($update->get_affected_rows()==0)
{

$count=PersistenceContext::get_querier()->count(DB_TABLE_CONFIGS,'WHERE name = :name',array('name'=>$name));

if($count==0)
{
PersistenceContext::get_querier()->inject('INSERT INTO '.DB_TABLE_CONFIGS.' (name, value) VALUES (:name, :value)',array('name'=>$name,'value'=>$serialized_data));
}
}
}
}
?>
