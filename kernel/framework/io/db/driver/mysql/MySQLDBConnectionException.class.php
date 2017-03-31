<?php






























class MySQLDBConnectionException extends DBConnectionException
{
public function __construct($message)
{
parent::__construct($message.'. (ERRNO '.mysqli_connect_errno().') '.mysqli_connect_error());
}
}
?>
