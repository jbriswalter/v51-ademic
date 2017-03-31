<?php































class FeedsList
{
private $list=array();






public function add_feed($cat_tree,$feed_type)
{
$this->list[$feed_type]=$cat_tree;
}





public function get_feeds_list()
{
return $this->list;
}
}
?>
