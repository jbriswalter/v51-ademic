<?php


























class MemberHalfLongTextExtendedField extends AbstractMemberExtendedField
{
public function __construct()
{
parent::__construct();
$this->set_disable_fields_configuration(array('possible_values'));
$this->set_name(LangLoader::get_message('type.half-text','admin-user-common'));
}

public function display_field_create(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$fieldset->add_field(new FormFieldShortMultiLineTextEditor($member_extended_field->get_field_name(),$member_extended_field->get_name(),$member_extended_field->get_default_value(),array(
'required'=>(bool)$member_extended_field->get_required(),'rows'=>4,'cols'=>47,'description'=>$member_extended_field->get_description()),
array($this->constraint($member_extended_field->get_regex()))
));
}

public function display_field_update(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$fieldset->add_field(new FormFieldShortMultiLineTextEditor($member_extended_field->get_field_name(),$member_extended_field->get_name(),$member_extended_field->get_value(),array(
'required'=>(bool)$member_extended_field->get_required(),'rows'=>4,'cols'=>47,'description'=>$member_extended_field->get_description()),
array($this->constraint($member_extended_field->get_regex()))
));
}
}
?>
