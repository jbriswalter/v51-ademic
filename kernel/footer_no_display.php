<?php


























if(defined('PHPBOOST')!==true)
{
exit;
}

AppContext::get_response()->clean_output();
$content=AppContext::get_response()->get_previous_ob_content();
Environment::display($content);
Environment::destroy();
?>
