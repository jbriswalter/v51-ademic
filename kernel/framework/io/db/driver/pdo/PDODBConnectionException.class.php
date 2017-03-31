<?php






























class PDODBConnectionException extends DBConnectionException
{
public function __construct($message,PDO $pdo)
{
$infos=array();
foreach($pdo->errorInfo()as $key=>$info)
{
$infos[]=$key.': '.$info;
}
parent::__construct($message.'. (ERRNO '.$pdo->errorCode().') '.
implode('<br />',$infos));
}
}
?>
