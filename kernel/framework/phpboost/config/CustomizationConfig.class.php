<?php





























class CustomizationConfig extends AbstractConfigData
{
const FAVICON_PATH='favicon_path';
const HEADER_LOGO_PATH_ALL_THEMES='header_logo_path_all_themes';

public function get_favicon_path()
{
return $this->get_property(self::FAVICON_PATH);
}

public function set_favicon_path($path)
{
$this->set_property(self::FAVICON_PATH,$path);
}

public function favicon_exists()
{
$favicon_file=new File(PATH_TO_ROOT.$this->get_favicon_path());
return $favicon_file->exists();
}

public function favicon_type()
{
if($this->favicon_exists())
{
$favicon=new Image(PATH_TO_ROOT.$this->get_favicon_path());
return $favicon->get_mime_type();
}
return null;
}

public function set_header_logo_path_all_themes($path)
{
$this->set_property(self::HEADER_LOGO_PATH_ALL_THEMES,$path);
}

public function remove_header_logo_path_all_themes()
{
$this->set_property(self::HEADER_LOGO_PATH_ALL_THEMES,null);
}

public function get_header_logo_path_all_themes()
{
return $this->get_property(self::HEADER_LOGO_PATH_ALL_THEMES);
}

public function get_default_values()
{
return array(
self::FAVICON_PATH=>'/favicon.ico',
self::HEADER_LOGO_PATH_ALL_THEMES=>null
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','customization-config');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'customization-config');
}
}
?>
