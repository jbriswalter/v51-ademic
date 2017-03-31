<?php


























class SMTPConfiguration
{
private $auth_mode='';
private $host='';
private $port=0;
private $login='';
private $password='';

public function get_auth_mode()
{
return $this->auth_mode;
}

public function set_auth_mode($auth_mode)
{
$this->auth_mode=$auth_mode;
}

public function get_host()
{
return $this->host;
}

public function set_host($host)
{
$this->host=$host;
}

public function get_port()
{
return $this->port;
}

public function set_port($port)
{
$this->port=$port;
}

public function get_login()
{
return $this->login;
}

public function set_login($login)
{
$this->login=$login;
}

public function get_password()
{
return $this->password;
}

public function set_password($password)
{
$this->password=$password;
}
}
?>
