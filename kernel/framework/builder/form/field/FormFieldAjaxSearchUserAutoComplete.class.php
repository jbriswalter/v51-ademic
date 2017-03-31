<?php






























class FormFieldAjaxSearchUserAutoComplete extends FormFieldAjaxCompleter
{
protected $display_html_in_suggestions=true;


protected $preserve_input='true';


protected $no_suggestion_notice='true';

















public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$field_options['file']=TPL_PATH_TO_ROOT.'/kernel/framework/ajax/dispatcher.php?url=/search_users_autocomplete&token='.AppContext::get_session()->get_token();
parent::__construct($id,$label,$value,$field_options,$constraints);
}
}
?>
