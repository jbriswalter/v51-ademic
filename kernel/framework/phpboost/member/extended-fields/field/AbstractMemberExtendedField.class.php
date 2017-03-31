<?php































abstract class AbstractMemberExtendedField implements MemberExtendedFieldType
{
protected $lang;
protected $form;
protected $field_used_once;
protected $field_used_phpboost_config;
protected $disable_fields_configuration=array();
protected $name;




public function __construct()
{
$this->lang=LangLoader::get('user-common');
$this->field_used_once=false;
$this->field_used_phpboost_config=false;
$this->name='ExtendedField';
}




public function display_field_create(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();
return;
}




public function display_field_update(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();
return;
}

public function delete_field(MemberExtendedField $member_extended_field)
{
return;
}




public function display_field_profile(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();
$value=$member_extended_field->get_value();
if(!empty($value))
{
$fieldset->add_field(new FormFieldFree($member_extended_field->get_field_name(),$member_extended_field->get_name(),$value));
}
}




public function get_data(HTMLForm $form,MemberExtendedField $member_extended_field)
{
$field_name=$member_extended_field->get_field_name();
return TextHelper::htmlspecialchars($form->get_value($field_name,''));
}




public function constraint($value)
{
if(is_numeric($value))
{
switch($value)
{
case 2:
return new FormFieldConstraintRegex('`^[a-zA-Z]+$`i');
break;
case 3:
return new FormFieldConstraintRegex('`^[a-zA-Z0-9]+$`i');
break;
case 7:
return new FormFieldConstraintRegex('`^[a-zA-Z??????????????????????????????????????????????????????-]+$`i');
break;
}
}
elseif(is_string($value)&&!empty($value))
{
return new FormFieldConstraintRegex($value);
}
}




public function set_disable_fields_configuration(array $names)
{
foreach($names as $name)
{
$name=strtolower($name);
switch($name)
{
case 'name':
$this->disable_fields_configuration[]=$name;
break;
case 'description':
$this->disable_fields_configuration[]=$name;
break;
case 'field_type':
$this->disable_fields_configuration[]=$name;
break;
case 'field_required':
$this->disable_fields_configuration[]=$name;
break;
case 'regex':
$this->disable_fields_configuration[]=$name;
break;
case 'possible_values':
$this->disable_fields_configuration[]=$name;
break;
case 'default_value':
$this->disable_fields_configuration[]=$name;
break;
case 'authorizations':
$this->disable_fields_configuration[]=$name;
break;
default:
throw new Exception('Field name '.$name.' not exist');
}
}
}




public function get_disable_fields_configuration()
{
return $this->disable_fields_configuration;
}




public function get_field_used_once()
{
return $this->field_used_once;
}




public function set_name($name)
{
$this->name=$name;
}




public function get_name()
{
return $this->name;
}




public function get_field_used_phpboost_configuration()
{
return $this->field_used_phpboost_config;
}

public function set_form(HTMLForm $form)
{
$this->form=$form;
}

public function get_form()
{
return $this->form;
}
}
?>
