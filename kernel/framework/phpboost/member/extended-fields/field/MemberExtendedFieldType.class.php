<?php






























interface MemberExtendedFieldType
{




public function display_field_create(MemberExtendedField $member_extended_field);





public function display_field_update(MemberExtendedField $member_extended_field);





public function display_field_profile(MemberExtendedField $member_extended_field);





public function delete_field(MemberExtendedField $member_extended_field);





public function get_data(HTMLForm $form,MemberExtendedField $member_extended_field);





public function constraint($value);

public function set_disable_fields_configuration(array $names);




public function get_disable_fields_configuration();

public function set_name($name);




public function get_name();





public function get_field_used_once();





public function get_field_used_phpboost_configuration();
}
?>
