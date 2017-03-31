<?php







































interface SelectQueryResult extends QueryResult,iterator
{
const FETCH_NUM=0x00;
const FETCH_ASSOC=0x01;

function set_fetch_mode($fetch_mode);





function get_rows_count();

function has_next();

function fetch();




function dispose();
}
?>
