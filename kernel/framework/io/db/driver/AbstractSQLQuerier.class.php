<?php
































abstract class AbstractSQLQuerier implements SQLQuerier
{



protected $link;




private $translator;




private $translator_enabled=true;




private $executed_resquests_count=0;

public function __construct(DBConnection $connection,SQLQueryTranslator $translator)
{
$this->link=$connection->get_link();
$this->translator=$translator;
}

function enable_query_translator()
{
$this->translator_enabled=true;
}

function disable_query_translator()
{
$this->translator_enabled=false;
}

public function get_executed_requests_count()
{
return $this->executed_resquests_count;
}

protected function prepare($query)
{
$this->executed_resquests_count++;
if($this->translator_enabled)
{
return $this->translator->translate($query);
}
return $query;
}

public function get_link()
{
return $this->link;
}
}
?>
