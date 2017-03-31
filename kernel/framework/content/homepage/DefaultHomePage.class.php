<?php


























class DefaultHomePage implements HomePage
{
private $title;
private $view;

public function __construct($title,View $view)
{
$this->title=$title;
$this->view=$view;
}

public function get_title()
{
return $this->title;
}

public function get_view()
{
return $this->view;
}
}
?>
