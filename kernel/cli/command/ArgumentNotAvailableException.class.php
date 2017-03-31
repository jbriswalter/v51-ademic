<?php


























class ArgumentNotAvailableException extends Exception
{
public function __construct($argument,$possible_value)
{
parent::__construct($argument.' argument is not available. For reminder, the possible value are : '.$possible_value);
}
}
?>
