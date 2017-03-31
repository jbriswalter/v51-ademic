<?php

































class AdminNodisplayResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new AdminNodisplayGraphicalEnvironment(),$view);
}
}
?>
