<?php































abstract class AbstractRichCategoriesFormController extends AbstractCategoriesFormController
{
protected function get_options_fields(FormFieldset $fieldset)
{
$fieldset->add_field(new FormFieldRichTextEditor('description',$this->common_lang['form.description'],$this->get_category()->get_description()));

$fieldset->add_field(new FormFieldUploadPictureFile('image',$this->common_lang['form.picture'],$this->get_category()->get_image()->relative()));
}

protected function set_properties()
{
parent::set_properties();
$this->get_category()->set_description($this->form->get_value('description'));
$this->get_category()->set_image(new Url($this->form->get_value('image')));
}
}
?>
