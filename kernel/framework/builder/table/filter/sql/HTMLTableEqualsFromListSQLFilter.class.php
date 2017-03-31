<?php






























class HTMLTableEqualsFromListSQLFilter extends HTMLTableEqualsFromListFilter implements SQLFragmentBuilder
{
private static $param_id_index=0;

private $db_field;

public function __construct($db_field,$name,$label,array $allowed_values)
{
$this->db_field=$db_field;
parent::__construct($name,$label,$allowed_values);
}




public function get_sql()
{
$choice_option=$this->get_value();
if($choice_option instanceof FormFieldSelectChoiceOption)
{
$parameter_name=$this->get_sql_value_parameter_prefix().'_'.$this->db_field;
$query=$this->db_field.'=:'.$parameter_name;
$parameters=array($parameter_name=>$this->get_value()->get_raw_value());
return new SQLFragment($query,$parameters);
}
return new SQLFragment();
}

protected function get_sql_value_parameter_prefix()
{
return __CLASS__.'_'.self::$param_id_index++;
}
}

?>
