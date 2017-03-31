<?php































class FeedItemEnclosure
{
private $lenght;
private $type;
private $url;





public function set_lenght($lenght)
{
$this->lenght=$lenght;
}

public function get_lenght()
{
return $this->lenght;
}





public function set_type($type)
{
$this->type=$type;
}

public function get_type()
{
return $this->type;
}





public function set_url($url)
{
if(!($url instanceof Url))
{
$url=new Url($url);
}
$this->url=$url->rel();
}

public function get_url()
{
return $this->url;
}
}
?>
