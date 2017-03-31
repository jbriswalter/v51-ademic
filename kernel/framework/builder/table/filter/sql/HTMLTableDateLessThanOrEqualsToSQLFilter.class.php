<?php






























class HTMLTableDateLessThanOrEqualsToSQLFilter extends HTMLTableDateComparatorSQLFilter
{
protected function get_sql_comparator_symbol()
{
return '<=';
}

protected function get_form_field_class()
{
return 'FormFieldDate';
}
}

?>
