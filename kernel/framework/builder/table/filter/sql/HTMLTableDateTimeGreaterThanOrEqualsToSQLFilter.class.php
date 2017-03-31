<?php






























class HTMLTableDateTimeGreaterThanOrEqualsToSQLFilter extends HTMLTableDateComparatorSQLFilter
{
protected function get_sql_comparator_symbol()
{
return '>=';
}

protected function get_form_field_class()
{
return 'FormFieldDateTime';
}
}

?>
