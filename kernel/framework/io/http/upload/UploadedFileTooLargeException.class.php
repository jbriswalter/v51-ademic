<?php































class UploadedFileTooLargeException extends Exception
{
public function __construct($varname,$filename)
{
parent::__construct('The file '.$filename.' is couldn\'t be uploaded because it\'s too large');
}
}
?>
