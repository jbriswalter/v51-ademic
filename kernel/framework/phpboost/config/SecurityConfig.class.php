<?php





























class SecurityConfig extends AbstractConfigData
{
const INTERNAL_PASSWORD_MIN_LENGTH='internal_password_min_length';
const INTERNAL_PASSWORD_STRENGTH='internal_password_strength';
const LOGIN_AND_EMAIL_FORBIDDEN_IN_PASSWORD='login_and_email_forbidden_in_password';

const PASSWORD_STRENGTH_WEAK='weak';
const PASSWORD_STRENGTH_MEDIUM='medium';
const PASSWORD_STRENGTH_STRONG='strong';

public function get_internal_password_min_length()
{
return $this->get_property(self::INTERNAL_PASSWORD_MIN_LENGTH);
}

public function set_internal_password_min_length($value)
{
$this->set_property(self::INTERNAL_PASSWORD_MIN_LENGTH,$value);
}

public function get_internal_password_strength()
{
return $this->get_property(self::INTERNAL_PASSWORD_STRENGTH);
}

public function set_internal_password_strength($value)
{
$this->set_property(self::INTERNAL_PASSWORD_STRENGTH,$value);
}

public function forbid_login_and_email_in_password()
{
$this->set_property(self::LOGIN_AND_EMAIL_FORBIDDEN_IN_PASSWORD,true);
}

public function allow_login_and_email_in_password()
{
$this->set_property(self::LOGIN_AND_EMAIL_FORBIDDEN_IN_PASSWORD,false);
}

public function are_login_and_email_forbidden_in_password()
{
return $this->get_property(self::LOGIN_AND_EMAIL_FORBIDDEN_IN_PASSWORD);
}




public function get_default_values()
{
return array(
self::INTERNAL_PASSWORD_MIN_LENGTH=>6,
self::INTERNAL_PASSWORD_STRENGTH=>self::PASSWORD_STRENGTH_WEAK,
self::LOGIN_AND_EMAIL_FORBIDDEN_IN_PASSWORD=>false
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','security');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'security');
}
}
?>
