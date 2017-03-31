<?php






























class FormFieldHidden extends AbstractFormField
{
private static $tpl_src='<input type="hidden" id="${escape(HTML_ID)}" name="${escape(HTML_ID)}" value="${escape(VALUE)}">';

public function __construct($id,$value)
{
parent::__construct($id,'',$value);
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_common_template_variables($template);

return $template;
}




public function retrieve_value()
{
$request=AppContext::get_request();
$this->set_value($request->get_value($this->get_html_id(),''));
}

protected function get_default_template()
{
return new StringTemplate(self::$tpl_src);
}
}
?>
