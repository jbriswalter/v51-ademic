<?php































class ExceptionHandler
{



private $exception;








public function handle($exception)
{
$this->exception=$exception;
$this->clean_output_buffer();
$this->log();
$this->display();
$this->destroy_app();
}

private function clean_output_buffer()
{
AppContext::get_response()->clean_output();
}

private function log()
{
ErrorHandler::add_error_in_log($this->exception->getMessage(),Debug::get_stacktrace_as_string(0,$this->exception),E_USER_ERROR);
}

private function display()
{
if(Debug::is_debug_mode_enabled())
{
$this->raw_display();
}
else
{
$controller=$this->prepare_controller();
$this->send_response($controller);
}
}

private function destroy_app()
{
Environment::destroy();
exit;
}

private function raw_display()
{
if(Debug::is_debug_mode_enabled())
{
Debug::fatal($this->exception);
}
else
{
echo ErrorHandler::FATAL_MESSAGE;
}
}

private function prepare_controller()
{
$title=LangLoader::get_message('error','status-messages-common');

if($this->exception!==null&&Debug::is_debug_mode_enabled())
{
$message=TextHelper::htmlspecialchars($this->exception->getMessage()).'<br /><br /><i>'.
$this->exception->getFile().':'.$this->exception->getLine().
'</i><div class="spacer"></div>'.
Debug::get_stacktrace_as_string(0,$this->exception);
$title.=' '.$this->exception->getCode();
}
else
{
$message=TextHelper::htmlspecialchars(LangLoader::get_message('process.error','status-messages-common'));
}

$controller=new UserErrorController($title,$message,UserErrorController::FATAL);
return $controller;
}

private function send_response(Controller $controller)
{
try
{
$this->integrated_display($controller);
}
catch(Exception $exception)
{
$this->clean_output_buffer();
$this->raw_display();
}
}

private function integrated_display(Controller $controller)
{
$request=AppContext::get_request();
$response=$controller->execute($request);
$response->send();
}
}
?>
