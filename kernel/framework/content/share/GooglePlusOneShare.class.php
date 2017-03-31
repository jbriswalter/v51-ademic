<?php


























class GooglePlusOneShare extends AbstractShare
{
private $lang=null;
private $size='standard';
private $manual_url='';

const SMALL_SIZE='small';
const STANDARD_SIZE='standard';
const MEDIUM_SIZE='medium';
const TALL_SIZE='tall';

public function __construct()
{
$this->set_template(new StringTemplate('
			<script src="https://apis.google.com/js/plusone.js">
			  {lang: \'{LANG_SHARE}\'}
			</script>
			<g:plusone size="{SIZE}" # IF C_MANUAL_URL # href="{MANUAL_URL}" # ENDIF #></g:plusone>
		'));

$this->assign_vars();
}

public static function display($size='standard')
{
$class=new self();
$class->set_size($size);
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

public function set_manual_url($manual_url)
{
$this->manual_url=manual_url;
}

public function set_size($size)
{
switch($size)
{
case self::SMALL_SIZE:
case self::STANDARD_SIZE:
case self::MEDIUM_SIZE:
case self::TALL_SIZE:
$this->size=$size;
break;
default:
throw new Exception('Size entry is not correct');
}
}

private function assign_vars()
{
$this->get_template()->put_all(array(
'C_MANUAL_URL'=>!empty($this->manual_url),
'MANUAL_URL'=>$this->manual_url,
'LANG_SHARE'=>$this->get_lang(),
'SIZE'=>$this->size
));
}
}
?>
