<?php
































class NoSuchControllerException extends DispatcherException
{
public function __construct($controller)
{

parent::__construct('Class "'.$controller.'" is not a valid controller (does not implement Controller)');
}
}
?>
