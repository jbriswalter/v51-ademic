<?php































class FormFieldUploadPictureFile extends FormFieldUploadFile
{








public function __construct($id,$label,$value,$field_options=array(),array $constraints=array())
{
$constraints[]=new FormFieldConstraintPictureFile();
parent::__construct($id,$label,$value,$field_options,$constraints);
}
}
?>
