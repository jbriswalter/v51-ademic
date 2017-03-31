<?php

































class ConfigNotFoundException extends Exception
{
public function __construct($config_name)
{
parent::__construct('The configuration "'.$config_name.'" was not found in the database');
}
}
?>
