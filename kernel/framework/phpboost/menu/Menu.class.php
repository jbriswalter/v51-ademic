<?php
































abstract class Menu
{
const MENU_AUTH_BIT=1;
const MENU_ENABLE_OR_NOT=42;
const MENU_ENABLED=true;
const MENU_NOT_ENABLED=false;

const BLOCK_POSITION__NOT_ENABLED=0;
const BLOCK_POSITION__HEADER=1;
const BLOCK_POSITION__SUB_HEADER=2;
const BLOCK_POSITION__TOP_CENTRAL=3;
const BLOCK_POSITION__BOTTOM_CENTRAL=4;
const BLOCK_POSITION__TOP_FOOTER=5;
const BLOCK_POSITION__FOOTER=6;
const BLOCK_POSITION__LEFT=7;
const BLOCK_POSITION__RIGHT=8;
const BLOCK_POSITION__ALL=9;

const MENU__CLASS='Menu';





public $id=0;




public $title='';




public $auth=null;




public $enabled=self::MENU_NOT_ENABLED;




public $block=self::BLOCK_POSITION__NOT_ENABLED;




public $position=-1;




protected $hidden_with_small_screens=false;




public $filters=array();




protected $template=null;







public function __construct($title)
{
$this->title=TextHelper::strprotect($title,TextHelper::HTML_PROTECT,TextHelper::ADDSLASHES_NONE);
$this->filters[]=new MenuStringFilter('/');
}





public function need_cached_string()
{
return false;
}






abstract public function display();





public function admin_display()
{
return $this->display();
}




public function id($id){$this->id=$id;}






protected function _assign($template)
{
MenuService::assign_positions_conditions($template,$this->get_block());
}






protected function assign_common_template_variables(Template $template)
{
$template->put_all(array(
'C_VERTICAL_BLOCK'=>($this->get_block()==Menu::BLOCK_POSITION__LEFT || $this->get_block()==Menu::BLOCK_POSITION__RIGHT),
'C_HIDDEN_WITH_SMALL_SCREENS'=>$this->hidden_with_small_screens
));
}





public function check_auth()
{
return $this->auth===null || AppContext::get_current_user()->check_auth($this->auth,self::MENU_AUTH_BIT);
}

## Setters ##



public function set_title($title){$this->title=TextHelper::strprotect($title,TextHelper::HTML_PROTECT,TextHelper::ADDSLASHES_NONE);}



public function set_auth($auth){$this->auth=$auth;}



public function enabled($enabled=self::MENU_ENABLED){$this->enabled=$enabled;}



public function set_block($block){$this->block=$block;}



public function set_block_position($position){$this->position=$position;}



public function set_hidden_with_small_screens($value){$this->hidden_with_small_screens=$value;}

## Getters ##



public function get_formated_title(){return $this->title;}



public function get_title(){return $this->title;}



public function get_auth(){return is_array($this->auth)?$this->auth:array('r-1'=>self::MENU_AUTH_BIT,'r0'=>self::MENU_AUTH_BIT,'r1'=>self::MENU_AUTH_BIT);}



public function get_id(){return $this->id;}



public function get_block(){return $this->block;}



public function get_block_position(){return $this->position;}



public function is_enabled(){return $this->enabled;}



public function is_hidden_with_small_screens(){return $this->hidden_with_small_screens;}



public function get_filters(){return $this->filters;}






public function set_filters($filters){$this->filters=$filters;}






public function set_template(Template $template)
{
$this->template=$template;
}




protected function get_template_to_use()
{
if($this->template!==null)
{
return $this->template;
}
else
{
return $this->get_default_template();
}
}






protected function get_default_template(){}
}
?>
