<?php


























class MemberSimpleSelectExtendedField extends AbstractMemberExtendedField
{
public function __construct()
{
parent::__construct();
$this->set_disable_fields_configuration(array('regex','default_value'));
$this->set_name(LangLoader::get_message('type.simple-select','admin-user-common'));
}

public function display_field_create(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$options=array();
$default='';
foreach($member_extended_field->get_possible_values()as $name=>$parameters)
{
$options[]=new FormFieldSelectChoiceOption(stripslashes($parameters['title']),$name);
if($parameters['is_default'])
{
$default=$name;
}
}

if(empty($default))
{
$options=array_merge(array(new FormFieldSelectChoiceOption('','')),$options);
$default='';
}

$fieldset->add_field(new FormFieldSimpleSelectChoice($member_extended_field->get_field_name(),$member_extended_field->get_name(),$default,$options,array('required'=>(bool)$member_extended_field->get_required(),'description'=>$member_extended_field->get_description())));
}

public function display_field_update(MemberExtendedField $member_extended_field)
{
$fieldset=$member_extended_field->get_fieldset();

$options=array();
$default=$member_extended_field->get_value();
foreach($member_extended_field->get_possible_values()as $name=>$parameters)
{
$option=new FormFieldSelectChoiceOption(stripslashes($parameters['title']),$name);
$option->set_active($default==stripslashes($parameters['title']));
$options[]=$option;
}

if(empty($default))
{
$options=array_merge(array(new FormFieldSelectChoiceOption('','')),$options);
$default='';
}

$fieldset->add_field(new FormFieldSimpleSelectChoice($member_extended_field->get_field_name(),$member_extended_field->get_name(),$default,$options,array('required'=>(bool)$member_extended_field->get_required(),'description'=>$member_extended_field->get_description())));
}

public function get_data(HTMLForm $form,MemberExtendedField $member_extended_field)
{
$field_name=$member_extended_field->get_field_name();

if($form->has_field($field_name))
{
$value=$form->get_value($field_name);
if(!empty($value))
return $value->get_label();
}

return '';
}
}
?>
