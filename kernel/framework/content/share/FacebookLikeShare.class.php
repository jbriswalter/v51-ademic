<?php


























class FacebookLikeShare extends AbstractShare
{
private $manual_url='';
private $width=450;
private $show_faces=true;
private $layout='standard';
private $color_scheme='light';
private $action='like';
private $send_button=false;

const LIKE_ACTION='like';
const RECOMMEND_ACTION='recommend';

const LIGHT_COLOR_SCHEME='light';
const DARK_COLOR_SCHEME='dark';

const STANDARD_LAYOUT='standard';
const BUTTON_COUNT_LAYOUT='button_count';
const BOX_COUNT_LAYOUT='box_count';

public function __construct()
{
$this->set_template(new StringTemplate('
			<div id="fb-root"></div>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
			<fb:like href="{URL}" send="{SEND_BUTTON}" width="{WIDTH}" show_faces="{SHOW_FACES}" 
			layout="{LAYOUT}" colorscheme="{COLOR_SCHEME}" action="{ACTION}"></fb:like>
		'));

$this->assign_vars();
}

public static function display($width=450,$show_faces=true,$layout='standard',$action='like',$color_scheme='like',$send_button=false)
{
$class=new self();
$class->set_width($width);
$class->set_show_faces($show_faces);
$class->set_layout($layout);
$class->set_action($action);
$class->set_color_scheme($color_scheme);
$class->set_send_button($send_button);
return $class->display();
}

public function set_manual_url($manual_url)
{
$this->manual_url=manual_url;
}

public function get_url()
{
if(empty($this->manual_url))
{
return $this->manual_url;
}
else
{
return REWRITED_SCRIPT;
}
}

public function set_width($width)
{
$this->width=$width;
}

public function set_show_faces($show_faces)
{
$this->show_faces=$show_faces;
}

public function set_send_button($send_button)
{
$this->send_button=$send_button;
}

public function set_layout($layout)
{
switch($layout)
{
case self::STANDARD_LAYOUT:
case self::BUTTON_COUNT_LAYOUT:
case self::BOX_COUNT_LAYOUT:
$this->layout=$layout;
break;
default:
throw new Exception('Layout entry is not correct');
}
}

public function set_action($action)
{
switch($action)
{
case self::LIKE_ACTION:
case self::RECOMMEND_ACTION:
$this->action=$action;
break;
default:
throw new Exception('Action entry is not correct');
}
}

public function set_color_scheme($color_scheme)
{
switch($color_scheme)
{
case self::LIGHT_COLOR_SCHEME:
case self::DARK_COLOR_SCHEME:
$this->color_scheme=$color_scheme;
break;
default:
throw new Exception('Color scheme entry is not correct');
}
}

private function assign_vars()
{
$this->get_template()->put_all(array(
'URL'=>$this->get_url(),
'WIDTH'=>$this->width,
'SHOW_FACES'=>$this->show_faces,
'LAYOUT'=>$this->layout,
'ACTION'=>$this->action,
'COLOR_SCHEME'=>$this->color_scheme,
'SEND_BUTTON'=>$this->send_button
));
}
}
?>
