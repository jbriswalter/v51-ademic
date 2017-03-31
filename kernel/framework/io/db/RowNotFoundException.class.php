<?php






























class RowNotFoundException extends SQLQuerierException
{
public function __construct()
{
parent::__construct('no rows have been found');
}
}
?>
