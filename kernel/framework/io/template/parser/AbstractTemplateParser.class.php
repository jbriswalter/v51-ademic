<?php
































abstract class AbstractTemplateParser implements TemplateParser
{
protected $content;




public function parse($content)
{
$this->content=$content;
$this->do_parse();
return $this->content;
}

abstract protected function do_parse();

protected function clean()
{
$this->content=preg_replace(
array('`# START [\w\.]+ #(.*)# END [\w\.]+ #`s','`# START [\w\.]+ #`','`# END [\w\.]+ #`','`{[\w\.]+}`'),
array('','','',''),
$this->content
);
}

protected function get_getvar_method_name($varname)
{
$method='var';
$tiny_varname=$varname;

$split_index=strpos($varname,'_');

if($split_index>0)
{
$prefix=substr($varname,0,$split_index);
$tiny_var=substr($varname,$split_index+1);
switch($prefix)
{
case 'L':
$method='lang_var';
$tiny_varname=&$tiny_var;
break;
case 'E':
$method='htmlescaped_var';
$tiny_varname=&$tiny_var;
break;
case 'J':
$method='js_var';
$tiny_varname=&$tiny_var;
break;
case 'EL':
$method='htmlescaped_lang_var';
$tiny_varname=&$tiny_var;
break;
case 'JL':
$method='js_lang_var';
$tiny_varname=&$tiny_var;
break;
default:
break;
}
}

return array('method'=>'get_'.$method,'varname'=>$tiny_varname);
}
}
?>
