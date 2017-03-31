<?php
































abstract class FileSystemElement
{



private $path;





protected function __construct($path)
{
$this->path=Path::uniformize_path($path);
}





public function exists()
{
return file_exists($this->path);
}





public function get_path()
{
return $this->path;
}





public function get_path_from_root()
{
$path_from_root=Path::get_path_from_root($this->path);
if(empty($path_from_root))
{
return $this->path;
}
return $path_from_root;
}





public function get_name()
{
if(strpos($this->path,'/')!==false)
{
$parts=explode('/',trim($this->path,'/'));
return $parts[count($parts)-1];
}
return $this->path;
}






public function is_writable($force_chmod=false)
{
if(!$this->exists())
{
return false;
}
else if(@is_writable($this->path))
{
return true;
}
else if($force_chmod)
{
return $folder->change_chmod(0777)&&@is_writable($this->path);
}
return false;
}






public function change_chmod($chmod)
{
if(!empty($this->path))
{
return chmod($this->path,$chmod);
}
return false;
}





public abstract function delete();
}
?>
