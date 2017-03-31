<?php































class RawExceptionHandler
{



private $exception;








public function handle($exception)
{
$this->exception=$exception;
$this->clean_output_buffer();
$this->log();
$this->raw_display();
}

private function clean_output_buffer()
{
AppContext::get_response()->clean_output();
}

private function log()
{
$information_to_log=$this->exception->getMessage().
"\n".$this->exception->getTraceAsString();
ErrorHandler::add_error_in_log($information_to_log,$this->exception->getFile(),$this->exception->getLine());
}

private function raw_display()
{
if(Debug::is_debug_mode_enabled())
{
Debug::fatal($this->exception);
}
else
{
die(ErrorHandler::FATAL_MESSAGE);
}
}
}
?>
