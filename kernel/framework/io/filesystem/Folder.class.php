<?php































class Folder extends FileSystemElement
{
private $opened=false;




private $files=array();



private $folders=array();





public function __construct($path)
{
parent::__construct(rtrim($path,'/'));
}





public function create()
{
$path=$this->get_path();
if(@file_exists($path))
{
if(!@is_dir($path))
{
return false;
}
}
else if(!@mkdir($path))
{
return false;
}
return true;
}




private function open()
{
if(!$this->opened)
{
$this->files=array();
$this->folders=array();
$path=$this->get_path();
if($dh=@opendir($path))
{
while(!is_bool($fse_name=readdir($dh)))
{
if($fse_name=='.' || $fse_name=='..')
{
continue;
}

$file=$path.'/'.$fse_name;
if(!is_link($file))
{
if(is_dir($file))
{
$this->folders[]=new Folder($file);
}
else
{
$this->files[]=new File($file);
}
}
}
closedir($dh);
}
else
{
throw new IOException('Can\'t open folder : '.$this->get_path());
}
$this->opened=true;
}
}







public function get_files($regex='',$regex_exclude_files=false)
{
$this->open();
if(empty($regex))
{
return $this->files;
}

$files=array();
foreach($this->files as $file)
{
if($regex_exclude_files)
{
if(!preg_match($regex,$file->get_name()))
{
$files[]=$file;
}
}
else
{
if(preg_match($regex,$file->get_name()))
{
$files[]=$file;
}
}

}
return $files;
}






public function get_folders($regex='')
{
$this->open();
if(empty($regex))
{
return $this->folders;
}

$folders=array();
foreach($this->folders as $folder)
{
if(preg_match($regex,$folder->get_name()))
{
$folders[]=$folder;
}
}
return $folders;
}





public function get_first_folder()
{
$this->open();
if(isset($this->folders[0]))
{
return $this->folders[0];
}
else
{
return null;
}
}





public function get_all_content()
{
return array_merge($this->get_files(),$this->get_folders());
}





public function delete()
{
$fs=$this->get_all_content();

foreach($fs as $fse)
{
$fse->delete();
}

if(!@rmdir($this->get_path())&&!file_exists($this->get_path()))
{
throw new IOException('The folder '.$this->get_path().' couldn\'t been deleted');
}
}





public function get_last_modification_date()
{
$folder_infos=stat($this->get_path());
return $folder_infos['mtime'];
}
}
?>
