<?php


























class ModulesCssFilesService
{
private static $modules_css_files=array();

public static function __static()
{
$extension_points=AppContext::get_extension_provider_service()->get_extension_point(CssFilesExtensionPoint::EXTENSION_POINT);
foreach($extension_points as $module_id=>$provider)
{
self::$modules_css_files[$module_id]=$provider;
}
}

public static function get_css_files_always_displayed()
{
$theme_id=AppContext::get_current_user()->get_theme();
$css_files=array();
foreach(self::$modules_css_files as $module_id=>$module_css_files)
{
$module_css_files_always_displayed=$module_css_files->get_css_files_always_displayed();
foreach($module_css_files_always_displayed as $css_file)
{
$css_files[]=self::get_real_path_css_file($theme_id,$module_id,$css_file);
}
}
return $css_files;
}

public static function get_css_files_running_module_displayed()
{
$module_id=Environment::get_running_module_name();
if(array_key_exists($module_id,self::$modules_css_files))
{
$module_css_files=self::$modules_css_files[$module_id];
$module_css_files_running_module_displayed=$module_css_files->get_css_files_running_module_displayed();
if(!empty($module_css_files_running_module_displayed))
{
$theme_id=AppContext::get_current_user()->get_theme();
$css_files=array();
foreach($module_css_files_running_module_displayed as $css_file)
{
$css_files[]=self::get_real_path_css_file($theme_id,$module_id,$css_file);
}
return $css_files;
}
return array();
}
return array();
}

private static function get_real_path_css_file($theme_id,$module_id,$css_file)
{
if(file_exists(PATH_TO_ROOT.'/templates/'.$theme_id.'/modules/'.$module_id.'/'.$css_file))
{
return '/templates/'.$theme_id.'/modules/'.$module_id.'/'.$css_file;
}
return '/'.$module_id.'/templates/'.$css_file;
}
}
?>
