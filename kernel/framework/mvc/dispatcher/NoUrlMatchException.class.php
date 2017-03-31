<?php































class NoUrlMatchException extends DispatcherException
{
public function __construct($url)
{
parent::__construct('No pattern matching this url "'.$url.'" in the dispatcher\'s list');
}
}
?>
