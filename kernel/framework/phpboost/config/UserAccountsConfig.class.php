<?php































class UserAccountsConfig extends AbstractConfigData
{



const MEMBER_ACCOUNTS_VALIDATION_METHOD_PROPERTY='member_accounts_validation_method';



const WELCOME_MESSAGE_PROPERTY='welcome_message';



const REGISTRATION_ENABLED_PROPERTY='registration_enabled';




const REGISTRATION_AGREEMENT_PROPERTY='registration_agreement';




const UNACTIVATED_ACCOUNTS_TIMEOUT_PROPERTY='unactivated_accounts_timeout';




const ENABLE_AVATAR_UPLOAD_PROPERTY='enable_avatar_upload';




const ENABLE_AVATAR_AUTO_RESIZING='enable_avatar_auto_resizing';





const DEFAULT_AVATAR_ENABLED_PROPERTY='default_avatar_enabled';




const DEFAULT_AVATAR_URL_PROPERTY='default_avatar_url';




const MAX_AVATAR_WIDTH_PROPERTY='max_avatar_width';




const MAX_AVATAR_HEIGHT_PROPERTY='max_avatar_height';




const MAX_AVATAR_WEIGHT_PROPERTY='max_avatar_weight';




const AUTH_READ_MEMBERS='auth_read_members';
const AUTH_READ_MEMBERS_BIT=1;

const DEFAULT_LANG='default_lang';

const DEFAULT_THEME='default_theme';

const MAX_PRIVATE_MESSAGES_NUMBER='max_pm_number';

const ALLOW_USERS_TO_CHANGE_DISPLAY_NAME='allow_users_to_change_display_name';
const ALLOW_USERS_TO_CHANGE_EMAIL='allow_users_to_change_email';

const AUTOMATIC_USER_ACCOUNTS_VALIDATION='1';
const MAIL_USER_ACCOUNTS_VALIDATION='2';
const ADMINISTRATOR_USER_ACCOUNTS_VALIDATION='3';






public function get_member_accounts_validation_method()
{
return $this->get_property(self::MEMBER_ACCOUNTS_VALIDATION_METHOD_PROPERTY);
}






public function set_member_accounts_validation_method($method)
{
$this->set_property(self::MEMBER_ACCOUNTS_VALIDATION_METHOD_PROPERTY,$method);
}





public function get_welcome_message()
{
return $this->get_property(self::WELCOME_MESSAGE_PROPERTY);
}





public function set_welcome_message($message)
{
$this->set_property(self::WELCOME_MESSAGE_PROPERTY,$message);
}





public function is_registration_enabled()
{
return $this->get_property(self::REGISTRATION_ENABLED_PROPERTY);
}





public function set_registration_enabled($enabled)
{
$this->set_property(self::REGISTRATION_ENABLED_PROPERTY,$enabled);
}




public function enable_registration()
{
$this->set_registration_enabled(true);
}




public function disable_registration()
{
$this->set_registration_enabled(false);
}





public function get_registration_agreement()
{
return $this->get_property(self::REGISTRATION_AGREEMENT_PROPERTY);
}





public function set_registration_agreement($agreement)
{
$this->set_property(self::REGISTRATION_AGREEMENT_PROPERTY,$agreement);
}





public function is_avatar_upload_enabled()
{
return $this->get_property(self::ENABLE_AVATAR_UPLOAD_PROPERTY);
}





public function set_avatar_upload_enabled($enabled)
{
$this->set_property(self::ENABLE_AVATAR_UPLOAD_PROPERTY,$enabled);
}





public function is_avatar_auto_resizing_enabled()
{
return $this->get_property(self::ENABLE_AVATAR_AUTO_RESIZING);
}





public function set_avatar_auto_resizing_enabled($enabled)
{
$this->set_property(self::ENABLE_AVATAR_AUTO_RESIZING,$enabled);
}




public function enable_avatar_upload()
{
$this->set_avatar_upload_enabled(true);
}




public function disable_avatar_upload()
{
$this->set_avatar_upload_enabled(false);
}





public function get_unactivated_accounts_timeout()
{
return $this->get_property(self::UNACTIVATED_ACCOUNTS_TIMEOUT_PROPERTY);
}





public function set_unactivated_accounts_timeout($duration)
{
$this->set_property(self::UNACTIVATED_ACCOUNTS_TIMEOUT_PROPERTY,$duration);
}





public function is_default_avatar_enabled()
{
return $this->get_property(self::DEFAULT_AVATAR_ENABLED_PROPERTY);
}





public function set_default_avatar_name_enabled($enabled)
{
$this->set_property(self::DEFAULT_AVATAR_ENABLED_PROPERTY,$enabled);
}




public function enable_default_avatar()
{
$this->set_default_avatar_name_enabled(true);
}




public function disable_default_avatar()
{
$this->set_default_avatar_name_enabled(false);
}





public function get_default_avatar_name()
{
return $this->get_property(self::DEFAULT_AVATAR_URL_PROPERTY);
}





public function set_default_avatar_name($url)
{
if(empty($url))
{
$url='no_avatar.png';
}
$this->set_property(self::DEFAULT_AVATAR_URL_PROPERTY,$url);
}





public function get_max_avatar_width()
{
return $this->get_property(self::MAX_AVATAR_WIDTH_PROPERTY);
}





public function set_max_avatar_width($width)
{
$this->set_property(self::MAX_AVATAR_WIDTH_PROPERTY,$width);
}





public function get_max_avatar_height()
{
return $this->get_property(self::MAX_AVATAR_HEIGHT_PROPERTY);
}





public function set_max_avatar_height($height)
{
$this->set_property(self::MAX_AVATAR_HEIGHT_PROPERTY,$height);
}





public function get_max_avatar_weight()
{
return $this->get_property(self::MAX_AVATAR_WEIGHT_PROPERTY);
}





public function set_max_avatar_weight($weight)
{
$this->set_property(self::MAX_AVATAR_WEIGHT_PROPERTY,$weight);
}





public function get_auth_read_members()
{
return $this->get_property(self::AUTH_READ_MEMBERS);
}





public function set_auth_read_members($auth)
{
$this->set_property(self::AUTH_READ_MEMBERS,$auth);
}

public function get_default_lang()
{
return $this->get_property(self::DEFAULT_LANG);
}

public function set_default_lang($lang)
{
$this->set_property(self::DEFAULT_LANG,$lang);
}

public function get_default_theme()
{
return $this->get_property(self::DEFAULT_THEME);
}

public function set_default_theme($theme)
{
$this->set_property(self::DEFAULT_THEME,$theme);
}

public function get_max_private_messages_number()
{
return $this->get_property(self::MAX_PRIVATE_MESSAGES_NUMBER);
}

public function set_max_private_messages_number($number)
{
$this->set_property(self::MAX_PRIVATE_MESSAGES_NUMBER,$number);
}

public function are_users_allowed_to_change_display_name()
{
return $this->get_property(self::ALLOW_USERS_TO_CHANGE_DISPLAY_NAME);
}

public function set_allow_users_to_change_display_name($enabled)
{
$this->set_property(self::ALLOW_USERS_TO_CHANGE_DISPLAY_NAME,$enabled);
}

public function are_users_allowed_to_change_email()
{
return $this->get_property(self::ALLOW_USERS_TO_CHANGE_EMAIL);
}

public function set_allow_users_to_change_email($enabled)
{
$this->set_property(self::ALLOW_USERS_TO_CHANGE_EMAIL,$enabled);
}




public function get_default_values()
{
$server_configuration=new ServerConfiguration();

return array(
self::REGISTRATION_ENABLED_PROPERTY=>FormFieldCheckbox::CHECKED,
self::MEMBER_ACCOUNTS_VALIDATION_METHOD_PROPERTY=>self::AUTOMATIC_USER_ACCOUNTS_VALIDATION,
self::WELCOME_MESSAGE_PROPERTY=>LangLoader::get_message('site_config_msg_mbr','main'),
self::REGISTRATION_AGREEMENT_PROPERTY=>LangLoader::get_message('register_agreement','main'),
self::UNACTIVATED_ACCOUNTS_TIMEOUT_PROPERTY=>20,
self::ENABLE_AVATAR_UPLOAD_PROPERTY=>FormFieldCheckbox::CHECKED,
self::ENABLE_AVATAR_AUTO_RESIZING=>$server_configuration->has_gd_library()?FormFieldCheckbox::CHECKED:FormFieldCheckbox::UNCHECKED,
self::DEFAULT_AVATAR_ENABLED_PROPERTY=>FormFieldCheckbox::CHECKED,
self::DEFAULT_AVATAR_URL_PROPERTY=>'no_avatar.png',
self::MAX_AVATAR_WIDTH_PROPERTY=>120,
self::MAX_AVATAR_HEIGHT_PROPERTY=>120,
self::MAX_AVATAR_WEIGHT_PROPERTY=>20,
self::AUTH_READ_MEMBERS=>array('r0'=>1,'r1'=>1),
self::DEFAULT_LANG=>'english',
self::DEFAULT_THEME=>'base',
self::MAX_PRIVATE_MESSAGES_NUMBER=>50,
self::ALLOW_USERS_TO_CHANGE_DISPLAY_NAME=>false,
self::ALLOW_USERS_TO_CHANGE_EMAIL=>false
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','user-accounts');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'user-accounts');
}
}
?>
