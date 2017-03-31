<?php































class UploadedFile
{
private $name='';
private $mime_type='';
private $size=0;
private $tmp_name='';

public function __construct($name,$mime_type,$size,$tmp_name)
{
$this->name=$name;
$this->mime_type=$mime_type;
$this->size=$size;
$this->tmp_name=$tmp_name;
}

public function get_name()
{
return $this->name;
}

public function get_name_without_extension()
{
$name=$this->get_name();
return substr($name,0,strpos($name,'.'));
}

public function get_extension()
{
$filename=$this->get_name();
return strtolower(substr(strrchr($filename,'.'),1));
}

public function get_mime_type()
{
return $this->mime_type;
}

public function get_size()
{
return $this->size;
}

public function get_temporary_filename()
{
return $this->tmp_name;
}





public function save(File $destination)
{
move_uploaded_file($this->tmp_name,$destination->get_path());
}
}
?>
