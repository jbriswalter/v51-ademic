<?php































class DefaultTemplateData implements TemplateData
{
private $strict=false;
private $vars=array();




public function enable_strict_mode()
{
$this->strict=true;
}




public function disable_strict_mode()
{
$this->strict=false;
}




public function auto_load_frequent_vars()
{
$session=AppContext::get_session();
$user=AppContext::get_current_user();
$this->put_all(array(
'THEME'=>$user->get_theme(),
'LANG'=>$user->get_locale(),
'IS_USER_CONNECTED'=>$user->check_level(User::MEMBER_LEVEL),
'IS_ADMIN'=>$user->check_level(User::ADMIN_LEVEL),
'IS_MODERATOR'=>$user->check_level(User::MODERATOR_LEVEL),
'PATH_TO_ROOT'=>TPL_PATH_TO_ROOT,
'PHP_PATH_TO_ROOT'=>PATH_TO_ROOT,
'TOKEN'=>!empty($session)?$session->get_token():'',
'REWRITED_SCRIPT'=>REWRITED_SCRIPT
));
}




public function put($key,$value)
{
$this->vars[$key]=$value;
}




public function put_all(array $vars)
{
foreach($vars as $key=>$value)
{
$this->vars[$key]=$value;
}
}




public function assign_block_vars($block_name,array $array_vars,array $subtemplates=array())
{
$current_block=null;
if(strpos($block_name,'.')!==false)
{
$blocks=explode('.',$block_name);
$blockcount=count($blocks)-1;

$str=&$this->vars;
for($i=0;$i<$blockcount;$i++)
{
$str=&$str[$blocks[$i]];
$str=&$str[count($str)-1];
}
$current_block=&$str[$blocks[$blockcount]][];
}
else
{
$current_block=&$this->vars[$block_name][];
}
$current_block=array_merge($array_vars,$subtemplates);
}




public function get_block($blockname)
{
return $this->get_block_from_list($blockname,$this->vars);
}




public function get_block_from_list($blockname,$parent_block)
{
if(isset($parent_block[$blockname])&&is_array($parent_block[$blockname]))
{
return $parent_block[$blockname];
}
elseif($this->strict)
{
throw new TemplateRenderingException('Undefined block \''.$blockname.'\'');
}
return array();
}




public function is_true($value)
{
return!empty($value);
}




public function get($varname)
{
return $this->get_from_list($varname,$this->vars);
}




public function get_from_list($varname,&$list)
{
if(isset($list[$varname]))
{
return $list[$varname];
}
elseif($this->strict)
{
throw new TemplateRenderingException('Undefined variable \''.$varname.'\'');
}
return null;
}

private function register_var($name,$value,&$list)
{
$list[$name]=$value;
return $value;
}




public function bind_vars(TemplateData $data)
{
$data->vars=&$this->vars;
}
}
?>
