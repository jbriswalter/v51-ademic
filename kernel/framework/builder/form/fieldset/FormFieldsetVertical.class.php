<?php






























class FormFieldsetVertical extends AbstractFormFieldset
{
private static $tpl_src='# INCLUDE ADD_FIELDSET_JS #<div class="vertical-fieldset" id="${escape(HTML_ID)}" # IF C_DISABLED # style="display:none;" # ENDIF #># IF C_DESCRIPTION #<p>${escape(DESCRIPTION)}</p># ENDIF ## START elements # # INCLUDE elements.ELEMENT # # END elements #</div>';

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
