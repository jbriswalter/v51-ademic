<?php
































class LinksMenu extends LinksMenuElement
{
const LINKS_MENU__CLASS='LinksMenu';

## Menu types ##
const AUTOMATIC_MENU='automatic';
const VERTICAL_MENU='vertical';
const HORIZONTAL_MENU='horizontal';
const STATIC_MENU='static';


const VERTICAL_SCROLLING_MENU='vertical_scrolling';
const HORIZONTAL_SCROLLING_MENU='horizontal_scrolling';





public $type;




public $elements=array();









public function __construct($title,$url,$image='',$type=self::AUTOMATIC_MENU)
{


$this->type=$this->type==self::HORIZONTAL_SCROLLING_MENU?self::HORIZONTAL_MENU:$this->type;
$this->type=$this->type==self::VERTICAL_SCROLLING_MENU?self::VERTICAL_MENU:$this->type;
$this->type=in_array($type,self::get_menu_types_list())?$type:self::AUTOMATIC_MENU;


parent::__construct($title,$url,$image);
}





public function add_array($menu_elements)
{
foreach($menu_elements as $element)
{
$this->add($element);
}
}





public function add($element)
{
if($element instanceof _CLASS_)
{
$element->_parent($this->type);
}
else
{
$element->_parent($this->type);
}

$this->elements[]=$element;
}




public function update_uid()
{
parent::update_uid();
foreach($this->elements as $element)
{
$element->update_uid();
}
}






public function display($template=false,$mode=LinksMenuElement::LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING)
{
$filters=$this->get_filters();
$is_displayed=empty($filters)|| $filters[0]->get_pattern()=='/' || $mode!=LinksMenuElement::LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING;

foreach($filters as $key=>$filter)
{
if($filter->get_pattern()!='/'&&$filter->match())
{
$is_displayed=true;
break;
}
}

if($is_displayed&&$this->check_auth())
{

if(!is_object($template)||!($template instanceof Template))
{
$tpl=new FileTemplate('framework/menus/links.tpl');
}
else
{
$tpl=$template;
}
$original_tpl=clone $tpl;


$elements_number=0;
foreach($this->elements as $element)
{
if($element->check_auth())
{

$tpl->assign_block_vars('elements',array('DISPLAY'=>$element->display(clone $original_tpl,$mode)));
$elements_number++;
}
}


parent::_assign($tpl,$mode);
$tpl->put_all(array(
'C_MENU'=>true,
'C_NEXT_MENU'=>$this->depth>0,
'C_FIRST_MENU'=>$this->depth==0,
'C_HAS_CHILD'=>$elements_number,
'C_HIDDEN_WITH_SMALL_SCREENS'=>$this->hidden_with_small_screens,
'DEPTH'=>$this->depth
));

if($this->type==self::AUTOMATIC_MENU)
{
$tpl->put_all(array(
'C_MENU_CONTAINER'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_HORIZONTAL'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__HEADER,Menu::BLOCK_POSITION__SUB_HEADER,Menu::BLOCK_POSITION__TOP_CENTRAL,Menu::BLOCK_POSITION__BOTTOM_CENTRAL)),
'C_MENU_VERTICAL'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_STATIC'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__TOP_FOOTER,Menu::BLOCK_POSITION__FOOTER)),
'C_MENU_LEFT'=>$this->get_block()==Menu::BLOCK_POSITION__LEFT,
'C_MENU_RIGHT'=>$this->get_block()==Menu::BLOCK_POSITION__RIGHT
));
}
else
{
$tpl->put_all(array(
'C_MENU_CONTAINER'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_HORIZONTAL'=>$this->type==self::HORIZONTAL_MENU,
'C_MENU_VERTICAL'=>$this->type==self::VERTICAL_MENU,
'C_MENU_STATIC'=>$this->type==self::STATIC_MENU,
'C_MENU_LEFT'=>$this->get_block()==Menu::BLOCK_POSITION__LEFT,
'C_MENU_RIGHT'=>$this->get_block()==Menu::BLOCK_POSITION__RIGHT
));
}

return $tpl->render();
}
return '';
}





public function cache_export($template=false)
{

if(!is_object($template)||!($template instanceof Template))
{
$tpl=new FileTemplate('framework/menus/links/links.tpl');
}
else
{
$tpl=clone $template;
}
$original_tpl=clone $tpl;


foreach($this->elements as $element)
{

$tpl->assign_block_vars('elements',array('DISPLAY'=>$element->cache_export(clone $original_tpl)));
}


parent::_assign($tpl,LinksMenuElement::LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING);
$tpl->put_all(array(
'C_MENU'=>true,
'C_NEXT_MENU'=>$this->depth>0,
'C_FIRST_MENU'=>$this->depth==0,
'C_HAS_CHILD'=>count($this->elements)>0,
'DEPTH'=>$this->depth,
'ID'=>'##.#GET_UID#.##',
'ID_VAR'=>'##.#GET_UID_VAR#.##'
));

if($this->type==self::AUTOMATIC_MENU)
{
$tpl->put_all(array(
'C_MENU_CONTAINER'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_HORIZONTAL'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__HEADER,Menu::BLOCK_POSITION__SUB_HEADER,Menu::BLOCK_POSITION__TOP_CENTRAL,Menu::BLOCK_POSITION__BOTTOM_CENTRAL)),
'C_MENU_VERTICAL'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_STATIC'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__TOP_FOOTER,Menu::BLOCK_POSITION__FOOTER)),
'C_MENU_LEFT'=>$this->get_block()==Menu::BLOCK_POSITION__LEFT,
'C_MENU_RIGHT'=>$this->get_block()==Menu::BLOCK_POSITION__RIGHT
));
}
else
{
$tpl->put_all(array(
'C_MENU_CONTAINER'=>in_array($this->get_block(),array(Menu::BLOCK_POSITION__LEFT,Menu::BLOCK_POSITION__RIGHT)),
'C_MENU_HORIZONTAL'=>$this->type==self::HORIZONTAL_MENU,
'C_MENU_VERTICAL'=>$this->type==self::VERTICAL_MENU,
'C_MENU_STATIC'=>$this->type==self::STATIC_MENU,
'C_MENU_LEFT'=>$this->get_block()==Menu::BLOCK_POSITION__LEFT,
'C_MENU_RIGHT'=>$this->get_block()==Menu::BLOCK_POSITION__RIGHT
));
}

if($this->depth==0)
{
$cache_str=parent::cache_export_begin().'\'.'.
var_export($tpl->render(),true).
'.\''.parent::cache_export_end();
$cache_str=str_replace(
array('#GET_UID#','#GET_UID_VAR#','##'),
array('($__uid = AppContext::get_uid())','$__uid','\''),
$cache_str
);
return $cache_str;
}
return parent::cache_export_begin().$tpl->render().parent::cache_export_end();
}







public static function get_menu_types_list()
{
return array(self::AUTOMATIC_MENU,self::VERTICAL_MENU,self::HORIZONTAL_MENU,self::STATIC_MENU);
}






protected function _parent($type)
{
parent::_parent($type);

$this->type=$type;
foreach($this->elements as $element)
{
$element->_parent($type);
}
}

## Getters ##



public function get_type(){return $this->type;}






public function set_type($type){$this->type=$type;}




public function get_children(){return $this->elements;}
}
?>
