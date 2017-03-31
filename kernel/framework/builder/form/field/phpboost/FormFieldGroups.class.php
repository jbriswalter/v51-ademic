<?php






























class FormFieldGroups extends FormFieldMultipleSelectChoice
{








public function __construct($id,$label,$value=0,$field_options=array(),array $constraints=array())
{
parent::__construct($id,$label,$value,$this->generate_options(),$field_options,$constraints);
}

private function generate_options()
{
$groups=GroupsCache::load()->get_groups();
$options=array();
foreach($groups as $id=>$informations)
{
$options[]=new FormFieldSelectChoiceOption($informations['name'],$id);
}
return $options;
}
}
?>
