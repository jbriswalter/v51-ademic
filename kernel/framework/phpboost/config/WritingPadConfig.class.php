<?php































class WritingPadConfig extends AbstractConfigData
{




public function set_content($content)
{
$this->set_property('content',$content);
}





public function get_content()
{
try
{
return $this->get_property('content');
}
catch(PropertyNotFoundException $ex)
{
return '';
}
}




public function get_default_values()
{
return array(
'content'=>LangLoader::get_message('writing_pad_explain','admin')
);
}





public static function load()
{
return ConfigManager::load(__CLASS__,'kernel','writing-pad');
}




public static function save()
{
ConfigManager::save('kernel',self::load(),'writing-pad');
}
}
?>
