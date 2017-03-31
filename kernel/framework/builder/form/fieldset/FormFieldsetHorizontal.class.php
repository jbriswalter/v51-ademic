<?php






























class FormFieldsetHorizontal extends AbstractFormFieldset
{
private static $tpl_src='# INCLUDE ADD_FIELDSET_JS #<div id="${escape(HTML_ID)}" class="horizontal-fieldset"# IF C_DISABLED # style="display:none;"# ENDIF #>
	    # IF C_DESCRIPTION #<span class="horizontal-fieldset-desc">${escape(DESCRIPTION)}</span># ENDIF #
	    # START elements #<div class="horizontal-fieldset-element"># INCLUDE elements.ELEMENT #</div># END elements #
    </div>
	<div class="spacer"></div>';

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
