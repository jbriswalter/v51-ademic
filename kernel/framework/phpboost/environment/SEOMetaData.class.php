<?php































class SEOMetaData
{
private $title;
private $full_title;
private $description;
private $keywords=array();
private $canonical_url;

public function set_title($title,$section='')
{
$this->title=$title;

if(!Environment::home_page_running())
{
$this->full_title=(empty($section)?$title:$title.' - '.$section).' - '.GeneralConfig::load()->get_site_name();
}
else
{

$this->full_title=GeneralConfig::load()->get_site_name().' - '.$title;
}
}

public function get_title()
{
return $this->title;
}

public function get_full_title()
{
return $this->full_title;
}

public function set_description($description)
{
$this->description=$description;
}

public function complete_description($additional_description)
{
$this->description=$this->description.' '.$additional_description;
}

public function get_description()
{
return $this->description;
}

public function get_full_description()
{
if(Environment::home_page_running())
return GeneralConfig::load()->get_site_description();
else
return strip_tags($this->description);
}

public function set_canonical_url(Url $canonical_url)
{
$this->canonical_url=$canonical_url;
}

public function canonical_link_exists()
{
return $this->canonical_url!==null;
}

public function get_canonical_link()
{
if($this->canonical_url!==null)
{
return $this->canonical_url->absolute();
}
}
}
?>
