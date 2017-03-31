<?php


























class NotYetImplementedException extends Exception
{
public function __construct($message=null)
{
parent::__construct('not yet implemented'.($message!=null?':'.$message:''));
}
}
?>
