<?php































class LinksMenuLink extends LinksMenuElement
{
const LINKS_MENU_LINK__CLASS='LinksMenuLink';








public function __construct($title,$url,$image='')
{
parent::__construct($title,$url,$image);
}






public function display($template=false,$mode=LinksMenuElement::LINKS_MENU_ELEMENT__CLASSIC_DISPLAYING)
{

if(!$this->check_auth())
{
return '';
}

parent::_assign($template,$mode);
$template->put_all(array(
'C_DISPLAY_AUTH'=>AppContext::get_current_user()->check_auth($this->get_auth(),Menu::MENU_AUTH_BIT),
'C_LINK'=>true
));

return $template->render();
}
}
?>
