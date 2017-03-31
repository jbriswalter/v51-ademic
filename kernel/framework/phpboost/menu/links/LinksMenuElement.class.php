<?php




































abstract class LinksMenuElement extends Menu
{
const LINKS_MENU_ELEMENT__CLASS='LinksMenuElement';
const LINKS_MENU_ELEMENT__FULL_DISPLAYING=true;
const LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING=false;





public $url='';




public $image='';




public $uid=null;




public $depth=0;








public function __construct($title,$url,$image='')
{
parent::__construct($title);
$this->set_url($url);
$this->set_image($image);
$this->uid=AppContext::get_uid();
}









protected function _assign($template,$mode=self::LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING)
{
if($this->image)
{
if($this->image instanceof Url)
$url=$this->image;
else
$url=new Url($this->image);

if(file_exists(PATH_TO_ROOT.$this->image))
{
if(!$url->is_relative())
$image=new Image($url->absolute());
else
$image=new Image(PATH_TO_ROOT.$this->image);

$template->put_all(array(
'C_IMG'=>!empty($this->image),
'ABSOLUTE_IMG'=>$url->absolute(),
'RELATIVE_IMG'=>$url->relative(),
'REL_IMG'=>$url->rel(),
'IMG_HEIGHT'=>$image->get_height(),
'IMG_WIDTH'=>$image->get_width()
));
}
}

parent::_assign($template);

if($this->url instanceof Url)
$url=$this->url;
else
$url=new Url($this->url);

$template->put_all(array(
'C_MENU'=>false,
'C_DISPLAY_AUTH'=>AppContext::get_current_user()->check_auth($this->get_auth(),Menu::MENU_AUTH_BIT),
'TITLE'=>$this->title,
'DEPTH'=>$this->depth,
'PARENT_DEPTH'=>$this->depth-1,
'C_URL'=>$this->url,
'ABSOLUTE_URL'=>$url->absolute(),
'RELATIVE_URL'=>$url->relative(),
'REL_URL'=>$url->rel(),
'ID'=>$this->get_uid(),
'ID_VAR'=>$this->get_uid()
));


if($mode)
{
$template->put_all(array(
'C_AUTH_MENU_HIDDEN'=>$this->get_auth()==array('r-1'=>Menu::MENU_AUTH_BIT,'r0'=>Menu::MENU_AUTH_BIT,'r1'=>Menu::MENU_AUTH_BIT),
'AUTH_FORM'=>Authorizations::generate_select(Menu::MENU_AUTH_BIT,$this->get_auth(),array(),'menu_element_'.$this->uid.'_auth')
));
}
}






private function _get_url($string_url,$compute_relative_url=true)
{
if($string_url instanceof Url)
$url=$string_url;
else
$url=new Url($string_url);

if($compute_relative_url)
{
return $url->relative();
}
else
{
return $url->absolute();
}
}





protected function _parent($type)
{
$this->depth++;
}

## Setters ##



public function set_image($image)
{
$this->image=$image;
}



public function set_url($url)
{
$this->url=$url;
}

## Getters ##




public function get_uid()
{
return $this->uid;
}



public function update_uid()
{
$this->uid=AppContext::get_uid();
}




public function get_url($compute_relative_url=true)
{
return $this->_get_url($this->url,$compute_relative_url);
}





public function get_image($compute_relative_url=true)
{
return $this->_get_url($this->image,$compute_relative_url);
}
}
?>
