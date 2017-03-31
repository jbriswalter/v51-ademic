<?php































class AdminNodisplayGraphicalEnvironment extends AbstractGraphicalEnvironment
{



function display($content)
{
self::set_page_localization('');

$this->process_site_maintenance();
$this->check_admin_auth();

echo $content;
}

private function check_admin_auth()
{
if(!AppContext::get_current_user()->is_admin())
{
exit;
}
}
}
?>
