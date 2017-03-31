<?php


























abstract class AbstractSearchableExtensionPoint implements SearchableExtensionPoint
{
private $has_search_options;
private $has_customized_results;

public function __construct($has_search_options=false,$has_customized_results=false)
{
$this->has_search_options=$has_search_options;
$this->has_customized_results=$has_customized_results;
}




public function has_search_options()
{
return $this->has_search_options;
}

public function has_customized_results()
{
return $this->has_customized_results;
}
}
?>
