<?php





























class ContentManagementConfig extends AbstractConfigData
{
const ANTI_FLOOD_ENABLED='anti_flood';
const ANTI_FLOOD_DURATION='anti_flood_duration';
const USED_CAPTCHA_MODULE='used_captcha_module';

public function is_anti_flood_enabled()
{
return $this->get_property(self::ANTI_FLOOD_ENABLED);
}

public function set_anti_flood_enabled($enabled)
{
$this->set_property(self::ANTI_FLOOD_ENABLED,$enabled);
}

public function get_anti_flood_duration()
{
return $this->get_property(self::ANTI_FLOOD_DURATION);
}

public function set_anti_flood_duration($duration)
{
$this->set_property(self::ANTI_FLOOD_DURATION,$duration);
}

public function get_used_captcha_module()
{
return $this->get_property(self::USED_CAPTCHA_MODULE);
}

public function set_used_captcha_module($module)
{
$this->set_property(self::USED_CAPTCHA_MODULE,$module);
}

protected function get_default_values()
{
return array(
self::ANTI_FLOOD_ENABLED=>false,
self::ANTI_FLOOD_DURATION=>7,
self::USED_CAPTCHA_MODULE=>'ReCaptcha'
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','content-management');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'content-management');
}
}
?>
