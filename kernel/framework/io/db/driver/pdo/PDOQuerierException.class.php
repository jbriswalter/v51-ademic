<?php






























class PDOQuerierException extends SQLQuerierException
{
public function __construct($message,PDOStatement $statement)
{
$infos=array();
foreach($statement->errorInfo()as $key=>$info)
{
$infos[]=$key.': '.$info;
}
parent::__construct($message.'. (ERRNO '.$statement->errorCode().') '.
implode('<br />',$infos));
}
}
?>
