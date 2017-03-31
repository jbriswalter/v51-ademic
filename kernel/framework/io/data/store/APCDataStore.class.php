<?php


































class APCDataStore implements DataStore
{
private static $website_id=false;

private $cache_id;

private static $apc_fields_id='_apc_fields';

private $apc_fields=array();

public function __construct($cache_id)
{
$this->cache_id=self::get_website_id().'-'.$cache_id;
$this->retrieve_apc_fields();
}




public function get($id)
{
$id=$this->get_full_object_id($id);
$found=false;
$object=apc_fetch($id,$found);
if(!$found)
{
throw new DataStoreException($id);
}
return $object;
}




public function contains($id)
{
$id=$this->get_full_object_id($id);
$found=false;
apc_fetch($id,$found);
return $found;
}




public function store($id,$object)
{
$this->add_apc_field($id);
$id=$this->get_full_object_id($id);
return(bool)apc_store($id,$object);
}




public function delete($id)
{
$this->delete_apc_field($id);
$id=$this->get_full_object_id($id);
return apc_delete($id);
}

private function get_full_object_id($tiny_id)
{
return $this->cache_id.'-'.$tiny_id;
}

private static function get_website_id()
{
if(self::$website_id===false)
{
$website_id_cache_file=PATH_TO_ROOT.'/cache/website_id.cfg';
if(file_exists($website_id_cache_file))
{
self::$website_id=@file_get_contents($website_id_cache_file);
}
if(self::$website_id===false)
{
self::$website_id=substr(md5(realpath(PATH_TO_ROOT)),0,10);
$file=new File($website_id_cache_file);
$file->write(self::$website_id);
$file->close();
}
}
return self::$website_id;
}




public function clear()
{

$apc_fields=$this->apc_fields;
foreach($apc_fields as $apc_field)
{
$this->delete($apc_field);
}
}

private function retrieve_apc_fields()
{
if($this->contains(self::$apc_fields_id))
{
$this->apc_fields=$this->get(self::$apc_fields_id);
}
else
{
$this->apc_fields=array();
}
}

private function add_apc_field($field_name)
{
if(!in_array($field_name,$this->apc_fields))
{
$this->apc_fields[]=$field_name;
$this->store(self::$apc_fields_id,$this->apc_fields);
}
}

private function delete_apc_field($field_name)
{
$value_index=array_search($field_name,$this->apc_fields);
if($value_index!==false)
{
unset($this->apc_fields[$value_index]);
$this->store(self::$apc_fields_id,$this->apc_fields);
}
}
}
?>
