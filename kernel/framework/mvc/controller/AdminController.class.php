<?php






























abstract class AdminController extends AbstractController
{
public final function get_right_controller_regarding_authorizations()
{
if(!AppContext::get_current_user()->is_admin())
{
return new UserLoginController(UserLoginController::ADMIN_LOGIN,substr(REWRITED_SCRIPT,strlen(GeneralConfig::load()->get_site_path())));
}
return $this;
}
}
?>
