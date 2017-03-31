<?php


























define('FEEDS_PATH',PATH_TO_ROOT.'/cache/syndication/');
define('ERROR_GETTING_CACHE','Error regenerating and / or retrieving the syndication cache of the %s (%s)');







class Feed
{
const DEFAULT_FEED_NAME='master';




private $module_id='';




private $id_cat=0;




private $name='';




private $str='';




protected $tpl=null;




private $data=null;







public function __construct($module_id,$name=self::DEFAULT_FEED_NAME,$id_cat=0)
{
$this->module_id=$module_id;
$this->name=$name;
$this->id_cat=$id_cat;
}





public function load_data($data){$this->data=$data;}




public function load_file($url){}










public function export($template=false,$number=10,$begin_at=0)
{
if($template===false)
{
$tpl=clone $this->tpl;
}
else
{
$tpl=clone $template;
}


if(!empty($this->data))
{
$desc=TextHelper::htmlspecialchars($this->data->get_desc());
$tpl->put_all(array(
'DATE'=>$this->data->get_date(),
'DATE_RFC822'=>$this->data->get_date_rfc2822(),
'DATE_RFC3339'=>$this->data->get_date_iso8601(),
'DATE_TEXT'=>$this->data->get_date_text(),
'THIS_YEAR'=>date('Y'),
'TITLE'=>$this->data->get_title(),
'U_LINK'=>$this->data->get_link(),
'HOST'=>$this->data->get_host(),
'DESC'=>ContentSecondParser::export_html_text($desc),
'RAW_DESC'=>$desc,
'LANG'=>$this->data->get_lang()
));

$items=$this->data->subitems($number,$begin_at);
foreach($items as $item)
{
$desc=TextHelper::htmlspecialchars($item->get_desc());
$enclosure=$item->get_enclosure();
$tpl->assign_block_vars('item',array(
'TITLE'=>$item->get_title(),
'U_LINK'=>$item->get_link(),
'U_GUID'=>$item->get_guid(),
'DESC'=>ContentSecondParser::export_html_text($desc),
'RAW_DESC'=>$desc,
'DATE'=>$item->get_date(),
'DATE_RFC822'=>$item->get_date_rfc2822(),
'DATE_RFC3339'=>$item->get_date_iso8601(),
'DATE_TEXT'=>$item->get_date_text(),
'C_IMG'=>($item->get_image_url()!='')?true:false,
'U_IMG'=>$item->get_image_url(),
'C_ENCLOSURE'=>$enclosure!==null,
'ENCLOSURE_LENGHT'=>$enclosure!==null?$enclosure->get_lenght():'',
'ENCLOSURE_TYPE'=>$enclosure!==null?$enclosure->get_type():'',
'ENCLOSURE_URL'=>$enclosure!==null?$enclosure->get_url():''
));
}
}

return $tpl->render();
}





public function read()
{
if($this->is_in_cache())
{
$include=include($this->get_cache_file_name());
if($include)
{
$this->data=$__feed_object;
return $this->export();
}
}
return '';
}




public function cache()
{
self::update_cache($this->module_id,$this->name,$this->data,$this->id_cat);
}





public function is_in_cache()
{
return file_exists($this->get_cache_file_name());
}





public function get_cache_file_name()
{
return FEEDS_PATH.$this->module_id.'_'.$this->name.'_'.$this->id_cat.'.php';
}







public static function clear_cache($module_id=false)
{
$folder=new Folder(FEEDS_PATH);
$files=null;
if($module_id!==false)
{
$files=$folder->get_files('`'.$module_id.'_.*`');
foreach($files as $file)
{
$file->delete();
}
}
else
{
AppContext::get_cache_service()->clear_syndication_cache();
}
}










private static function update_cache($module_id,$name,$data,$idcat=0)
{
if($data instanceof FeedData)
{
$file=new File(FEEDS_PATH.$module_id.'_'.$name.'_'.$idcat.'.php');
$file->write('<?php $__feed_object = unserialize('.var_export($data->serialize(),true).'); ?>');
$file->close();
return true;
}
return false;
}














public static function get_parsed($module_id,$name=self::DEFAULT_FEED_NAME,$idcat=0,$template=false,$number=10,$begin_at=0)
{
if(!($template instanceof Template))
{
$template=new FileTemplate($module_id.'/framework/content/syndication/feed.tpl');
if(gettype($template)=='array')
{
$template->put_all($template);
}
}

$feed_data_cache_file_exists=true;

$feed_data_cache_file=FEEDS_PATH.$module_id.'_'.$name.'_'.$idcat.'.php';
if(!file_exists($feed_data_cache_file))
{
$extension_provider_service=AppContext::get_extension_provider_service();
$provider=$extension_provider_service->get_provider($module_id);

if(!$provider->has_extension_point(FeedProvider::EXTENSION_POINT))
{

return '';
}
$feed_provider=$provider->get_extension_point(FeedProvider::EXTENSION_POINT);
$data=$feed_provider->get_feed_data_struct($idcat);
$feed_data_cache_file_exists=self::update_cache($module_id,$name,$data,$idcat);
}

if($feed_data_cache_file_exists)
{
include $feed_data_cache_file;
if($__feed_object)
{
$feed=new Feed($module_id,$name);
$feed->load_data($__feed_object);
return $feed->export($template,$number,$begin_at);
}
return '';
}
else
{
MessageHelper::display(sprintf(ERROR_GETTING_CACHE,$module_id,$idcat),MessageHelper::WARNING);
return '';
}
}







public static function get_feed_menu($module_id,$id_cat=0)
{
$feed_menu=new FileTemplate('framework/content/syndication/menu.tpl');

$feed_menu->put_all(array(
'U_FEED_RSS'=>SyndicationUrlBuilder::rss($module_id,$id_cat)->absolute(),
'U_FEED_ATOM'=>SyndicationUrlBuilder::atom($module_id,$id_cat)->absolute()
));

return $feed_menu->render();
}
}
?>
