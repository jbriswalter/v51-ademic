<?php





























class CSSCacheConfig extends AbstractConfigData
{
const ACTIVATED='activated';
const OPTIMIZATION_LEVEL='optimization_level';

public function enable()
{
$this->set_property(self::ACTIVATED,true);
}

public function disable()
{
$this->set_property(self::ACTIVATED,false);
}

public function is_enabled()
{
return $this->get_property(self::ACTIVATED);
}

public function set_optimization_level($level)
{
$this->set_property(self::OPTIMIZATION_LEVEL,$level);
}

public function get_optimization_level()
{
return $this->get_property(self::OPTIMIZATION_LEVEL);
}

public function get_default_values()
{
return array(
self::ACTIVATED=>true,
self::OPTIMIZATION_LEVEL=>CSSFileOptimizer::HIGH_OPTIMIZATION
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','css-cache-config');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'css-cache-config');
}
}
?>
