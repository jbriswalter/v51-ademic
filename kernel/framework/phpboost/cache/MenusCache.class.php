<?php





























class MenusCache implements CacheData
{
private $menus=array();




public function synchronize()
{
$this->menus=array();

$menus=MenuService::get_menu_list();
foreach($menus as $menu)
{
if($menu->get_block()!=Menu::BLOCK_POSITION__NOT_ENABLED&&$menu->is_enabled())
{
$this->menus[]=new CachedMenu($menu);
}
}
}

public function get_menus()
{
return $this->menus;
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','menus');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','menus');
}
}
?>
