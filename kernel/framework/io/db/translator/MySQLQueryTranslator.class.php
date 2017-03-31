<?php































class MySQLQueryTranslator implements SQLQueryTranslator
{



private $query;

public function translate($query)
{
$this->query=$query;

$this->translate_functions();

return $this->query;
}

private function translate_functions()
{
$this->query=preg_replace('`FT_SEARCH\(\s*(.+)\s*,\s*(.+)\s*\)`iU',
'MATCH($1) AGAINST($2)',$this->query);
$this->query=preg_replace('`FT_SEARCH_RELEVANCE\(\s*(.+)\s*,\s*(.+)\s*\)`iU',
'MATCH($1) AGAINST($2)',$this->query);
}
}
?>
