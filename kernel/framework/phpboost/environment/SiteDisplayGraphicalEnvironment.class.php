<?php































class SiteDisplayGraphicalEnvironment extends AbstractDisplayGraphicalEnvironment
{



private $breadcrumb=null;

private static $main_lang;

public function __construct()
{
parent::__construct();
$this->load_langs();
$this->set_breadcrumb(new BreadCrumb());
}

private function load_langs()
{
self::$main_lang=LangLoader::get('main');
}




public function display($content)
{
$template=new FileTemplate('body.tpl');

$header_logo_path='';
$theme=ThemesManager::get_theme(AppContext::get_current_user()->get_theme());

if($theme)
{
$customize_interface=$theme->get_customize_interface();
$header_logo_path=$customize_interface->get_header_logo_path();
}

$template->put_all(array(
'MAINTAIN'=>$this->display_site_maintenance(),
'SITE_NAME'=>GeneralConfig::load()->get_site_name(),
'SITE_SLOGAN'=>GeneralConfig::load()->get_site_slogan(),
'C_HEADER_LOGO'=>!empty($header_logo_path),
'HEADER_LOGO'=>Url::to_rel($header_logo_path),
'PHPBOOST_VERSION'=>GeneralConfig::load()->get_phpboost_major_version(),
'CONTENT'=>$content,
'ACTIONS_MENU'=>ModuleTreeLinksService::display_actions_menu(),
'L_POWERED_BY'=>self::$main_lang['powered_by'],
'L_PHPBOOST_RIGHT'=>self::$main_lang['phpboost_right'],
));

$this->display_kernel_message($template);
$this->display_counter($template);
$this->display_menus($template);
$this->get_breadcrumb()->display($template);

if(GraphicalEnvironmentConfig::load()->is_page_bench_enabled())
{
$template->put_all(array(
'C_DISPLAY_BENCH'=>true,
'BENCH'=>AppContext::get_bench()->to_string(),
'REQ'=>PersistenceContext::get_querier()->get_executed_requests_count(),
'MEMORY_USED'=>AppContext::get_bench()->get_memory_php_used(),
'L_REQ'=>self::$main_lang['sql_req'],
'L_ACHIEVED'=>self::$main_lang['achieved'],
'L_UNIT_SECOND'=>LangLoader::get_message('unit.seconds','date-common')
));
}

if(GraphicalEnvironmentConfig::load()->get_display_theme_author()&&$theme)
{
$theme_configuration=$theme->get_configuration();
$template->put_all(array(
'C_DISPLAY_AUTHOR_THEME'=>true,
'L_THEME'=>self::$main_lang['theme'],
'L_THEME_NAME'=>$theme_configuration->get_name(),
'L_BY'=>strtolower(self::$main_lang['by']),
'L_THEME_AUTHOR'=>$theme_configuration->get_author_name(),
'U_THEME_AUTHOR_LINK'=>$theme_configuration->get_author_link(),
));
}

$this->display_page($template);
}

function display_page(View $body_template)
{
$template=new FileTemplate('frame.tpl');

$customization_config=CustomizationConfig::load();

$seo_meta_data=$this->get_seo_meta_data();
$description=$seo_meta_data->get_full_description();
$template->put_all(array(
'C_CSS_CACHE_ENABLED'=>CSSCacheConfig::load()->is_enabled(),
'C_FAVICON'=>$customization_config->favicon_exists(),
'C_CANONICAL_URL'=>$seo_meta_data->canonical_link_exists(),
'C_DESCRIPTION'=>!empty($description),
'FAVICON'=>Url::to_rel($customization_config->get_favicon_path()),
'FAVICON_TYPE'=>$customization_config->favicon_type(),
'TITLE'=>$seo_meta_data->get_full_title(),
'SITE_DESCRIPTION'=>$description,
'U_CANONICAL'=>$seo_meta_data->get_canonical_link(),
'L_XML_LANGUAGE'=>self::$main_lang['xml_lang'],
'PHPBOOST_VERSION'=>GeneralConfig::load()->get_phpboost_major_version(),
'MODULES_CSS'=>$this->get_modules_css_files_html_code(),
'JS_TOP'=>new FileTemplate('js_top.tpl'),
'JS_BOTTOM'=>new FileTemplate('js_bottom.tpl'),
'BODY'=>$body_template
));

$template->display(true);
}

protected function display_counter(Template $template)
{

if(GraphicalEnvironmentConfig::load()->is_visit_counter_enabled())
{
$compteur=PersistenceContext::get_querier()->select_single_row(DB_TABLE_VISIT_COUNTER,array('ip AS nbr_ip','total'),'WHERE id = 1');

$compteur_total=!empty($compteur['nbr_ip'])?$compteur['nbr_ip']:'1';
$compteur_day=!empty($compteur['total'])?$compteur['total']:'1';

$template->put_all(array(
'L_VISIT'=>self::$main_lang['guest_s'],
'L_TODAY'=>LangLoader::get_message('today','date-common'),
'C_COMPTEUR'=>true,
'COMPTEUR_TOTAL'=>$compteur_total,
'COMPTEUR_DAY'=>$compteur_day
));
}
}

protected function display_menus(Template $template)
{
$theme=ThemesManager::get_theme(AppContext::get_current_user()->get_theme());
$menus=MenusCache::load()->get_menus();
$columns_disabled=$theme?$theme->get_columns_disabled():new ColumnsDisabled();

foreach($menus as $cached_menu)
{
$menu=$cached_menu->get_menu();
if($menu->check_auth()&&!$columns_disabled->menus_column_is_disabled($menu->get_block()))
{
$display=false;
$filters=$menu->get_filters();
$nbr_filters=count($filters);
foreach($filters as $filter)
{
if(($nbr_filters>1&&$filter->get_pattern()!='/')||($filter->match()&&!$display))
$display=true;
}

if($display)
{
$menu_content=$cached_menu->has_cached_string()?$cached_menu->get_cached_string():$menu->display();
$block=$menu->get_block();
switch($block){
case Menu::BLOCK_POSITION__HEADER:
$template->put('C_MENUS_HEADER_CONTENT',true);
$template->assign_block_vars('menus_header',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__SUB_HEADER:
$template->put('C_MENUS_SUB_HEADER_CONTENT',true);
$template->assign_block_vars('menus_sub_header',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__LEFT:
$template->put('C_MENUS_LEFT_CONTENT',true);
$template->assign_block_vars('menus_left',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__RIGHT:
$template->put('C_MENUS_RIGHT_CONTENT',true);
$template->assign_block_vars('menus_right',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__TOP_CENTRAL:
$template->put('C_MENUS_TOPCENTRAL_CONTENT',$menu_content);
$template->assign_block_vars('menus_top_central',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__BOTTOM_CENTRAL:
$template->put('C_MENUS_BOTTOM_CENTRAL_CONTENT',$menu_content);
$template->assign_block_vars('menus_bottom_central',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__TOP_FOOTER:
$template->put('C_MENUS_TOP_FOOTER_CONTENT',true);
$template->assign_block_vars('menus_top_footer',array('MENU'=>$menu_content));
break;

case Menu::BLOCK_POSITION__FOOTER:
$template->put('C_MENUS_FOOTER_CONTENT',true);
$template->assign_block_vars('menus_footer',array('MENU'=>$menu_content));
}
}
}
}
}

protected function display_site_maintenance()
{

parent::process_site_maintenance();

$template=new FileTemplate('maintain.tpl');

$maintenance_config=MaintenanceConfig::load();
if($maintenance_config->is_under_maintenance()&&$maintenance_config->get_display_duration_for_admin())
{
$date_lang=LangLoader::get('date-common');

$array_time=array(-1,60,300,600,900,1800,3600,7200,10800,14400,18000,
21600,25200,28800,57600,86400,172800,604800);
$array_delay=array(LangLoader::get_message('unspecified','main'),'1 '.$date_lang['minute'],
'5 '.$date_lang['minutes'],'10 '.$date_lang['minutes'],'15 '.$date_lang['minutes'],
'30 '.$date_lang['minutes'],'1 '.$date_lang['hour'],'2 '.$date_lang['hours'],
'3 '.$date_lang['hours'],'4 '.$date_lang['hours'],'5 '.$date_lang['hours'],
'6 '.$date_lang['hours'],'7 '.$date_lang['hours'],'8 '.$date_lang['hours'],
'16 '.$date_lang['hours'],'1 '.$date_lang['day'],'2 '.$date_lang['hours'],
'1 '.$date_lang['week']);


if(!$maintenance_config->is_unlimited_maintenance())
{
$key_delay=0;
$current_time=time();
$array_size=count($array_time)-1;
$end_timestamp=$maintenance_config->get_end_date()->get_timestamp();
for($i=$array_size;$i>=1;$i--)
{
if(($end_timestamp-$current_time)-$array_time[$i]<0
&&($end_timestamp-$current_time)-$array_time[$i-1]>0)
{
$key_delay=$i-1;
break;
}
}


$array_release=array(
Date::to_format($end_timestamp,'Y',Timezone::SITE_TIMEZONE),
(Date::to_format($end_timestamp,'n',Timezone::SITE_TIMEZONE)-1),
Date::to_format($end_timestamp,'j',Timezone::SITE_TIMEZONE),
Date::to_format($end_timestamp,'G',Timezone::SITE_TIMEZONE),
Date::to_format($end_timestamp,'i',Timezone::SITE_TIMEZONE),
Date::to_format($end_timestamp,'s',Timezone::SITE_TIMEZONE));

$array_now=array(
Date::to_format(time(),'Y',Timezone::SITE_TIMEZONE),(Date::to_format(time(),'n',
Timezone::SITE_TIMEZONE)-1),Date::to_format(time(),'j',Timezone::SITE_TIMEZONE),
Date::to_format(time(),'G',Timezone::SITE_TIMEZONE),Date::to_format(time(),'i',
Timezone::SITE_TIMEZONE),Date::to_format(time(),'s',Timezone::SITE_TIMEZONE));
}
else
{
$key_delay=0;
$array_release=array('0','0','0','0','0','0');
$array_now=array('0','0','0','0','0','0');
}

$template->put_all(array(
'C_ALERT_MAINTAIN'=>true,
'C_MAINTAIN_DELAY'=>true,
'UNSPECIFIED'=>$maintenance_config->is_unlimited_maintenance()?0:1,
'DELAY'=>isset($array_delay[$key_delay])?$array_delay[$key_delay]:'0',
'MAINTAIN_RELEASE_FORMAT'=>implode(',',$array_release),
'MAINTAIN_NOW_FORMAT'=>implode(',',$array_now),
'L_MAINTAIN_DELAY'=>self::$main_lang['maintain_delay'],
'L_LOADING'=>self::$main_lang['loading'],
'L_DAYS'=>$date_lang['days'],
'L_HOURS'=>$date_lang['hours'],
'L_MIN'=>$date_lang['minutes'],
'L_SEC'=>$date_lang['seconds'],
));
}
return $template;
}





public function get_breadcrumb()
{
return $this->breadcrumb;
}





public function set_breadcrumb(BreadCrumb $breadcrumb)
{
$this->breadcrumb=$breadcrumb;
$this->breadcrumb->set_graphical_environment($this);
}
}
?>
