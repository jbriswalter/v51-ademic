<?php


























class TwitterTweeterShare extends AbstractShare
{
private $lang=null;
private $layout='horizontal';
private $manual_content_tweet='';
private $manual_url='';

const VERTICAL_LAYOUT='vertical';
const HORIZONTAL_LAYOUT='horizontal';
const NO_COUNTER='none';

public function __construct()
{
$this->set_template(new StringTemplate('
			<a href="http://twitter.com/share" class="twitter-share-button" # IF C_MANUAL_URL # data-url="{MANUAL_URL}" # ENDIF # 
			# IF C_MANUAL_CONTENT_TWEET # data-text="{MANUAL_CONTENT_TWEET}" # ENDIF # data-count="{LAYOUT}" data-lang="{LANG_SHARE}">
			</a>
			<script src="http://platform.twitter.com/widgets.js"></script> 
		'));

$this->assign_vars();
}

public static function display($layout='horizontal',$manual_content_tweet='')
{
$class=new self();
$class->set_layout($layout);
$class->set_manual_content_tweet($manual_content_tweet);
return $class->display();
}

public function set_manual_lang($lang)
{
$this->lang=$lang;
}

public function get_lang()
{
if($this->lang!==null)
{
return $this->lang;
}
else
{

return substr(AppContext::get_current_user()->get_locale(),2);
}
}

public function set_manual_content_tweet($manual_content_tweet)
{
$this->manual_content_tweet=$manual_content_tweet;
}

public function set_manual_url($manual_url)
{
$this->manual_url=manual_url;
}

public function set_layout($layout)
{
switch($layout)
{
case self::VERTICAL_LAYOUT:
case self::HORIZONTAL_LAYOUT:
case self::NO_COUNTER:
$this->layout=$layout;
break;
default:
throw new Exception('Layout entry is not correct');
}
}

private function assign_vars()
{
$this->get_template()->put_all(array(
'C_MANUAL_URL'=>!empty($this->manual_url),
'MANUAL_URL'=>$this->manual_url,
'LANG_SHARE'=>$this->get_lang(),
'LAYOUT'=>$this->layout,
'C_MANUAL_CONTENT_TWEET'=>!empty($this->manual_content_tweet),
'MANUAL_CONTENT_TWEET'=>$this->manual_content_tweet
));
}
}
?>
