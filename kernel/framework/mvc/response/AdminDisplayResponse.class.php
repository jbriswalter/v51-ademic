<?php

































class AdminDisplayResponse extends AbstractResponse
{
public function __construct($view)
{
parent::__construct(new AdminDisplayGraphicalEnvironment(),$view);
}
}
?>
