<?php































class SiteNodisplayGraphicalEnvironment extends AbstractGraphicalEnvironment
{



function display($content)
{
self::set_page_localization('');

$this->process_site_maintenance();

echo $content;
}
}
?>
