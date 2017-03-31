<?php






























class RolesAuthorizations
{
private $moderators=false;
private $members=false;
private $guests=false;
private $groups=array();
private $users=array();

public function __construct(array $auth_array=array())
{
$this->build_from_auth_array($auth_array);
}






public function build_auth_array()
{
$auth_array=array();
$this->fill_levels_auths($auth_array);
$this->fill_groups_auths($auth_array);
$this->fill_users_auths($auth_array);
return $auth_array;
}

private function fill_levels_auths(array&$auth_array)
{
if($this->moderators)
{
$auth_array['r1']=1;
if($this->members)
{
$auth_array['r0']=1;
if($this->guests)
{
$auth_array['r-1']=1;
}
}
}
}

private function fill_groups_auths(array&$auth_array)
{
foreach($this->groups as $group_id)
{
$auth_array[$group_id]=1;
}
}

private function fill_users_auths(array&$auth_array)
{
foreach($this->users as $user_id)
{
$auth_array['m'.$user_id]=1;
}
}

private function init()
{
$this->moderators=false;
$this->members=false;
$this->guests=false;
$this->groups=array();
$this->users=array();
}





public function build_from_auth_array(array $auth_array)
{
$this->init();
$this->read_levels_auths($auth_array);
$this->read_groups_auths($auth_array);
$this->read_users_auths($auth_array);
}

private function read_levels_auths(array $auth_array)
{
if(!empty($auth_array['r1']))
{
$this->moderators=true;
if(!empty($auth_array['r0']))
{
$this->members=true;
if(!empty($auth_array['r-1']))
{
$this->guests=true;
}
}
}
}

private function read_groups_auths(array $auth_array)
{
foreach($auth_array as $role=>$auth)
{
if($auth)
{
if(is_numeric($role))
{
$this->groups[]=$role;
}
}
}
}

private function read_users_auths(array $auth_array)
{
foreach($auth_array as $role=>$auth)
{
if($auth)
{
if($role[0]=='m')
{
$this->users[]=(int)substr($role,1);
}
}
}
}
}
?>
