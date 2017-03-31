<?php






























class FormFieldRadioChoiceOption extends AbstractFormFieldEnumOption
{
public function __construct($label,$raw_value,$field_choice_options=array())
{
parent::__construct($label,$raw_value,$field_choice_options);
}




public function display()
{
$tpl_src='<div class="form-field-radio"><input id="${escape(ID)}" type="radio" name="${escape(NAME)}" value="${escape(VALUE)}" # IF C_CHECKED # checked="checked" # ENDIF # # IF C_DISABLE # disabled="disabled" # ENDIF #><label for="${escape(ID)}"></label></div><span class="form-field-radio-span"> {LABEL}</span>';

$tpl=new StringTemplate($tpl_src);

$tpl->put_all(array(
'ID'=>$this->get_option_id(),
'NAME'=>$this->get_field_id(),
'VALUE'=>$this->get_raw_value(),
'C_CHECKED'=>$this->is_active(),
'C_DISABLE'=>$this->is_disable(),
'LABEL'=>$this->get_label()
));

return $tpl;
}
}

?>
