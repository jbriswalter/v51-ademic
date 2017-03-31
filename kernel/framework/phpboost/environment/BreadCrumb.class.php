<?php


































class BreadCrumb
{



private $array_links=array();



private $graphical_environment;






public function add($text,$target='')
{
if(!empty($text))
{
$url=$target instanceof Url?$target->rel():$target;
$this->array_links[]=array($text,$url);
return true;
}
else
{
return false;
}
}





public function reverse()
{
$this->array_links=array_reverse($this->array_links);
}




public function remove_last()
{
array_pop($this->array_links);
}




public function display(Template $tpl)
{
if(empty($this->array_links))
{
$this->add($this->get_page_title(),REWRITED_SCRIPT);
}

$tpl->put_all(array(
'START_PAGE'=>TPL_PATH_TO_ROOT.'/',
'L_INDEX'=>LangLoader::get_message('home','main')
));

$output=array_slice($this->array_links,-1,1);
foreach($this->array_links as $key=>$array)
{
$tpl->assign_block_vars('link_bread_crumb',array(
'C_CURRENT'=>$output[0]==$array,
'URL'=>$array[1],
'TITLE'=>$array[0]
));
}
}




public function clean()
{
$this->array_links=array();
}

public function get_links()
{
return $this->array_links;
}





public function set_graphical_environment(SiteDisplayGraphicalEnvironment $env)
{
$this->graphical_environment=$env;
}

private function get_page_title()
{
return $this->graphical_environment->get_page_title();
}
}
?>
