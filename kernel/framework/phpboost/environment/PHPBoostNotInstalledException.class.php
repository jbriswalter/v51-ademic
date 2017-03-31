<?php



























class PHPBoostNotInstalledException extends Exception
{
public function __construct()
{
parent::__construct('PHPBoost is not installed');
}
}
?>
