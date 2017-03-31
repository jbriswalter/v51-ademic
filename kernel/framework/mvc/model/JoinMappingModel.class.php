<?php


























class JoinMappingModel
{
private $table_name;
private $fk_db_field_name;
private $primary_key;
private $fields;

public function __construct($table_name,$fk_db_field_name,MappingModelField $primary_key,
$fields)
{
$this->table_name=$table_name;

$this->fk_db_field_name=$fk_db_field_name;
$this->primary_key=$primary_key;
$this->fields=$fields;

if(empty($this->fields))
{
throw new MappingModelException($this->classname,'fields list can not be empty');
}
}




public function get_table_name()
{
return $this->table_name;
}




public function get_fk_db_field_name()
{
return $this->fk_db_field_name;
}




public function get_primary_key()
{
return $this->primary_key;
}




public function get_fields()
{
return $this->fields;
}
}
?>
