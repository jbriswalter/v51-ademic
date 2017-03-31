<?php






























abstract class AbstractShare implements ShareInterface
{
public $template=null;

public function set_template(View $template)
{
$this->template=$template;
}

public function get_template()
{
return $this->template;
}

public function display()
{
if($this->template!==null)
{
$this->assign_vars();
return $this->get_template()->display();
}
}

public function render()
{
if($this->template!==null)
{
$this->assign_vars();
return $this->get_template()->render();
}
}
}
?>
