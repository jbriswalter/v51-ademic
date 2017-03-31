<?php































class LangsManager
{
private static $error=null;

public static function get_installed_langs_map()
{
return LangsConfig::load()->get_langs();
}

public static function get_activated_langs_map()
{
$activated_langs=array();
foreach(LangsConfig::load()->get_langs()as $lang){
if($lang->is_activated()){
$activated_langs[$lang->get_id()]=$lang;
}
}
return $activated_langs;
}

public static function get_activated_and_authorized_langs_map()
{
$langs=array();
foreach(LangsConfig::load()->get_langs()as $lang){
if($lang->is_activated()&&$lang->check_auth()){
$langs[$lang->get_id()]=$lang;
}
}
return $langs;
}

public static function get_default_lang()
{
return UserAccountsConfig::load()->get_default_lang();
}

public static function get_lang($id)
{
return LangsConfig::load()->get_lang($id);
}

public static function get_lang_existed($id)
{
if(LangsConfig::load()->get_lang($id)!==null)
{
return true;
}
return false;
}

public static function install($id,$authorizations=array(),$enable=true)
{
if(!empty($id)&&!self::get_lang_existed($id))
{
$lang=new Lang($id,$authorizations,$enable);
$configuration=$lang->get_configuration();

$phpboost_version=GeneralConfig::load()->get_phpboost_major_version();
if(version_compare($phpboost_version,$configuration->get_compatibility(),'>'))
{
self::$error=LangLoader::get_message('misfit.phpboost','status-messages-common');
}
else
{
LangsConfig::load()->add_lang($lang);
LangsConfig::save();
}
}
else
{
self::$error=LangLoader::get_message('element.already_exists','status-messages-common');
}
}

public static function uninstall($id,$drop_files=false)
{
if(!empty($id)&&self::get_lang_existed($id))
{
$default_lang=self::get_default_lang();
if(self::get_lang($id)->get_id()!==$default_lang)
{
PersistenceContext::get_querier()->update(DB_TABLE_MEMBER,array('locale'=>$default_lang),
'WHERE locale=:old_locale',array('old_locale'=>$id
));

LangsConfig::load()->remove_lang_by_id($id);
LangsConfig::save();

if($drop_files)
{
$folder=new Folder(PATH_TO_ROOT.'/lang/'.$id);
$folder->delete();
}
}
}
}

public static function change_visibility($id,$visibility)
{
if(!empty($id)&&self::get_lang_existed($id))
{
$lang=self::get_lang($id);
$lang->set_activated($visibility);
LangsConfig::load()->update($lang);
LangsConfig::save();
}
}

public static function change_authorizations($id,Array $authorizations)
{
if(!empty($id)&&self::get_lang_existed($id))
{
$lang=self::get_lang($id);
$lang->set_authorizations($authorizations);
LangsConfig::load()->update($lang);
LangsConfig::save();
}
}

public static function change_informations($id,$visibility,Array $authorizations=array())
{
if(!empty($id)&&self::get_lang_existed($id))
{
$lang=self::get_lang($id);
$lang->set_activated($visibility);

if(!empty($authorizations))
{
$lang->set_authorizations($authorizations);
}

LangsConfig::load()->update($lang);
LangsConfig::save();
}
}

public static function get_error()
{
return self::$error;
}
}
?>
