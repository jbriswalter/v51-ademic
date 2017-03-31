<?php


























class ThemesConfig extends AbstractConfigData
{
private static $themes_property='themes';




public function get_default_values()
{
return array(
self::$themes_property=>array()
);
}

public function get_themes()
{
return $this->get_property(self::$themes_property);
}

public function get_theme($theme_id)
{
$themes=$this->get_property(self::$themes_property);
if(array_key_exists($theme_id,$themes))
{
return $themes[$theme_id];
}
return null;
}

public function set_themes(array $themes)
{
$this->set_property(self::$themes_property,$themes);
}

public function add_theme(Theme $theme)
{
$themes=$this->get_property(self::$themes_property);
$themes[$theme->get_id()]=$theme;
$this->set_property(self::$themes_property,$themes);
}

public function remove_theme(Theme $theme)
{
$themes=$this->get_property(self::$themes_property);
unset($themes[$theme->get_id()]);
$this->set_property(self::$themes_property,$themes);
}

public function remove_theme_by_id($theme_id)
{
$themes=$this->get_property(self::$themes_property);
unset($themes[$theme_id]);
$this->set_property(self::$themes_property,$themes);
}

public function update(Theme $theme)
{
$themes=$this->get_property(self::$themes_property);
$themes[$theme->get_id()]=$theme;

$this->set_property(self::$themes_property,$themes);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','themes');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'themes');
}
}
?>
