<?php































class CategoriesItemsParameters
{
private $table_name_contains_items;
private $field_name=self::DEFAULT_FIELD_NAME;

const DEFAULT_FIELD_NAME='id_category';

public function set_table_name_contains_items($table_name)
{
$this->table_name_contains_items=$table_name;
}

public function get_table_name_contains_items()
{
return $this->table_name_contains_items;
}

public function set_field_name_id_category($field_name)
{
$this->field_name=$field_name;
}

public function get_field_name_id_category()
{
return $this->field_name;
}
}
?>
