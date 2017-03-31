<?php



































class ContentSecondParser extends AbstractParser
{



const MAX_CODE_LENGTH=40000;



public function __construct()
{
parent::__construct();
}




public function parse()
{

$this->content=preg_replace_callback('`(src|href)="/([A-Za-z0-9#+-_\./]+)"`sU',array($this,'callbackrelative_url'),$this->content);


if(strpos($this->content,'[[CODE')!==false)
{
$this->content=preg_replace_callback('`\[\[CODE(?:=([A-Za-z0-9#+-]+))?(?:,(0|1)(?:,(0|1))?)?\]\](.+)\[\[/CODE\]\]`sU',array($this,'callbackhighlight_code'),$this->content);
}


if(strpos($this->content,'[[MEDIA]]')!==false)
{
$this->process_media_insertion();
}


if(strpos($this->content,'[[MATH]]')!==false)
{
$server_config=new ServerConfiguration();
if($server_config->has_gd_library())
{
require_once PATH_TO_ROOT.'/kernel/lib/php/mathpublisher/mathpublisher.php';
$this->content=preg_replace_callback('`\[\[MATH\]\](.+)\[\[/MATH\]\]`sU',array($this,'math_code'),$this->content);
}
}

$this->parse_feed_tag();
}






public static function export_html_text($html_content)
{

$html_content=preg_replace('`<a href="([^"]+)" style="display:block;margin:auto;width:([0-9]+)px;height:([0-9]+)px;" id="movie_[0-9]+"></a><br /><script><!--\s*insertMoviePlayer\(\'movie_[0-9]+\'\);\s*--></script>`isU',
'<object type="application/x-shockwave-flash" width="$2" height="$3">
				<param name="FlashVars" value="flv=$1&width=$2&height=$3" />
				<param name="allowScriptAccess" value="never" />
				<param name="play" value="true" />
				<param name="movie" value="$1" />
				<param name="menu" value="false" />
				<param name="quality" value="high" />
				<param name="scalemode" value="noborder" />
				<param name="wmode" value="transparent" />
				<param name="bgcolor" value="#FFFFFF" />
			</object>',
$html_content);

return Url::html_convert_root_relative2absolute($html_content);
}











private static function highlight_code($contents,$language,$line_number,$inline_code)
{
$contents=TextHelper::htmlspecialchars_decode($contents);


if(strtolower($language)=='bbcode')
{
$bbcode_highlighter=new BBCodeHighlighter();
$bbcode_highlighter->set_content($contents);
$bbcode_highlighter->parse($inline_code);
$contents=$bbcode_highlighter->get_content();
}

elseif(strtolower($language)=='tpl' || strtolower($language)=='template')
{
require_once(PATH_TO_ROOT.'/kernel/lib/php/geshi/geshi.php');

$template_highlighter=new TemplateHighlighter();
$template_highlighter->set_content($contents);
$template_highlighter->parse($line_number?GESHI_NORMAL_LINE_NUMBERS:GESHI_NO_LINE_NUMBERS,$inline_code);
$contents=$template_highlighter->get_content();
}
elseif(strtolower($language)=='plain')
{
$plain_code_highlighter=new PlainCodeHighlighter();
$plain_code_highlighter->set_content($contents);
$plain_code_highlighter->parse();
$contents=$plain_code_highlighter->get_content();
}
elseif($language!='')
{
require_once(PATH_TO_ROOT.'/kernel/lib/php/geshi/geshi.php');
$Geshi=new GeSHi($contents,$language);

if($line_number)
{
$Geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
}


if($inline_code)
{
$Geshi->set_header_type(GESHI_HEADER_NONE);
}

$contents='<pre style="display:inline;">'.$Geshi->parse_code().'</pre>';
}
else
{
$highlight=highlight_string($contents,true);
$font_replace=str_replace(array('<font ','</font>'),array('<span ','</span>'),$highlight);
$contents=preg_replace('`color="(.*?)"`','style="color:$1"',$font_replace);
}

return $contents;
}






private function callbackrelative_url($matches)
{
return $matches[1].'="'.Url::to_rel('/'.$matches[2]).'"';
}








private function callbackhighlight_code($matches)
{
$line_number=!empty($matches[2]);
$inline_code=!empty($matches[3]);

$content_to_highlight=$matches[4];

if(strlen($content_to_highlight)>self::MAX_CODE_LENGTH)
{
return '<div class="error">'.LangLoader::get_message('code_too_long_error','editor-common').'</div>';

}

$contents=$this->highlight_code($content_to_highlight,$matches[1],$line_number,$inline_code);

if(!$inline_code&&!empty($matches[1]))
{
$contents='<span class="formatter-code">'.sprintf(LangLoader::get_message('code_langage','main'),strtoupper($matches[1])).'</span><div class="code">'.$contents.'</div>';
}
else if(!$inline_code&&empty($matches[1]))
{
$contents='<span class="formatter-code">'.LangLoader::get_message('code_tag','main').'</span><div class="code">'.$contents.'</div>';
}

return $contents;
}







private function math_code($matches)
{
$matches[1]=str_replace('<br />','',$matches[1]);
$code=mathimage($matches[1],12,'/images/maths/');
return $code;
}




private function process_media_insertion()
{

$this->content=preg_replace_callback('`\[\[MEDIA\]\]insertSwfPlayer\(\'([^\']+)\', ([0-9]+), ([0-9]+)\);\[\[/MEDIA\]\]`isU',array('ContentSecondParser','process_swf_tag'),$this->content);

$this->content=preg_replace_callback('`\[\[MEDIA\]\]insertMoviePlayer\(\'([^\']+)\', ([0-9]+), ([0-9]+)\);\[\[/MEDIA\]\]`isU',array('ContentSecondParser','process_movie_tag'),$this->content);

$this->content=preg_replace_callback('`\[\[MEDIA\]\]insertSoundPlayer\(\'([^\']+)\'\);\[\[/MEDIA\]\]`isU',array('ContentSecondParser','process_sound_tag'),$this->content);

$this->content=preg_replace_callback('`\[\[MEDIA\]\]insertYoutubePlayer\(\'([^\']+)\', ([0-9]+), ([0-9]+)\);\[\[/MEDIA\]\]`isU',array('ContentSecondParser','process_youtube_tag'),$this->content);
}






private static function process_swf_tag($matches)
{
return "<object type=\"application/x-shockwave-flash\" data=\"".$matches[1]."\" width=\"".$matches[2]."\" height=\"".$matches[3]."\">".
"<param name=\"allowScriptAccess\" value=\"never\" />".
"<param name=\"play\" value=\"true\" />".
"<param name=\"movie\" value=\"".Url::to_rel($matches[1])."\" />".
"<param name=\"menu\" value=\"false\" />".
"<param name=\"quality\" value=\"high\" />".
"<param name=\"scalemode\" value=\"noborder\" />".
"<param name=\"wmode\" value=\"transparent\" />".
"<param name=\"bgcolor\" value=\"#000000\" />".
"</object>";
}






private static function process_movie_tag($matches)
{
$id='movie_'.AppContext::get_uid();
return '<a class="video-player" href="'.Url::to_rel($matches[1]).'" style="display:block;margin:auto;width:'.$matches[2].'px;height:'.$matches[3].'px;" id="'.$id.'"></a><br />'.
'<script><!--'."\n".
'insertMoviePlayer(\''.$id.'\');'.
"\n".'--></script>';
}






private static function process_sound_tag($matches)
{
return '<audio controls><source src="'.Url::to_rel($matches[1]).'" /></audio>';
}

private static function process_youtube_tag($matches)
{
return '<video class="youtube-player" width="'.$matches[2].'" height="'.$matches[3].'" controls>
			<source src="'.$matches[1].'" type="video/mp4" />
		</video>';
}

private function parse_feed_tag()
{
$this->content=preg_replace_callback('`\[\[FEED((?: [a-z]+="[^"]+")*)\]\]([a-z]+)\[\[/FEED\]\]`U',array(__CLASS__,'inject_feed'),$this->content);
}

private static function inject_feed(array $matches)
{
$module=$matches[2];
$args=self::parse_feed_tag_args($matches[1]);
$name=!empty($args['name'])?$args['name']:Feed::DEFAULT_FEED_NAME;
$cat=!empty($args['cat'])?$args['cat']:0;
$tpl=false;
$number=!empty($args['number'])?$args['number']:10;

$result='';

try
{
$result=Feed::get_parsed($module,$name,$cat,$tpl,$number);
}
catch(Exception $e)
{
}

if(!empty($result))
{
return $result;
}
else
{
$error=StringVars::replace_vars(LangLoader::get_message('feed_tag_error','editor-common'),array('module'=>$module));
return '<div class="error">'.$error.'</div>';
}
}

private static function parse_feed_tag_args($matches)
{
$args=explode(' ',trim($matches));
$result=array();

foreach($args as $arg)
{
$param=array();

if(!preg_match('`([a-z]+)="([^"]+)"`U',$arg,$param))
{
break;
}

$name=$param[1];
$value=$param[2];

if(in_array($name,array('name','cat','number')))
{
$result[$name]=$value;
}
}

return $result;
}
}
?>
