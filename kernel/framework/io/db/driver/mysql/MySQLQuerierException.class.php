<?php






























class MySQLQuerierException extends SQLQuerierException
{
public function __construct($message,$query)
{
$link=PersistenceContext::get_querier()->get_querier()->get_link();
parent::__construct($message.'. (ERRNO '.mysqli_errno($link).') '.mysqli_error($link).'<hr />query: '.$query);
}
}
?>
