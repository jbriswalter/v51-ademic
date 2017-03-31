<?php






























class FileType
{
private $file;
private $extensions_image=array('png','gif','jpg','jpeg','bmp','tiff','ico','svg');
private $extensions_audio=array('mp3','wav','raw','flac');
private $extensions_video=array('mpeg','mp4','wmv','flv');

public function __construct(File $file)
{
$this->file=$file;
}

public function is_picture()
{
return in_array($this->get_extension(),$this->extensions_image);
}

public function is_audio()
{
return in_array($this->get_extension(),$this->extensions_audio);
}

public function is_video()
{
return in_array($this->get_extension(),$this->extensions_video);
}

public function get_extension()
{
$file_name=$this->file->get_name();
$parts=explode('.',$file_name);
return array_pop($parts);
}
}
?>
