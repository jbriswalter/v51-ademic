<?php
































interface SQLQuerier
{
const ORDER_BY_ASC='ASC';
const ORDER_BY_DESC='DESC';













function select($query,$parameters=array(),$fetch_mode=SelectQueryResult::FETCH_ASSOC);













function inject($query,$parameters=array());

function enable_query_translator();

function disable_query_translator();

function get_executed_requests_count();
}
?>
