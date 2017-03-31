<?php


























class FileTemplateRenderingException extends Exception
{
public function __construct($file_identifier,Exception $exception)
{
$message='template '.$file_identifier."\n".$exception->getMessage();
parent::__construct($message);
}
}
?>
