<?php


































class ActionAuthorization
{
private $label;
private $description='';
private $bit;



private $roles;








public function __construct($label,$bit,$description='',RolesAuthorizations $roles=null)
{
$this->label=$label;
$this->bit=$bit;
$this->description=$description;
if($roles!=null)
{
$this->roles=$roles;
}
else
{
$this->roles=new RolesAuthorizations();
}
}





public function get_label()
{
return $this->label;
}





public function set_label($label)
{
$this->label=$label;
}





public function get_bit()
{
return $this->bit;
}






public function set_bit($bit)
{
$this->bit=$bit;
}





public function get_description()
{
return $this->description;
}





public function set_description($description)
{
$this->description=$description;
}





public function get_roles_auths()
{
return $this->roles;
}





public function set_roles_auths(RolesAuthorizations $roles)
{
$this->roles=$roles;
}





public function build_auth_array()
{
$auth_array=$this->roles->build_auth_array();
foreach($auth_array as&$profile)
{
$profile*=$this->bit;
}
return $auth_array;
}





public function build_from_auth_array(array $auth_array)
{
foreach($auth_array as&$profile)
{
$profile&=$this->bit;
}
$this->roles=new RolesAuthorizations($auth_array);
}
}
?>
