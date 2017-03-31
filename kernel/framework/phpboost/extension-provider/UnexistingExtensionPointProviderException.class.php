<?php



























class UnexistingExtensionPointProviderException extends Exception
{
public function __construct($provider)
{
parent::__construct('Extension point provider "'.$provider.'" does not exist');
}
}
?>
