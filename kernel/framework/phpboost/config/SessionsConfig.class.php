<?php





























class SessionsConfig extends AbstractConfigData
{
const COOKIE_NAME='cookie_name';



const SESSION_DURATION='session_duration';



const ACTIVE_SESSION_DURATION='active_session_duration';



const AUTOCONNECT_DURATION='autoconnect_duration';

public function get_cookie_name()
{
return $this->get_property(self::COOKIE_NAME);
}

public function set_cookie_name($cookie_name)
{
$this->set_property(self::COOKIE_NAME,$cookie_name);
}

public function get_session_duration()
{
return $this->get_property(self::SESSION_DURATION);
}

public function set_session_duration($duration)
{
$this->set_property(self::SESSION_DURATION,$duration);
}

public function get_active_session_duration()
{
return $this->get_property(self::ACTIVE_SESSION_DURATION);
}

public function set_active_session_duration($duration)
{
$this->set_property(self::ACTIVE_SESSION_DURATION,$duration);
}

public function get_autoconnect_duration()
{
return $this->get_property(self::AUTOCONNECT_DURATION);
}

public function set_autoconnect_duration($duration)
{
$this->set_property(self::AUTOCONNECT_DURATION,$duration);
}

public function get_default_values()
{
return array(
self::COOKIE_NAME=>'session',
self::SESSION_DURATION=>3600,
self::ACTIVE_SESSION_DURATION=>300,
self::AUTOCONNECT_DURATION=>3600*24*30
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','sessions-config');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'sessions-config');
}
}
?>
