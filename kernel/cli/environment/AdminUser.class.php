<?php































class AdminUser extends CurrentUser
{



public function __construct()
{
parent::__construct(new AdminSessionData());
}

protected function build_groups(SessionData $session)
{
return array('r2');
}
}

?>
