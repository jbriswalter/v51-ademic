<?php































class AdminDisplayFrameResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new AdminDisplayFrameGraphicalEnvironment(),$view);
}
}
?>
