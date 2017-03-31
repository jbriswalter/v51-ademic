<?php
































class CacheDataNotFoundException extends Exception
{
public function __construct($config_name)
{
parent::__construct('The cache data identified by "'.$config_name.'" doesn\'t exist');
}
}
?>
