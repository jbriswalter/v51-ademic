<?php































class File extends FileSystemElement
{
const READ=0x1;
const WRITE=0x2;
const APPEND=0x3;
private static $BUFFER_SIZE=8192;




private $contents;



private $mode=0;



private $file_descriptor;







public function __construct($path)
{
parent::__construct($path);
}

public function __destruct()
{
$this->close();
}





public function get_name_without_extension()
{
$name=$this->get_name();
return substr($name,0,strpos($name,'.'));
}





public function get_extension()
{
$name=$this->get_name();
return substr(strrchr($name,'.'),1);
}







public function read($start=0,$len=-1)
{
$opened_by_me=$this->open(self::READ);

fseek($this->file_descriptor,$start);

if($len==-1)
{
$len=filesize($this->get_path());
}

$content='';
while(!feof($this->file_descriptor)&&$len>0)
{
$content.=fread($this->file_descriptor,min($len,self::$BUFFER_SIZE));
$len-=self::$BUFFER_SIZE;
}
if($opened_by_me)
{
$this->close();
}
return $content;
}





public function read_lines()
{
return explode("\n",$this->read());
}






public function write($data)
{
$opened_by_me=$this->open(self::WRITE);
$this->write_data($data);
if($opened_by_me)
{
$this->close();
}
}






public function append($data)
{
$opened_by_me=$this->open(self::APPEND);
$this->write_data($data);
if($opened_by_me)
{
$this->close();
}
}




public function erase()
{
$opened_by_me=$this->open(self::WRITE);
ftruncate($this->file_descriptor,0);
if($opened_by_me)
{
$this->close();
}
}




public function close()
{
if($this->is_open())
{
$this->mode=0;
fclose($this->file_descriptor);
$this->file_descriptor=null;
}
}





public function delete()
{
$this->close();
if(file_exists($this->get_path())){
if(!unlink($this->get_path()))
{

$this->erase();
throw new IOException('The file '.$this->get_path().' couldn\'t been deleted');
}
}
}






public function lock($blocking=true)
{
if(!$this->is_open())
{
throw new IOException('The file '.$this->get_path().' should be opened before trying to lock it');
}
$this->open(self::WRITE);
$success=@flock($this->file_descriptor,LOCK_EX,$blocking);






}





public function unlock()
{
if(!$this->is_open())
{
throw new IOException('The file '.$this->get_path().' should be opened before trying to unlock it');
}
$this->open(self::WRITE);
$succeed=@flock($this->file_descriptor,LOCK_UN);





}




public function flush()
{
if($this->is_open())
{
fflush($this->file_descriptor);
}
}





public function get_last_modification_date()
{
return filemtime($this->get_path());
}





public function get_last_access_date()
{
return filectime($this->get_path());
}





public function get_file_size()
{
return(int)@filesize($this->get_path());
}





public function open($mode)
{
if($this->mode!=$mode)
{
$this->close();
$this->mode=$mode;
switch($this->mode)
{
case self::APPEND:
$this->file_descriptor=@fopen($this->get_path(),'a+b');
$this->check_file_descriptor('Can\'t open the file for creating / writing');
break;
case self::WRITE:
$this->file_descriptor=@fopen($this->get_path(),'w+b');
$this->check_file_descriptor('Can\'t open the file for creating / writing');
break;
case self::READ:
default:
$this->file_descriptor=@fopen($this->get_path(),'rb');
$this->check_file_descriptor('Can\'t open the file for reading');
break;
}
return true;
}
return false;
}





private function is_open()
{
return is_resource($this->file_descriptor);
}

private function write_data($data)
{
$bytes_to_write=strlen($data);
$bytes_written=0;
while($bytes_written<$bytes_to_write)
{
$bytes=fwrite($this->file_descriptor,substr($data,$bytes_written,self::$BUFFER_SIZE));
if($bytes===false || $bytes==0)
{
break;
}
$bytes_written+=$bytes;
}
}

private function check_file_descriptor($message)
{
if($this->file_descriptor===false || $this->file_descriptor===null)
{
throw new IOException($message.' : '.$this->get_path());
}
}
}
?>
