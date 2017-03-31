<?php

































class UnreadContributionsCache implements CacheData
{
private $admin=0;
private $moderators=false;
private $members=false;
private $groups=array();
private $users=array();




public function synchronize()
{
$result=ContributionService::compute_number_contrib_for_each_profile();

$this->set_values($result);
}





public function are_there_unread_contributions()
{
return $this->get_admin_unread_contributions_number()>0;
}





public function get_admin_unread_contributions_number()
{
return $this->admin;
}






public function set_admin_unread_contributions_number($number)
{
$this->admin=$number;
}





public function have_moderators_unread_contributions()
{
return $this->moderators;
}







public function has_user_unread_contributions($user_id)
{
return in_array($user_id,$this->get_users_with_unread_contributions());
}







public function has_group_unread_contributions($group_id)
{
return in_array($group_id,$this->get_groups_with_unread_contributions());
}






public function set_moderators_have_unread_contributions($have)
{
$this->moderators=$have;
}





public function have_members_unread_contributions()
{
return $this->members;
}






public function set_members_have_unread_contributions($have)
{
$this->members=$have;
}





public function get_groups_with_unread_contributions()
{
return $this->groups;
}






public function add_group_with_unread_contributions($id)
{
$this->add_unique_item_in_list($this->groups,$id);
}





public function get_users_with_unread_contributions()
{
return $this->users;
}






public function add_user_with_unread_contributions($id)
{
$this->add_unique_item_in_list($this->users,$id);
}








public function set_values(array $numbers)
{
$this->set_admin_unread_contributions_number($numbers['r2']);
$this->set_moderators_have_unread_contributions((bool)$numbers['r1']);
$this->set_members_have_unread_contributions((bool)$numbers['r0']);

unset($numbers['r2']);
unset($numbers['r1']);
unset($numbers['r0']);

foreach($numbers as $profile=>$number)
{
if($number>0)
{
if($profile[0]=='g')
{
$this->add_group_with_unread_contributions((int)substr($profile,1));
}
else if($profile[0]=='m')
{
$this->add_user_with_unread_contributions((int)substr($profile,1));
}
}
}
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','unread-contributions');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','unread-contributions');
}

private function add_unique_item_in_list(&$list,$item)
{
if(!in_array($item,$list))
{
$list[]=$item;
}
}
}
?>
