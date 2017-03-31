<?php






























class FormFieldSearch extends FormFieldTextEditor
{
protected $type='search';









public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$this->placeholder=LangLoader::get_message('search','main').'...';
parent::__construct($id,$label,$value,$field_options,$constraints);
}
}
?>
