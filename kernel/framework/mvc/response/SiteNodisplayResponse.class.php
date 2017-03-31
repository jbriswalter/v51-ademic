<?php

































class SiteNodisplayResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new SiteNodisplayGraphicalEnvironment(),$view);
}
}
?>
