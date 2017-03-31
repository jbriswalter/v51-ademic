<?php



































abstract class AuthenticationMethod
{
protected $error_msg;






abstract public function associate($user_id);






abstract public function dissociate($user_id);





abstract public function authenticate();

public function has_error()
{
return!empty($this->error_msg);
}

public function get_error_msg()
{
return $this->error_msg;
}
}
?>
