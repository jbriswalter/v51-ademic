<?php































class FeedsCat
{
private $id=0;
private $cat_name='';
private $module_id='';
private $children=array();







public function __construct($module_id,$category_id,$category_name)
{
$this->id=$category_id;
$this->module_id=$module_id;
$this->cat_name=$category_name;
}






public function get_url($feed_type='')
{
$url=DispatchManager::get_url('/syndication','/rss/'.$this->module_id.'/'.$this->id.'/'.$feed_type.'/');
return $url->relative();
}





public function get_module_id()
{
return $this->module_id;
}






public function get_category_id()
{
return $this->id;
}





public function get_category_name()
{
return $this->cat_name;
}





public function add_child($child)
{
$this->children[]=$child;
}





public function get_children()
{
return $this->children;
}
}
?>
