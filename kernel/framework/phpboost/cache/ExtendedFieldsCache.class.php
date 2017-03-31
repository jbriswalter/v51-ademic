<?php





























class ExtendedFieldsCache implements CacheData
{
private $extended_fields=array();




public function synchronize()
{
$this->extended_fields=array();
$querier=PersistenceContext::get_querier();

$result=$querier->select_rows(DB_TABLE_MEMBER_EXTENDED_FIELDS_LIST,array('*'),'ORDER BY position');
while($row=$result->fetch())
{
$auth=unserialize($row['auth']);
$possible_values=unserialize($row['possible_values']);

$this->extended_fields[$row['id']]=array(
'id'=>$row['id'],
'position'=>!empty($row['position'])?$row['position']:'',
'name'=>!empty($row['name'])?$row['name']:'',
'field_name'=>!empty($row['field_name'])?$row['field_name']:'',
'description'=>!empty($row['description'])?$row['description']:'',
'field_type'=>!empty($row['field_type'])?$row['field_type']:'',
'possible_values'=>!empty($possible_values)?$possible_values:array(),
'default_value'=>!empty($row['default_value'])?$row['default_value']:'',
'required'=>!empty($row['required'])?(bool)$row['required']:false,
'display'=>!empty($row['display'])?(bool)$row['display']:false,
'freeze'=>!empty($row['freeze'])?(bool)$row['freeze']:false,
'regex'=>!empty($row['regex'])?$row['regex']:'',
'auth'=>!empty($auth)?$auth:array()
);
}
$result->dispose();
}

public function get_extended_fields()
{
return $this->extended_fields;
}

public function get_exist_fields()
{
return(count($this->extended_fields)>0);
}

public function get_extended_field($id)
{
if(isset($this->extended_fields[$id]))
{
return $this->extended_fields[$id];
}
return null;
}

public function get_extended_field_by_field_name($field_name)
{
$field=null;

foreach($this->extended_fields as $id=>$field_options)
{
if($field_options['field_name']==$field_name)
{
$field=$this->extended_fields[$id];
}
}

return $field;
}

public function get_websites_or_emails_extended_field_field_types()
{
$list=array();

foreach($this->extended_fields as $id=>$field_options)
{
if($field_options['regex']==4 || $field_options['regex']==5)
{
$list[]=$field_options['field_name'];
}
}

return $list;
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','extended-fields');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','extended-fields');
}
}
?>
