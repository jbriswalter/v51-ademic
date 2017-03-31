<?php





























class Arrays
{










public static function find($key,array $values,$default=null)
{
if(array_key_exists($key,$values))
{
return $values[$key];
}
if($default==null)
{
throw new TokenNotFoundException($needle);
}
return $default;
}

public static function remove_key($key,array&$values)
{
if(array_key_exists($key,$values))
{
unset($values[array_search($key,$values)]);
}
}
}
?>
