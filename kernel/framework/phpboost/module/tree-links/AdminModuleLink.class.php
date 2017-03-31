<?php





























class AdminModuleLink extends ModuleLink
{
public function __construct($name,$url)
{
parent::__construct($name,$url,AppContext::get_current_user()->check_level(User::ADMIN_LEVEL));
}
}
?>
