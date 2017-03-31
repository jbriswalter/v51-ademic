<?php



























interface UrlMappingsExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='url_mappings';




function list_mappings();
}
?>
