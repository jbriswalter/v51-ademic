<?php































class FeedMenu extends Menu
{
const FEED_MENU__CLASS='FeedMenu';




public $url='';
public $module_id='';
public $name='';
public $category=0;
public $number=10;
public $begin_at=0;

public function __construct($title,$module_id,$category=0,$name=Feed::DEFAULT_FEED_NAME,$number=10,$begin_at=0)
{
parent::__construct($title);
$this->module_id=$module_id;
$this->category=$category;
$this->name=$name;
$this->number=$number;
$this->begin_at=$begin_at;
}








public static function get_template($name='',$block_position=Menu::BLOCK_POSITION__LEFT,$hidden_with_small_screens=false)
{
$tpl=new FileTemplate('framework/menus/feed.tpl');
$tpl->put_all(array(
'NAME'=>$name,
'C_NAME'=>!empty($name),
'C_VERTICAL_BLOCK'=>($block_position==Menu::BLOCK_POSITION__LEFT || $block_position==Menu::BLOCK_POSITION__RIGHT),
'C_HIDDEN_WITH_SMALL_SCREENS'=>$hidden_with_small_screens
));

return $tpl;
}

## Getters ##



public function get_module_id(){return $this->module_id;}





public function get_url($relative=false)
{
$url=DispatchManager::get_url('/syndication','/rss/'.$this->module_id.'/'.$this->category.'/'.$this->name.'/');
if($relative)
{
return $url->relative();
}
return $url->absolute();
}

## Setters ##



public function set_module_id($value){$this->module_id=$value;}



public function set_cat($value){$this->category=is_numeric($value)?NumberHelper::numeric($value):0;}



public function set_name($value){$this->name=$value;}




public function get_number()
{
return $this->number;
}




public function set_number($value){$this->number=$value;}

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
return Feed::get_parsed($this->module_id,$this->name,$this->category,self::get_template($this->get_title(),$this->get_block(),$this->hidden_with_small_screens),$this->number,$this->begin_at);
}
return '';
}

}
?>
