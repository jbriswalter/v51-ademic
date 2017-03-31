<?php






























class FormFieldSelectChoiceOption extends AbstractFormFieldEnumOption
{





public function __construct($label,$raw_value,$field_choice_options=array())
{
parent::__construct($label,$raw_value,$field_choice_options);
}




public function display()
{
$tpl_src='<option value="${escape(VALUE)}" # IF C_SELECTED # selected="selected" # ENDIF # # IF C_DISABLE # disabled="disabled" # ENDIF # label="{LABEL}">{LABEL}</option>';

$tpl=new StringTemplate($tpl_src);
$tpl->put_all(array(
'VALUE'=>$this->get_raw_value(),
'C_SELECTED'=>$this->is_active(),
'C_DISABLE'=>$this->is_disable(),
'LABEL'=>$this->get_label()
));

return $tpl;
}
}

?>
