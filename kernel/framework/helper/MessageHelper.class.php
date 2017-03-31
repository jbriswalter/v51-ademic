<?php































class MessageHelper
{
const SUCCESS='success';
const NOTICE='notice';
const WARNING='warning';
const ERROR='error';
const QUESTION='question';

public static function display($content,$type,$timeout=0,$display_small=false)
{
$tpl=new FileTemplate('framework/helper/message.tpl');

switch($type)
{
case self::SUCCESS:
$css_class='success';
$image='error_success';
break;
case self::NOTICE:
$css_class='notice';
$image='error_notice';
break;
case self::WARNING:
$css_class='warning';
$image='error_warning';
break;
case self::ERROR:
$css_class='error';
$image='error_fatal';
break;
case self::QUESTION:
$css_class='question';
$image='error_question';
break;
}

$tpl->put_all(array(
'ID'=>KeyGenerator::generate_key(4),
'MESSAGE_CSS_CLASS'=>$css_class.($display_small?' message-helper-small':''),
'MESSAGE_IMG'=>$image,
'MESSAGE_CONTENT'=>$content,
'C_TIMEOUT'=>$timeout>0,
'TIMEOUT'=>$timeout*1000
));

return $tpl;
}
}
?>
