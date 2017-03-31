<?php
































class ATOM extends Feed
{
const DEFAULT_ATOM_TEMPLATE='framework/content/syndication/atom.tpl';

## Public Methods ##






public function __construct($module_id,$feed_name=Feed::DEFAULT_FEED_NAME,$id_cat=0)
{
parent::__construct($module_id,$feed_name,$id_cat);
$this->tpl=new FileTemplate(self::DEFAULT_ATOM_TEMPLATE);
}





public function load_file($url)
{
if(($file=@file_get_contents($url))!==false)
{
$this->data=new FeedData();
if(preg_match('`<entry>(.*)</entry>`is',$file))
{
$expParsed=explode('<entry>',$file);
$nbItems=(count($expParsed)-1)>$nbItems?$nbItems:count($expParsed)-1;

$this->data->set_date(preg_match('`<updated>(.*)</updated>`is',$expParsed[0],$var)?$var[1]:'');
$this->data->set_title(preg_match('`<title>(.*)</title>`is',$expParsed[0],$var)?$var[1]:'');
$this->data->set_link(preg_match('`<link href="(.*)"/>`is',$expParsed[0],$var)?$var[1]:'');
$this->data->set_host(preg_match('`<link href="(.*)"/>`is',$expParsed[0],$var)?$var[1]:'');

for($i=1;$i<=$nbItems;$i++)
{
$item=new FeedItem();
$item->set_title(preg_match('`<title>(.*)</title>`is',$expParsed[$i],$title)?$title[1]:'');
$item->set_link(preg_match('`<link href="(.*)"/>`is',$expParsed[$i],$url)?$url[1]:'');
$item->set_guid(preg_match('`<id>(.*)</id>`is',$expParsed[$i],$guid)?$guid[1]:'');
$item->set_desc(preg_match('`<summary>(.*)</summary>`is',$expParsed[$i],$desc)?$desc[1]:'');
$item->set_date(preg_match('`<updated>(.*)</updated>`is',$expParsed[$i],$date)?new Date(strtotime($date[1]),Timezone::SERVER_TIMEZONE):null);

$enclosure=preg_match('`<enclosure rel="enclosure" url="(.*)" length="(.*)" type="(.*)" />`is',$expParsed[$i]);
if($enclosure)
{
$enclosure_item=new FeedItemEnclosure();
$enclosure_item->set_lenght($enclosure[2]);
$enclosure_item->set_type($enclosure[3]);
$enclosure_item->set_url($enclosure[1]);
$item->set_enclosure($enclosure_item);
}

$this->data->add_item($item);
}
return true;
}
return false;
}
return false;
}
}
?>
