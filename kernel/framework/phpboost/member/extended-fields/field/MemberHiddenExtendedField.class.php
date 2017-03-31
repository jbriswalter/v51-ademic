<?php


























class MemberHiddenExtendedField extends AbstractMemberExtendedField
{
public function __construct()
{
parent::__construct();
$this->set_disable_fields_configuration(array('name','description','field_type','regex','authorizations','possible_values','default_value'));
$this->set_name('');
}

public function display_field_create(MemberExtendedField $member_extended_field)
{
return;
}

public function display_field_update(MemberExtendedField $member_extended_field)
{
return;
}

public function display_field_profile(MemberExtendedField $member_extended_field)
{
return;
}

public function get_data(HTMLForm $form,MemberExtendedField $member_extended_field)
{
return;
}
}
?>
