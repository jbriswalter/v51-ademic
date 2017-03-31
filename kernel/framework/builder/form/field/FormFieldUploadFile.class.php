<?php































class FormFieldUploadFile extends AbstractFormField
{








public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$constraints[]=new FormFieldConstraintUrlExists(LangLoader::get_message('form.unexisting_file','status-messages-common'));
parent::__construct($id,$label,$value,$field_options,$constraints);
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

$file_type=new FileType(new File($this->get_value()));

$template->put_all(array(
'C_PREVIEW_HIDDEN'=>!$file_type->is_picture(),
'C_AUTH_UPLOAD'=>FileUploadConfig::load()->is_authorized_to_access_interface_files(),
'FILE_PATH'=>Url::to_rel($this->get_value()),
));

return $template;
}

protected function get_default_template()
{
return new FileTemplate('framework/builder/form/FormFieldUploadFile.tpl');
}
}
?>
