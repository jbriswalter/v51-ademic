<?php































class AdminMenuDisplayResponse extends AbstractResponse
{



private $full_view;
private $links=array();

public function __construct(View $view)
{
$env=new AdminDisplayGraphicalEnvironment();
$this->full_view=new FileTemplate('admin/AdminMenuDisplayResponse.tpl');
$this->full_view->put('content',$view);
$env->display_kernel_message($this->full_view);
parent::__construct($env,$this->full_view);
}

public function set_title($title)
{
$this->full_view->put_all(array('TITLE'=>$title));
}

public function add_link($name,$url)
{
$this->links[]=array(
'LINK'=>$name,
'U_LINK'=>Url::to_rel($url)
);
}

public function send()
{
$this->full_view->put('links',$this->links);
parent::send();
}
}
?>
