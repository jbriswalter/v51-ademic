<?php
































class CustomizeInterface
{
private $header_logo_path='';

public function set_header_logo_path($header_logo_path)
{
$this->header_logo_path=$header_logo_path;
}

public function get_header_logo_path()
{
return $this->header_logo_path;
}

public function remove_header_logo_path()
{
$this->header_logo_path='';
}
}
?>
