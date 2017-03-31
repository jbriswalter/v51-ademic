<?php































abstract class AbstractParser implements FormattingParser
{
const PICK_UP=true;
const REIMPLANT=false;



protected $content='';



protected $array_tags=array();



protected $path_to_root=PATH_TO_ROOT;




protected $page_path='';




protected $module_special_tags=array();




public function __construct()
{
$this->content='';
$this->page_path=$_SERVER['PHP_SELF'];
}




public function get_content()
{
return trim($this->content);
}




public function set_content($content)
{
$this->content=$content;
}




public function set_path_to_root($path)
{
$this->path_to_root=$path;
}




public function get_path_to_root()
{
return $this->path_to_root;
}




public function set_page_path($page_path)
{
$this->page_path=$page_path;
}




public function get_page_path()
{
return $this->page_path;
}




public function add_module_special_tag($pattern,$replacement)
{
$this->module_special_tags[$pattern]=$replacement;
}




public function get_module_special_tags()
{
return $this->module_special_tags;
}







protected function _parse_imbricated($match,$regex,$replace)
{
$nbr_match=substr_count($this->content,$match);
for($i=0;$i<$nbr_match;$i++)
{
$this->content=preg_replace($regex,$replace,$this->content);
}
}
}
?>
