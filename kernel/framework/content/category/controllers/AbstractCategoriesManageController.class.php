<?php































abstract class AbstractCategoriesManageController extends AdminModuleController
{
protected $lang;
protected $tpl;

public function execute(HTTPRequestCustom $request)
{
$this->init();

$this->update_positions($request);

$this->build_view();

return $this->generate_response($this->tpl);
}

private function init()
{
$this->lang=LangLoader::get('categories-common');
$this->tpl=new FileTemplate('default/framework/content/categories/manage.tpl');
$this->tpl->add_lang($this->lang);
}

private function build_view()
{
$categories_cache=$this->get_categories_manager()->get_categories_cache()->get_class();
$categories=$categories_cache::load()->get_categories();

$number_categories=count($categories);

$this->tpl->put_all(array(
'C_NO_CATEGORIES'=>$number_categories<=1,
'C_MORE_THAN_ONE_CATEGORY'=>$number_categories>2,
'FIELDSET_TITLE'=>$this->get_title()
));

$this->build_children_view($this->tpl,$categories,Category::ROOT_CATEGORY);
}

private function build_children_view($template,$categories,$id_parent)
{
foreach($categories as $id=>$category)
{
if($category->get_id_parent()==$id_parent&&$id!=Category::ROOT_CATEGORY)
{
$description='';
if(method_exists($category,'get_description'))
{
$description=FormatingHelper::second_parse($category->get_description());
$description=strlen($description)>250?substr(@strip_tags($description,'<br><br/>'),0,250).'...':$description;
}

$description_exists=method_exists($category,'get_description');
$category_view=new FileTemplate('default/framework/content/categories/category.tpl');
$category_view->add_lang($this->lang);
$category_view->put_all(array(
'C_DESCRIPTION'=>!empty($description),
'C_ALLOWED_TO_HAVE_CHILDS'=>$category->is_allowed_to_have_childs(),
'U_DISPLAY'=>$this->get_display_category_url($category)->rel(),
'U_EDIT'=>$this->get_edit_category_url($category)->rel(),
'U_DELETE'=>$this->get_delete_category_url($category)->rel(),
'ID'=>$id,
'NAME'=>$category->get_name(),
'DESCRIPTION'=>$description,
'DELETE_CONFIRMATION_MESSAGE'=>StringVars::replace_vars($this->get_delete_confirmation_message(),array('name'=>$category->get_name()))
));

$this->build_children_view($category_view,$categories,$id);

$template->assign_block_vars('children',array('child'=>$category_view->render()));
}
}
}

private function update_positions(HTTPRequestCustom $request)
{
if($request->get_postvalue('submit',false))
{
$categories=json_decode(TextHelper::html_entity_decode($request->get_value('tree')));
$categories_cache=$this->get_categories_manager()->get_categories_cache();

foreach($categories as $position=>$tree)
{
$id=$tree->id;
$children=$tree->children[0];
$category=$categories_cache->get_category($id);

$this->get_categories_manager()->update_position($category,Category::ROOT_CATEGORY,($position+1));

$this->update_children_positions($children,$category->get_id());
}

$categories_cache::invalidate();

$this->tpl->put('MSG',MessageHelper::display(LangLoader::get_message('message.success.position.update','status-messages-common'),MessageHelper::SUCCESS,5));
}
}

private function update_children_positions($categories,$id_parent)
{
if(!empty($categories))
{
foreach($categories as $position=>$tree)
{
if(is_int($position))
{
$id=$tree->id;
$children=$tree->children[0];
$category=$this->get_categories_manager()->get_categories_cache()->get_category($id);

$this->get_categories_manager()->update_position($category,$id_parent,($position+1));

$this->update_children_positions($children,$category->get_id());
}
}
}
}




protected function get_title()
{
return $this->lang['categories.management'];
}




protected function get_delete_confirmation_message()
{
return $this->lang['category.message.delete_confirmation'];
}





abstract protected function generate_response(View $view);




abstract protected function get_categories_manager();





abstract protected function get_display_category_url(Category $category);





abstract protected function get_edit_category_url(Category $category);





abstract protected function get_delete_category_url(Category $category);
}
?>
