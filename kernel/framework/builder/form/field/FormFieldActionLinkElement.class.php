<?php






























class FormFieldActionLinkElement
{
private $title;
private $url;
private $css_class;
private $img;








public function __construct($title,$url,$css_class='',$img='')
{
$this->title=$title;
$this->url=$this->convert_url($url);
$this->css_class=$css_class;
$this->img=!empty($img)?$this->convert_url($img):$img;
}




public function get_title()
{
return $this->title;
}




public function get_url()
{
return $this->url;
}




public function has_css_class()
{
return!empty($this->css_class);
}




public function get_css_class()
{
return $this->css_class;
}




public function has_img()
{
return!empty($this->img);
}




public function get_img()
{
return $this->img;
}

private function convert_url($url)
{
return $url instanceof Url?$url:new Url($url);
}
}
?>
