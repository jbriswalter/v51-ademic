<?php
































class HTTPCookie
{
private $name;
private $value;
private $expiration_date;
private $path='/';
private $domain='';
private $secure=false;
private $httponly=true;

public function __construct($name,$value,$timestamp=null)
{
$this->name=$name;
$this->value=stripslashes($value);

if(AppContext::get_request()->get_is_https())
$this->set_secure(true);

$site_path=GeneralConfig::load()->get_site_path();
if(!empty($site_path))
{
$this->path=$site_path;
}

if($timestamp==null)
{
$this->expiration_date=time()+3600*744;
}
else
{
$this->expiration_date=$timestamp;
}
}








public function set_expiration_date($timestamp)
{
$this->expiration_date=$timestamp;
}







public function set_path($path)
{
$this->path=$path;
}





public function set_domain($domain)
{
$this->domain=$domain;
}










public function set_secure($secure)
{
$this->secure=(bool)$secure;
}









public function set_httponly($httponly)
{
$this->httponly=(bool)$httponly;
}

public function get_name()
{
return $this->name;
}

public function get_value()
{
return $this->value;
}

public function get_expiration_date()
{
return $this->expiration_date;
}

public function get_path()
{
return $this->path;
}

public function get_domain()
{
return $this->domain;
}

public function get_secure()
{
return $this->secure;
}

public function get_httponly()
{
return $this->httponly;
}
}
?>
