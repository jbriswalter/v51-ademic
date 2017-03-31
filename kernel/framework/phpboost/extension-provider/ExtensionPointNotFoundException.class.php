<?php



























class ExtensionPointNotFoundException extends Exception
{
public function __construct($extension_point)
{
parent::__construct('Extension point "'.$extension_point.'" not found in extension provider');
}
}
?>
