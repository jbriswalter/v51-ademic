<?php






























interface HTMLTableFilter
{
function get_id();

function get_form_field();

function is_value_allowed($value);
}

?>
