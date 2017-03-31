<?php


























class BufferedFileWriter implements FileWriter
{
const DEFAULT_BUFFER_SIZE=100000;




private $file;
private $buffer='';
private $buffer_max_size;

public function __construct(File $file,$buffer_size=self::DEFAULT_BUFFER_SIZE)
{
$this->file=$file;
$this->buffer_max_size=$buffer_size;
}

public function append($content)
{
if($this->will_exceed_buffer_size($content))
{
$this->flush();
$this->buffer=$content;
}
else
{
$this->append_to_buffer($content);
}
}

private function will_exceed_buffer_size($content)
{
return strlen($this->buffer)+strlen($content)>$this->buffer_max_size;
}

public function flush()
{
$this->file->append($this->buffer);

}

private function append_to_buffer($content)
{
$this->buffer.=$content;
}
}
?>
