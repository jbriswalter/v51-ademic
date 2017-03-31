<?php































class ObjectNotFoundException extends Exception
{
public function __construct($classname,$object_id)
{
parent::__construct('object #'.$object_id.' of class "'.$classname.'" was not found');
}
}
?>
