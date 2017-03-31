<?php


























class ExtendedFields implements ExtendedFieldExtensionPoint
{
private $extended_fields=array();

public function __construct(Array $extended_fields)
{
$this->extended_fields=$extended_fields;
}

public function get_extended_fields()
{
return $this->extended_fields;
}
}
?>
