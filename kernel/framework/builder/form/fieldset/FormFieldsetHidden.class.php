<?php






























class FormFieldsetHidden extends AbstractFormFieldset
{
private static $tpl_src='# INCLUDE ADD_FIELDSET_JS #<div style="display:none;" id="${escape(HTML_ID)}"># START elements #	 # INCLUDE elements.ELEMENT # # END elements #</div>';

public function __construct($id,$options=array())
{
parent::__construct($id,$options);
}




public function display()
{
$template=$this->get_template_to_use();

$this->assign_template_fields($template);

return $template;
}

protected function get_default_template()
{
return new StringTemplate(self::$tpl_src);
}
}
?>
