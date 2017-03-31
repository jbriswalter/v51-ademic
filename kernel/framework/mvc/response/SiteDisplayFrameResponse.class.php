<?php































class SiteDisplayFrameResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new SiteDisplayFrameGraphicalEnvironment(),$view);
}
}
?>
