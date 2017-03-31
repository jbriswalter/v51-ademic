<?php





























class CachedMenu
{
private $menu;
private $cached_string;

public function __construct(Menu $menu)
{
$this->menu=$menu;
$this->build_cached_string();
}

private function build_cached_string()
{
if(self::need_cached_string($this->menu))
{
$this->cached_string=$this->menu->display();
}
}

public function get_menu()
{
return $this->menu;
}

public function get_cached_string()
{
return $this->cached_string;
}

public function has_cached_string()
{
return!empty($this->cached_string);
}

public static function need_cached_string(Menu $menu)
{
return $menu->need_cached_string();
}
}
?>
