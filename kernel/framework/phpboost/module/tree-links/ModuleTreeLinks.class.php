<?php





























class ModuleTreeLinks
{
private $links=array();

public function add_link(ModuleLink $link)
{
$this->links[]=$link;
}

public function get_links()
{
return $this->links;
}

public function has_links()
{
return!empty($this->links);
}

public function has_visible_links()
{
if(!empty($this->links))
{
foreach($this->links as $link)
{
if($link->is_visible())
return true;
}
return false;
}
else
return false;
}
}
?>
