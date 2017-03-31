<?php




















function string_var_export($var){return var_export($var,true);}












class DoctrineException extends Exception
{




private static $_messages=array();







public function __construct($message="",Exception $cause=null)
{
$code=($cause instanceof Exception)?$cause->getCode():0;


parent::__construct($message,$code);
}









public static function notImplemented($method=null,$class=null)
{
if($method&&$class){
return new self("The method '$method' is not implemented in class '$class'.");
}else if($method&&!$class){
return new self($method);
}else{
return new self('Functionality is not implemented.');
}
}













public static function __callStatic($method,$arguments=array())
{
$class=get_called_class();
$messageKey=substr($class,strrpos($class,'\\')+1)."#$method";

$end=end($arguments);
$innerException=null;

if($end instanceof Exception){
$innerException=$end;
unset($arguments[count($arguments)-1]);
}

if(($message=self::getExceptionMessage($messageKey))!==false){
$message=sprintf($message,$arguments);
}else{
$dumper='string_var_export';
$message=strtolower(preg_replace('~(?<=\\w)([A-Z])~','_$1',$method));
$message=ucfirst(str_replace('_',' ',$message))
.' ('.implode(', ',array_map($dumper,$arguments)).')';
}

return new $class($message,$innerException);
}








public static function getExceptionMessage($messageKey)
{
if(!self::$_messages){

self::$_messages=array(
'DoctrineException#partialObjectsAreDangerous'=>
"Loading partial objects is dangerous. Fetch full objects or consider ".
"using a different fetch mode. If you really want partial objects, ".
"set the doctrine.forcePartialLoad query hint to TRUE.",
'QueryException#nonUniqueResult'=>
"The query contains more than one result."
);
}

if(isset(self::$_messages[$messageKey])){
return self::$_messages[$messageKey];
}

return false;
}

public static function unknownColumnType($type)
{
return new DoctrineException('Unknown column type "'.$type.'"');
}

public static function typeExists($type)
{
return new DoctrineException('Unknown column type "'.$type.'"');
}
}
