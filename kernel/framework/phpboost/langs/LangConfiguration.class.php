<?php































class LangConfiguration
{
private $name;
private $author_name;
private $author_mail;
private $author_link;
private $date;
private $version;
private $compatibility;

public function __construct($config_ini_file)
{
$this->load_configuration($config_ini_file);
}

public function get_name()
{
return $this->name;
}

public function get_author_name()
{
return $this->author_name;
}

public function get_author_mail()
{
return $this->author_mail;
}

public function get_author_link()
{
return $this->author_link;
}

public function get_date()
{
return $this->date;
}

public function get_version()
{
return $this->version;
}

public function get_compatibility()
{
return $this->compatibility;
}


private function load_configuration($config_ini_file)
{
$config=@parse_ini_file($config_ini_file);
$this->check_parse_ini_file($config,$config_ini_file);

$this->name=$config['name'];
$this->author_name=$config['author'];
$this->author_mail=$config['author_mail'];
$this->author_link=$config['author_link'];
$this->date=$config['date'];
$this->version=$config['version'];
$this->compatibility=$config['compatibility'];
}

private function check_parse_ini_file($parse_result,$ini_file)
{
if($parse_result===false)
{
throw new IOException('Parse ini file "'.$ini_file.'" failed');
}
}
}
?>
