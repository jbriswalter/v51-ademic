<?php






























abstract class HTMLTableEscapedLikeTextSQLFilter extends HTMLTableLikeTextSQLFilter
{



protected function set_value($value)
{
parent::set_value(str_replace('%','',$value));
}
}

?>
