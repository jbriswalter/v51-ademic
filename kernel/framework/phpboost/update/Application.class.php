<?php































class Application
{
private $id='';
private $name='';
private $language='';
private $localized_language='';
private $type='';

private $repository='';

private $version='';
private $compatibility_min='';
private $compatibility_max='';
private $pubdate=null;
private $priority=null;
private $security_update=false;

private $download_url='';
private $update_url='';

private $authors=array();

private $description='';
private $new_features=array();
private $improvments=array();
private $bug_corrections=array();
private $security_improvments=array();

private $warning_level=null;
private $warning=null;

const KERNEL_TYPE='kernel';
const MODULE_TYPE='module';
const TEMPLATE_TYPE='template';









public function __construct($id,$language,$type=self::MODULE_TYPE,$version=0,$repository='')
{
$this->id=$id;
$this->name=$id;
$this->language=$language;
$this->type=$type;

$this->repository=$repository;

$this->version=$version;

$this->pubdate=new Date();
}




public function load($xml_desc)
{
$attributes=$xml_desc->attributes();

$name=self::get_attribute($xml_desc,'name');
$this->name=!empty($name)?$name:$this->id;

$this->language=self::get_attribute($xml_desc,'language');

$language=self::get_attribute($xml_desc,'localized_language');
$this->localized_language=!empty($language)?($language):$this->language;

$this->version=self::get_attribute($xml_desc,'num');

$this->compatibility_min=self::get_attribute($xml_desc,'min','compatibility');
$this->compatibility_max=self::get_attribute($xml_desc,'max','compatibility');

$pubdate=self::get_attribute($xml_desc,'pubdate');
if(!empty($pubdate))
{
$this->pubdate=new Date($pubdate);
}
else
{
$this->pubdate=new Date();
}

$this->security_update=self::get_attribute($xml_desc,'security-update');
$this->security_update=strtolower($this->security_update)=='true'?true:false;

$this->priority=self::get_attribute($xml_desc,'priority');
switch($this->priority)
{
case 'high':
$this->priority=AdministratorAlert::ADMIN_ALERT_HIGH_PRIORITY;
break;
case 'medium':
$this->priority=AdministratorAlert::ADMIN_ALERT_MEDIUM_PRIORITY;
break;
default:
$this->priority=AdministratorAlert::ADMIN_ALERT_LOW_PRIORITY;
break;
}
if($this->security_update)
$this->priority++;

$this->download_url=self::get_attribute($xml_desc,'url','download');
$this->update_url=self::get_attribute($xml_desc,'url','update');

$this->authors=array();
$authors_elts=$xml_desc->xpath('authors/author');
foreach($authors_elts as $author)
{
$this->authors[]=array(
'name'=>self::get_attribute($author,'name'),
'email'=>self::get_attribute($author,'email')
);
}

$this->description=$xml_desc->xpath('description');
$this->description=utf8_decode((string)$this->description[0]);

$this->new_features=array();
$this->improvments=array();
$this->bug_corrections=array();
$this->security_improvments=array();

$novelties=$xml_desc->xpath('whatsnew/new');
foreach($novelties as $novelty)
{
$attributes=$novelty->attributes();
$type=isset($attributes['type'])?$attributes['type']:'feature';
switch($type)
{
case 'improvment':
$this->improvments[]=utf8_decode((string)$novelty);
break;
case 'bug':
$this->bug_corrections[]=utf8_decode((string)$novelty);
break;
case 'security':
$this->security_improvments[]=utf8_decode((string)$novelty);
break;
default:
$this->new_features[]=utf8_decode((string)$novelty);
break;
}
}

$this->warning_level=self::get_attribute($xml_desc,'level','warning');
if(!empty($this->warning_level))
{
$this->warning=$xml_desc->xpath('warning');
$this->warning=utf8_decode((string)$this->warning[0]);
}
}




public function get_identifier()
{
return md5($this->type.'_'.$this->id.'_'.$this->version.'_'.$this->language);
}




public function check_compatibility()
{
$current_version=$this->get_installed_version();

if($current_version=='0')
{
return false;
}

$phpboost_version=Environment::get_phpboost_version();

return version_compare($current_version,$this->get_version(),'<')>0&&
(($phpboost_version>=$this->compatibility_min)&&($this->compatibility_max==null ||
($phpboost_version<=$this->compatibility_max&&$this->compatibility_max>=$this->compatibility_min)));
}

## PUBLIC ACCESSORS ##



public function get_id(){return $this->id;}



public function get_name(){return $this->name;}



public function get_language(){return $this->language;}



public function get_localized_language(){return!empty($this->localized_language)?$this->localized_language:$this->language;}



public function get_type(){return $this->type;}



public function get_repository(){return $this->repository;}



public function get_version(){return $this->version;}



public function get_compatibility_min(){return $this->compatibility_min;}



public function get_compatibility_max(){return $this->compatibility_max;}



public function get_pubdate(){return!empty($this->pubdate)&&is_object($this->pubdate)?$this->pubdate->format(Date::FORMAT_DAY_MONTH_YEAR,Timezone::USER_TIMEZONE):'';}



public function get_priority(){return $this->priority;}



public function get_security_update(){return $this->security_update;}



public function get_download_url(){return $this->download_url;}



public function get_update_url(){return $this->update_url;}



public function get_authors(){return $this->authors;}



public function get_description(){return $this->description;}



public function get_new_features(){return $this->new_features;}



public function get_improvments(){return $this->improvments;}



public function get_bug_corrections(){return $this->bug_corrections;}



public function get_security_improvments(){return $this->security_improvments;}



public function get_warning_level(){return $this->warning_level;}



public function get_warning(){return $this->warning;}

## PRIVATE METHODS ##







private function get_attribute($xdoc,$attibute_name,$xpath_query='.')
{
$elements=$xdoc->xpath($xpath_query);
if(count($elements)>0)
{
$attributes=$elements[0]->attributes();
return isset($attributes[$attibute_name])?utf8_decode((string)$attributes[$attibute_name]):null;
}
return null;
}





private function get_installed_version()
{
switch($this->type)
{
case self::KERNEL_TYPE:
return GeneralConfig::load()->get_phpboost_major_version();
case self::MODULE_TYPE:
if(ModulesManager::is_module_installed($this->id))
{
return ModulesManager::get_module($this->id)->get_configuration()->get_version();
}
return '0';
case self::TEMPLATE_TYPE:
if(ThemesManager::get_theme_existed($this->id))
{
return ThemesManager::get_theme($this->id)->get_configuration()->get_version();
}
return '0';
default:
return '0';
}
}
}
?>
