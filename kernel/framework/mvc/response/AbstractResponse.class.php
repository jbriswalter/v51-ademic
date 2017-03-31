<?php

































abstract class AbstractResponse implements Response
{



private $view;




private $graphical_environment;

protected function __construct(GraphicalEnvironment $graphical_environment,View $view)
{
$this->graphical_environment=$graphical_environment;
$this->view=$view;
}

public function get_graphical_environment()
{
return $this->graphical_environment;
}

public function send()
{
$this->graphical_environment->display($this->view->render());
}
}
?>
