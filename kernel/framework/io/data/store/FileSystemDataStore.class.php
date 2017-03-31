<?php


































class FileSystemDataStore implements DataStore
{
private $prefix;



private $files_cache;

public function __construct($id)
{
$this->prefix=$id;
$this->files_cache=new RAMDataStore();
}




public function get($id)
{
if($this->contains($id))
{
return $this->get_data($id);
}
throw new RAMCacheException($id);
}

private function get_data($name)
{
$file=$this->get_file($name);
$content=$file->read();
$data=unserialize($content);
return $data;
}




public function contains($id)
{
return $this->get_file($id)->exists();
}




public function store($id,$data)
{
$file=$this->get_file($id);
$data_to_write=serialize($data);
$file->open(File::WRITE);
$file->lock();
$file->write($data_to_write);
$file->unlock();
$file->close();
$file->change_chmod(0666);
}




public function delete($id)
{
try
{
$this->get_file($id)->delete();
}
catch(IOException $ex)
{
}
}




public function clear()
{
$cache_dir=new Folder(PATH_TO_ROOT.'/cache');
$files=$cache_dir->get_files('`^'.$this->prefix.'-.*`');
foreach($files as $file)
{
$file->delete();
}
}

private function get_file($id)
{
if($this->files_cache->contains($id))
{
return $this->files_cache->get($id);
}
else
{
$file=new File(PATH_TO_ROOT.'/cache/'.$this->prefix.'-'.$id);
$this->files_cache->store($id,$file);
return $file;
}
}
}
?>
