<?php






























class Bench
{



private $started=false;





private $start=0;




private $duration=0;






public function to_string($digits=3)
{
if($this->started)
{
$this->duration+=$this->get_delta_duration();
$this->start();
}
return number_format($this->duration,$digits);
}




public function stop()
{
$this->duration+=$this->get_delta_duration();
$this->started=false;
}




public function start()
{
$this->start=Bench::get_microtime();
$this->started=true;
}




public function get_memory_php_used()
{
$size=memory_get_usage(true);
$unit=array('B','KB','MB','GB','TB','PB');
return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

private function get_delta_duration()
{
return Bench::get_microtime()-$this->start;
}







private function get_microtime()
{
list($usec,$sec)=explode(" ",microtime());
return((float)$usec+(float)$sec);
}
}
?>
