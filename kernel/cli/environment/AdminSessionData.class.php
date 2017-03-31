<?php


























class AdminSessionData extends SessionData
{
public function __construct()
{
$this->user_id=1;
$this->session_id='0123456789';
$this->token='42';
$this->expiry=time()+SessionsConfig::load()->get_session_duration();
$this->ip='0000:0000:0000:0000:0000:0000:0000:0001';
$user_accounts_config=UserAccountsConfig::load();
$this->cached_data=array(
'level'=>User::ADMIN_LEVEL,
'login'=>'Admin',
'display_name'=>'Admin',
);
$this->data=array();
}
}
?>
