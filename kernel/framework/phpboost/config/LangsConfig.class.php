<?php


























class LangsConfig extends AbstractConfigData
{
private static $langs_property='langs';




public function get_default_values()
{
return array(
self::$langs_property=>array()
);
}

public function get_langs()
{
return $this->get_property(self::$langs_property);
}

public function get_lang($id)
{
$langs=$this->get_property(self::$langs_property);
if(array_key_exists($id,$langs))
{
return $langs[$id];
}
return null;
}

public function set_langs(array $langs)
{
$this->set_property(self::$langs_property,$langs);
}

public function add_lang(Lang $lang)
{
$langs=$this->get_property(self::$langs_property);
$langs[$lang->get_id()]=$lang;
$this->set_property(self::$langs_property,$langs);
}

public function remove_lang(Lang $lang)
{
$langs=$this->get_property(self::$langs_property);
unset($langs[$lang->get_id()]);
$this->set_property(self::$langs_property,$langs);
}

public function remove_lang_by_id($id)
{
$langs=$this->get_property(self::$langs_property);
unset($langs[$id]);
$this->set_property(self::$langs_property,$langs);
}

public function update(Lang $lang)
{
$langs=$this->get_property(self::$langs_property);
$langs[$lang->get_id()]=$lang;

$this->set_property(self::$langs_property,$langs);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','langs');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'langs');
}
}
?>
