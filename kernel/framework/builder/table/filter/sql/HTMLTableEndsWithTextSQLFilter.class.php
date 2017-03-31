<?php






























class HTMLTableEndsWithTextSQLFilter extends HTMLTableEscapedLikeTextSQLFilter
{



protected function get_value()
{
return '%'.parent::get_value();
}
}

?>
