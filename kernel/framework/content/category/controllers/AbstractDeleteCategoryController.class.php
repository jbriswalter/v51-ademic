<?php































abstract class AbstractDeleteCategoryController extends AdminModuleController
{



protected $form;



private $submit_button;

private $lang;

public function execute(HTTPRequestCustom $request)
{
$this->init();

try{
$category=$this->get_category();
}catch(CategoryNotFoundException $e){
$controller=PHPBoostErrors::unexisting_page();
DispatchManager::redirect($controller);
}

$children=$this->get_category_children($category);
if(empty($children)&&!$this->get_category_items_exists($category))
{
$this->get_categories_manager()->delete($this->get_category()->get_id());
$this->clear_cache();
AppContext::get_response()->redirect($this->get_categories_management_url(),StringVars::replace_vars($this->get_success_message(),array('name'=>$this->get_category()->get_name())));
}

$this->build_form();
$tpl=new StringTemplate('# INCLUDE FORM #');
$tpl->add_lang($this->lang);

if($this->submit_button->has_been_submited()&&$this->form->validate())
{
if($this->form->get_value('delete_category_and_content'))
{
$this->get_categories_manager()->delete($this->get_category()->get_id());
foreach($children as $id=>$category)
{
$this->get_categories_manager()->delete($id);
}
}
else
{
$id_parent=$this->form->get_value('move_in_other_cat')->get_raw_value();
$this->get_categories_manager()->move_items_into_another($category,$id_parent);

$children=$this->get_category_children($category,false);
foreach($children as $id=>$category)
{
$this->get_categories_manager()->move_into_another($category,$id_parent);
}

$this->get_categories_manager()->delete($this->get_category()->get_id());
$categories_cache=$this->get_categories_manager()->get_categories_cache()->get_class();
$categories_cache::invalidate();
}
$this->clear_cache();
AppContext::get_response()->redirect($this->get_categories_management_url(),StringVars::replace_vars($this->get_success_message(),array('name'=>$this->get_category()->get_name())));
}

$tpl->put('FORM',$this->form->display());

return $this->generate_response($tpl);
}

private function init()
{
$this->lang=LangLoader::get('categories-common');
}

private function build_form()
{
$form=new HTMLForm(__CLASS__);

$fieldset=new FormFieldsetHTML('delete_category',$this->get_title());
$fieldset->set_description($this->get_description());
$form->add_fieldset($fieldset);

$fieldset->add_field(new FormFieldCheckbox('delete_category_and_content',$this->lang['delete.category_and_content'],FormFieldCheckbox::UNCHECKED,array('events'=>array('click'=>'
		if (HTMLForms.getField("delete_category_and_content").getValue()) {
			HTMLForms.getField("move_in_other_cat").disable();
		} else { 
			HTMLForms.getField("move_in_other_cat").enable();
		}')
)));


$options=new SearchCategoryChildrensOptions();
$options->add_category_in_excluded_categories($this->get_category()->get_id());
$fieldset->add_field($this->get_categories_manager()->get_select_categories_form_field('move_in_other_cat',$this->lang['delete.move_in_other_cat'],$this->get_category()->get_id_parent(),$options));


$this->submit_button=new FormButtonDefaultSubmit();
$form->add_button($this->submit_button);
$form->add_button(new FormButtonReset());

$this->form=$form;
}

private function get_category_children(Category $category,$enable_recursive_exploration=true)
{
$options=new SearchCategoryChildrensOptions();
$options->add_category_in_excluded_categories($category->get_id());
$options->set_enable_recursive_exploration($enable_recursive_exploration);
return $this->get_categories_manager()->get_children($category->get_id(),$options);
}

private function get_category_items_exists(Category $category)
{
return PersistenceContext::get_querier()->row_exists(
$this->get_categories_manager()->get_categories_items_parameters()->get_table_name_contains_items(),
'WHERE '.$this->get_categories_manager()->get_categories_items_parameters()->get_field_name_id_category().'=:id_category',
array('id_category'=>$category->get_id()
));
}

private function get_category()
{
$id_category=$this->get_id_category();
if(!empty($id_category)&&$this->get_categories_manager()->get_categories_cache()->category_exists($id_category))
{
return $this->get_categories_manager()->get_categories_cache()->get_category($id_category);
}
throw new CategoryNotFoundException($id_category);
}




protected function get_title()
{
return $this->lang['category.delete'];
}




protected function get_description()
{
return $this->lang['delete.description'];
}




protected function get_success_message()
{
return $this->lang['category.message.success.delete'];
}




protected function clear_cache()
{
return true;
}




abstract protected function get_id_category();





abstract protected function generate_response(View $view);




abstract protected function get_categories_manager();




abstract protected function get_categories_management_url();
}
?>
