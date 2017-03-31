<?php






























class UnsupportedOperationException extends Exception
{
public function __construct($msg='operation is not supported')
{
parent::__construct($msg);
}
}
?>
