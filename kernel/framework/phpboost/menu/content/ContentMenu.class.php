<?php































class ContentMenu extends Menu
{
const CONTENT_MENU__CLASS='ContentMenu';




public $content='';




public $display_title=true;

public function __construct($title)
{
parent::__construct($title);
}





public function display()
{
$filters=$this->get_filters();
$is_displayed=empty($filters)|| $filters[0]->get_pattern()=='/';

foreach($filters as $key=>$filter)
{
if($filter->get_pattern()!='/'&&$filter->match())
{
$is_displayed=true;
break;
}
}

if($is_displayed)
{
$tpl=new FileTemplate('framework/menus/content.tpl');
$tpl->put_all(array(
'C_DISPLAY_TITLE'=>$this->display_title,
'C_VERTICAL_BLOCK'=>($this->get_block()==Menu::BLOCK_POSITION__LEFT || $this->get_block()==Menu::BLOCK_POSITION__RIGHT),
'TITLE'=>$this->title,
'CONTENT'=>FormatingHelper::second_parse($this->content),
'C_HIDDEN_WITH_SMALL_SCREENS'=>$this->hidden_with_small_screens
));
return $tpl->render();
}
return '';
}

## Setters ##



public function set_display_title($display_title){$this->display_title=$display_title;}




public function set_content($content){$this->content=FormatingHelper::strparse($content,array(),false);}

## Getters ##




public function get_display_title(){return $this->display_title;}




public function get_content(){return $this->content;}

public function need_cached_string()
{
return true;
}
}
?>
