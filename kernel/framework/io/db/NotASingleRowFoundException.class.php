<?php






























class NotASingleRowFoundException extends SQLQuerierException
{
public function __construct(SelectQueryResult $query_result)
{
parent::__construct('multiple rows have been found but the query expect only one result<br />-> '.
$query_result->get_query().'<br />'.var_export($query_result->get_parameters(),true));
}
}
?>
