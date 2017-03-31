<?php


























class FeedsCategoriesModule
{



private $categories_manager;

public function __construct(CategoriesManager $categories_manager)
{
$this->categories_manager=$categories_manager;
}

public function get_feed_list()
{
$module_id=$this->categories_manager->get_module_id();
$list=new FeedsList();
$cats_tree=new FeedsCat($module_id,0,LangLoader::get_message('root','main'));
$categories=$this->categories_manager->get_categories_cache()->get_categories();
$this->build_feeds_sub_list($module_id,$categories,$cats_tree,0);
$list->add_feed($cats_tree,Feed::DEFAULT_FEED_NAME);

return $list;
}

public function build_feeds_sub_list($module_id,$categories,FeedsCat $tree,$parent_id)
{
$id_categories=array_keys($categories);
$num_cats=count($id_categories);

for($i=0;$i<$num_cats;$i++)
{
$id=$id_categories[$i];
$category=&$categories[$id];
if($id!=0&&$category->get_id_parent()==$parent_id)
{
$sub_tree=new FeedsCat($module_id,$id,$category->get_name());
$this->build_feeds_sub_list($module_id,$categories,$sub_tree,$id);
$tree->add_child($sub_tree);
}
}
}
}
?>
