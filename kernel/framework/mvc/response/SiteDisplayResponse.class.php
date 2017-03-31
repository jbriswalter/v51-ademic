<?php































class SiteDisplayResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new SiteDisplayGraphicalEnvironment(),$view);
}
}
?>
