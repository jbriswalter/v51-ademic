<?php





























class UrlSerializedParameterEncoder
{
public static function encode(array $parameters)
{
return self::encode_array_values($parameters);
}

private static function encode_array_values(array $array)
{
$serialized_parameters=array();
foreach($array as $key=>$value)
{
$serialized_parameters[]=self::encode_parameter($key,$value);
}
return join(',',$serialized_parameters);
}

private static function encode_array(array $array)
{
return '{'.self::encode_array_values($array).'}';
}

private static function encode_parameter($key,$value)
{
return self::encode_name($key).self::encode_value($value);
}

private static function encode_name($key)
{
if(is_string($key)&&preg_match('`^[a-z][a-z0-9]*$`i',$key))
{
return $key.':';
}
return '';
}

private static function encode_value($value)
{
if(is_array($value))
{
return self::encode_array($value);
}
else
{
return self::encode_string($value);
}
}

private static function encode_string($value)
{
return addcslashes((string)$value,':{}\\,');
}
}
?>
