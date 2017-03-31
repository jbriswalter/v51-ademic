<?php





























class ServerEnvironmentConfig extends AbstractConfigData
{
const URL_REWRITING_ENABLED='url_rewriting_enabled';
const HTACCESS_MANUAL_CONTENT='htaccess_manual_content';
const OUTPUT_GZIPING_ENABLED='output_gziping_enabled';

public function is_url_rewriting_enabled()
{
return $this->get_property(self::URL_REWRITING_ENABLED);
}

public function set_url_rewriting_enabled($enabled)
{
$this->set_property(self::URL_REWRITING_ENABLED,$enabled);
}

private function htaccess_exists()
{
$file=new File(PATH_TO_ROOT.'/.htaccess');
return $file->exists();
}

public function get_htaccess_manual_content()
{
return $this->get_property(self::HTACCESS_MANUAL_CONTENT);
}

public function set_htaccess_manual_content($content)
{
$this->set_property(self::HTACCESS_MANUAL_CONTENT,$content);
}

public function is_output_gziping_enabled()
{
return $this->get_property(self::OUTPUT_GZIPING_ENABLED);
}

public function set_output_gziping_enabled($enabled)
{
$this->set_property(self::OUTPUT_GZIPING_ENABLED,$enabled);
}

public function get_default_values()
{
return array(
self::URL_REWRITING_ENABLED=>false,
self::HTACCESS_MANUAL_CONTENT=>'',
self::OUTPUT_GZIPING_ENABLED=>false
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','server-environment-config');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'server-environment-config');
}
}
?>
