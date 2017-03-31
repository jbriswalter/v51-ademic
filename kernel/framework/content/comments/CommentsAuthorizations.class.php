<?php































class CommentsAuthorizations
{
private $authorized_access_module=true;

const READ_AUTHORIZATIONS=1;
const POST_AUTHORIZATIONS=2;
const MODERATE_AUTHORIZATIONS=4;

public function is_authorized_access_module()
{
return $this->authorized_access_module;
}

public function is_authorized_read()
{
return $this->check_authorizations(self::READ_AUTHORIZATIONS);
}

public function is_authorized_post()
{
return $this->check_authorizations(self::POST_AUTHORIZATIONS);
}

public function is_authorized_moderation()
{
return $this->check_authorizations(self::MODERATE_AUTHORIZATIONS);
}




public function set_authorized_access_module($authorized)
{
$this->authorized_access_module=$authorized;
}

private function check_authorizations($global_bit)
{
return AppContext::get_current_user()->check_auth(CommentsConfig::load()->get_authorizations(),$global_bit);
}
}
?>
