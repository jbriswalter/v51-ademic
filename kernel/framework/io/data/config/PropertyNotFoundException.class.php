<?php
































class PropertyNotFoundException extends Exception
{
public function __construct($property_name)
{
parent::__construct('The property "'.$property_name.'" was not found');
}
}
?>
