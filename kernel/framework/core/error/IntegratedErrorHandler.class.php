<?php































class IntegratedErrorHandler extends ErrorHandler
{
protected function display_debug()
{
parent::display_debug();
}

protected function display_fatal()
{
AppContext::get_response()->clean_output();
die(ErrorHandler::FATAL_MESSAGE);
}
}
?>
