<?php































class SiteDisplayFrameGraphicalEnvironment extends AbstractDisplayGraphicalEnvironment
{
private $display_css_login=false;

public function __construct()
{
parent::__construct();
}




public function display($content)
{
$template=new FileTemplate('frame.tpl');

$customization_config=CustomizationConfig::load();

$lang=LangLoader::get('main');
$description=$this->get_seo_meta_data()->get_full_description();
$template->put_all(array(
'C_CSS_CACHE_ENABLED'=>CSSCacheConfig::load()->is_enabled(),
'C_CSS_LOGIN_DISPLAYED'=>$this->display_css_login,
'C_FAVICON'=>$customization_config->favicon_exists(),
'C_CANONICAL_URL'=>$this->get_seo_meta_data()->canonical_link_exists(),
'C_DESCRIPTION'=>!empty($description),
'FAVICON'=>Url::to_rel($customization_config->get_favicon_path()),
'FAVICON_TYPE'=>$customization_config->favicon_type(),
'TITLE'=>$this->get_seo_meta_data()->get_full_title(),
'SITE_DESCRIPTION'=>$description,
'U_CANONICAL'=>$this->get_seo_meta_data()->get_canonical_link(),
'L_XML_LANGUAGE'=>LangLoader::get_message('xml_lang','main'),
'PHPBOOST_VERSION'=>GeneralConfig::load()->get_phpboost_major_version(),
'MODULES_CSS'=>$this->get_modules_css_files_html_code(),
'JS_TOP'=>new FileTemplate('js_top.tpl'),
'JS_BOTTOM'=>new FileTemplate('js_bottom.tpl'),
'BODY'=>new StringTemplate($content)
));

$template->display(true);
}

public function display_css_login()
{
$this->display_css_login=true;
}
}
?>
