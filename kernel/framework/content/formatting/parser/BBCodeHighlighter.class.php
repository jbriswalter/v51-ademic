<?php
































class BBCodeHighlighter extends AbstractParser
{
const BBCODE_HIGHLIGHTER_INLINE_CODE=true;
const BBCODE_HIGHLIGHTER_BLOCK_CODE=false;



private static $bbcode_tag_color='#0000FF';



private static $bbcode_param_color='#7B00FF';



private static $bbcode_param_name_color='#FF0000';



private static $bbcode_list_item_color='#00AF07';




public function __construct()
{

parent::__construct();
}







public function parse($inline_code=self::BBCODE_HIGHLIGHTER_BLOCK_CODE)
{

$this->content=TextHelper::htmlspecialchars($this->content);


$this->content=str_replace('[line]','<span style="color:'.self::$bbcode_tag_color.';">[line]</span>',$this->content);
$this->content=str_replace('[*]','<span style="color:'.self::$bbcode_list_item_color.';">[*]</span>',$this->content);


$simple_tags=array('b','i','u','s','sup','sub','pre','math','quote','block','fieldset','sound','url','img','mail','code','tr','html','row','indent','hide','mail');

foreach($simple_tags as $tag)
{
while(preg_match('`\['.$tag.'\](.*)\[/'.$tag.'\]`isU',$this->content))
{
$this->content=preg_replace('`\['.$tag.'\](.*)\[/'.$tag.'\]`isU','<span style="color:'.self::$bbcode_tag_color.';">/[/'.$tag.'/]/</span>$1<span style="color:'.self::$bbcode_tag_color.';">/[//'.$tag.'/]/</span>',$this->content);
}
}


$tags_with_simple_property=array('img','color','bgcolor','size','font','align','float','anchor','acronym','title','stitle','style','url','mail','code','quote','movie','swf','mail');

foreach($tags_with_simple_property as $tag)
{
while(preg_match('`\['.$tag.'=([^\]]+)\](.*)\[/'.$tag.'\]`isU',$this->content))
{
$this->content=preg_replace('`\['.$tag.'=([^\]]+)\](.*)\[/'.$tag.'\]`isU','<span style="color:'.self::$bbcode_tag_color.';">/[/'.$tag.'</span>=<span style="color:'.self::$bbcode_param_color.';">$1</span><span style="color:'.self::$bbcode_tag_color.';">/]/</span>$2<span style="color:'.self::$bbcode_tag_color.';">/[//'.$tag.'/]/</span>',$this->content);
}
}


$tags_with_many_parameters=array('table','col','head','list','fieldset','block','wikipedia');

foreach($tags_with_many_parameters as $tag)
{
while(preg_match('`\[('.$tag.')([^\]]*)\](.*)\[/'.$tag.'\]`isU',$this->content))
{
$this->content=preg_replace_callback('`\[('.$tag.')([^\]]*)\](.*)\[/'.$tag.'\]`isU',array($this,'highlight_bbcode_tag_with_many_parameters'),$this->content);
}
}

if($inline_code==self::BBCODE_HIGHLIGHTER_BLOCK_CODE)
{
$this->content='<pre>'.$this->content.'</pre>';
}
else
{
$this->content='<pre style="display:inline;">'.$this->content.'</pre>';
}


$this->content=str_replace(array('/[/','/]/'),array('[',']'),$this->content);
}






private function highlight_bbcode_tag_with_many_parameters($matches)
{
$content=$matches[3];
$tag_name=$matches[1];

$matches[2]=preg_replace('`([a-z]+)="([^"]*)"`isU','<span style="color:'.self::$bbcode_param_name_color.'">$1</span>=<span style="color:'.self::$bbcode_param_color.'">"$2"</span>',$matches[2]);

return '<span style="color:'.self::$bbcode_tag_color.'">/[/'.$tag_name.'</span>'.$matches[2].'<span style="color:'.self::$bbcode_tag_color.'">/]/</span>'.$content.'<span style="color:'.self::$bbcode_tag_color.'">/[//'.$tag_name.'/]/</span>';
}
}
?>
