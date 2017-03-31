<?php


























class MemberUserPMToMailExtendedField extends AbstractMemberExtendedField
{
public function __construct()
{
parent::__construct();
$this->set_disable_fields_configuration(array('field_required','regex','possible_values','default_value'));
$this->set_name(LangLoader::get_message('type.user_pmtomail','admin-user-common'));
$this->field_used_once=true;
$this->field_used_phpboost_config=true;
}

public function display_field_create(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$fieldset->add_field(new FormFieldCheckbox($member_extended_field->get_field_name(),$member_extended_field->get_name(),false,
array('description'=>$member_extended_field->get_description(),'required'=>(bool)$member_extended_field->get_required())
));
}

public function display_field_update(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$fieldset->add_field(new FormFieldCheckbox($member_extended_field->get_field_name(),$member_extended_field->get_name(),$member_extended_field->get_value(),
array('description'=>$member_extended_field->get_description(),'required'=>(bool)$member_extended_field->get_required())
));
}

public function display_field_profile(MemberExtendedField $member_extended_field)
{

return false;
}

public function get_data(HTMLForm $form,MemberExtendedField $member_extended_field)
{
$field_name=$member_extended_field->get_field_name();
if($form->has_field($field_name))
return(int)$form->get_value($field_name);

return '';
}
}
?>
