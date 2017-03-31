<?php






























class JSONBuilder
{
public static function build(array $object)
{
return self::build_array($object);
}

private static function build_array(array $array,$subarray=false)
{
$values=array();
$is_map=self::is_map($array);
foreach($array as $key=>$value)
{
if($is_map)
{
$values[]='"'.$key.'":'.self::build_element($value);
}
else
{
$values[]=self::build_element($value);
}
}
return($subarray?'[':'{').implode(',',$values).($subarray?']':'}');
}

private static function build_element($object)
{
if(is_array($object))
{
return self::build_array($object,true);
}
return self::build_raw_value($object);
}

private static function build_raw_value($value)
{
if(is_bool($value))
{
return $value?'true':'false';
}
elseif(is_int($value))
{
return strval($value);
}
elseif(is_float($value))
{
return strval($value);
}
return TextHelper::to_json_string($value);
}

private static function is_map(array $array)
{
foreach(array_keys($array)as $key)
{
if(is_string($key))
{
return true;
}
}
return false;
}
}
?>
