<?php









abstract class Type
{



const CODE_BOOL=5;
const CODE_NULL=0;
const CODE_INT=1;
const CODE_STR=2;
const CODE_LOB=3;


protected static $_typeObjects=array();


private static $_typesMap=array(
'array'=>'ArrayType',
'object'=>'ObjectType',
'boolean'=>'BooleanType',
'integer'=>'IntegerType',
'int'=>'IntegerType',
'smallint'=>'SmallIntType',
'bigint'=>'BigIntType',
'string'=>'StringType',
'text'=>'TextType',
'datetime'=>'DateTimeType',
'date'=>'DateType',
'time'=>'TimeType',
'decimal'=>'DecimalType',
'double'=>'DoubleType',
'float'=>'FloatType',
);


protected function __construct(){}









public function convertToDatabaseValue($value,AbstractPlatform $platform)
{
return $value;
}









public function convertToPHPValue($value,AbstractPlatform $platform)
{
return $value;
}






public function getDefaultLength(AbstractPlatform $platform)
{
return null;
}







abstract public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform);







abstract public function getName();






public function getTypeCode()
{
return self::CODE_STR;
}









public static function getType($name)
{
if(!isset(self::$_typeObjects[$name])){
if(!isset(self::$_typesMap[$name])){
throw DoctrineException::unknownColumnType($name);
}

self::$_typeObjects[$name]=new self::$_typesMap[$name]();
}

return self::$_typeObjects[$name];
}










public static function addType($name,$className)
{
if(isset(self::$_typesMap[$name])){
throw DoctrineException::typeExists($name);
}

self::$_typesMap[$name]=$className;
}








public static function hasType($name)
{
return isset(self::$_typesMap[$name]);
}









public static function overrideType($name,$className)
{
if(!isset(self::$_typesMap[$name])){
throw DoctrineException::typeNotFound($name);
}

self::$_typesMap[$name]=$className;
}
}

?>
