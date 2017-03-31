<?php






























class ExtendedFieldsService
{
private static $error;
const SORT_BY_ID=1;
const SORT_BY_FIELD_NAME=2;





public static function add(ExtendedField $extended_field)
{
$name=$extended_field->get_name();
$type_field=$extended_field->get_field_type();

$exit_by_type=ExtendedFieldsDatabaseService::check_field_exist_by_type($extended_field);
$class=$extended_field->get_instance();
if($exit_by_type&&$class->get_field_used_once()|| $class->get_field_used_phpboost_configuration()&&$extended_field->get_is_not_installer())
{
self::set_error(LangLoader::get_message('extended-fields-error-phpboost-config','admin-user-common'));
}
else
{
if(!empty($name)&&!empty($type_field))
{
if(!ExtendedFieldsDatabaseService::check_field_exist_by_field_name($extended_field))
{
ExtendedFieldsDatabaseService::add_extended_field($extended_field);

ExtendedFieldsCache::invalidate();
}
else
{
self::set_error(LangLoader::get_message('extended-fields-error-already-exist','admin-user-common'));
}
}
}
}





public static function update(ExtendedField $extended_field)
{
$name=$extended_field->get_name();
$type_field=$extended_field->get_field_type();
if(!empty($name)&&!empty($type_field))
{
if(ExtendedFieldsDatabaseService::check_field_exist_by_id($extended_field))
{
ExtendedFieldsDatabaseService::update_extended_field($extended_field);

ExtendedFieldsCache::invalidate();
}
}
}





public static function delete_by_id($id)
{
if(!empty($id))
{
$extended_field=new ExtendedField();
$extended_field->set_id($id);

if(ExtendedFieldsDatabaseService::check_field_exist_by_id($extended_field))
{
$data=self::data_field($extended_field,self::SORT_BY_ID);
$class=$data->get_instance();

if(!$class->get_field_used_phpboost_configuration()||!$data->get_is_freeze())
{
ExtendedFieldsDatabaseService::delete_extended_field($data);
ExtendedFieldsCache::invalidate();
}
}
}
}





public static function delete_by_field_name($field_name)
{
if(!empty($field_name))
{
$extended_field=new ExtendedField();
$extended_field->set_field_name($field_name);

if(ExtendedFieldsDatabaseService::check_field_exist_by_field_name($extended_field))
{
$data=self::data_field($extended_field,self::SORT_BY_FIELD_NAME);
$class=$data->get_instance();

if(!$class->get_field_used_phpboost_configuration()||!$data->get_is_freeze())
{
ExtendedFieldsDatabaseService::delete_extended_field($data);
ExtendedFieldsCache::invalidate();
}
}
}
}







public static function data_field(ExtendedField $extended_field,$sort=self::SORT_BY_ID)
{
$field_name=$extended_field->get_field_name();
$id=$extended_field->get_id();
if($sort==self::SORT_BY_ID&&$id>0)
{
$data=ExtendedFieldsDatabaseService::select_data_field_by_id($extended_field);
}
else if($sort==self::SORT_BY_FIELD_NAME&&!empty($field_name))
{
$data=ExtendedFieldsDatabaseService::select_data_field_by_field_name($extended_field);
}

if(isset($data))
{
$extended_field->set_name($data['name']);
$extended_field->set_field_name($data['field_name']);
$extended_field->set_position($data['position']);
$extended_field->set_description($data['description']);
$extended_field->set_field_type($data['field_type']);
$extended_field->set_possible_values($data['possible_values']);
$extended_field->set_default_value($data['default_value']);
$extended_field->set_is_required($data['required']);
$extended_field->set_display($data['display']);
$extended_field->set_regex($data['regex']);
$extended_field->set_is_freeze($data['freeze']);
$extended_field->set_authorization($data['auth']);
}
return $extended_field;

}

private static function set_error($error)
{
self::$error=$error;
}




public static function get_error()
{
$error=self::$error;
if(!empty($error))
{
return $error;
}
}
}
?>
