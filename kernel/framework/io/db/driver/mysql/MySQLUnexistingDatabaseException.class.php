<?php






























class MySQLUnexistingDatabaseException extends UnexistingDatabaseException
{
public function __construct()
{
parent::__construct('(ERRNO '.mysqli_connect_errno().') '.mysqli_connect_error());
}
}
?>
