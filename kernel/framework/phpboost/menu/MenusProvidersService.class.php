<?php


























class MenusProvidersService
{
public static function get_menus($module_id)
{
if(self::module_containing_extension_point($module_id))
{
$provider=self::get_provider($module_id);
return $provider->get_menus($module_id);
}
}

public static function module_containing_extension_point($module_id)
{
return in_array($module_id,self::get_extension_point_ids());
}

public static function get_extension_point_ids()
{
return array_keys(self::get_extension_point());
}

public static function get_extension_point()
{
return AppContext::get_extension_provider_service()->get_extension_point(MenusExtensionPoint::EXTENSION_POINT);
}

public static function get_provider($module_id)
{
if(self::module_containing_extension_point($module_id))
{
$extension_point=self::get_extension_point();
return $extension_point[$module_id];
}
}
}
?>
