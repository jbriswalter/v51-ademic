<?php































class Image extends FileSystemElement
{
private $properties;

public function __construct($path)
{
$this->path=$path;
$this->properties=$this->get_properties();
}





private function get_properties()
{
return @getimagesize($this->path);
}

public function get_path()
{
return $this->path;
}

public function get_width()
{
return is_array($this->properties)?$this->properties[0]:0;
}

public function get_height()
{
return is_array($this->properties)?$this->properties[1]:0;
}

public function get_mime_type()
{
return is_array($this->properties)?$this->properties['mime']:null;
}





public function get_size()
{
return filesize($this->path);
}

public function get_name_and_extension()
{
$explode=explode('/',$this->path);
return array_pop($explode);
}

public function get_extension()
{
$filename=$this->get_name_and_extension();
return strtolower(substr(strrchr($filename,'.'),1));
}

public function get_name()
{
$filename=$this->get_name_and_extension();
return substr($filename,0,strpos($filename,'.'));
}

public function get_folder_image()
{
return dirname($this->path);
}

function delete()
{
$file=new File($this->path);
$file->delete();
}
}
?>
