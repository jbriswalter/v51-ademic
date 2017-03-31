<?php


























class TemplateRenderingException extends Exception
{



private $input=null;
private $tpl_line=0;
private $offset=0;
private $error_message=0;

public function __construct($message,StringInputStream $input=null)
{
$this->error_message=$message;
if($input!=null)
{
$this->input=$input;
$this->compute_position();
}
parent::__construct($this->get_message());
}

private function get_message()
{
$msg=$this->error_message;
if($this->input!=null)
{
$msg.="\n".'line '.$this->tpl_line.' offset '.$this->offset.' near';
$msg.=' "...'.TextHelper::htmlentities($this->input->to_string(-100,200)).'..."';
}
return $msg;
}

private function compute_position()
{
$position=$this->input->tell();
$string=$this->input->entire_string();
$str_to_position=substr($string,0,$position);

$this->tpl_line=substr_count($string,"\n",0,$position)+1;
$last_line_index=strrpos($str_to_position,"\n");
$line_content=substr($str_to_position,$last_line_index+1);
$this->offset=strlen($line_content);
}
}
?>
