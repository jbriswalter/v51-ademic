<?php



























class UrlMappings implements UrlMappingsExtensionPoint
{
private $mappings;




public function __construct(array $mappings)
{
$this->mappings=$mappings;
}




public function list_mappings()
{
return $this->mappings;
}
}
?>
