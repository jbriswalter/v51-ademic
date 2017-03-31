<?php































class MalformedUrlMapperRegexException extends DispatcherException
{
public function __construct($regex,$message)
{
parent::__construct('regular expression is malformed: "'.$regex.'"<br />'.$message);
}
}
?>
