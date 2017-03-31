<?php































class AdminDisplayFrameGraphicalEnvironment extends AbstractDisplayGraphicalEnvironment
{
public function __construct()
{
parent::__construct();
}

public function display($content)
{
$template=new FileTemplate('admin/frame.tpl');

$customization_config=CustomizationConfig::load();

$template->put_all(array(
'C_FAVICON'=>$customization_config->favicon_exists(),
'C_CSS_CACHE_ENABLED'=>CSSCacheConfig::load()->is_enabled(),
'FAVICON'=>Url::to_rel($customization_config->get_favicon_path()),
'FAVICON_TYPE'=>$customization_config->favicon_type(),
'TITLE'=>$this->get_seo_meta_data()->get_full_title(),
'MODULES_CSS'=>$this->get_modules_css_files_html_code(),
'JS_TOP'=>new FileTemplate('js_top.tpl'),
'JS_BOTTOM'=>new FileTemplate('js_bottom.tpl'),
'L_XML_LANGUAGE'=>LangLoader::get_message('xml_lang','main'),
'BODY'=>new StringTemplate($content)
));

$template->display();
}
}
?>
