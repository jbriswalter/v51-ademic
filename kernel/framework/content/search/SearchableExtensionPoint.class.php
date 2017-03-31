<?php


























interface SearchableExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='search';

function get_search_request($args);





function has_search_options();

function has_customized_results();









}
?>
