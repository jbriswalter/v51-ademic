<?php


























class CLIArgumentsReader
{
private $args;
private $nb_args;

public function __construct(array $args)
{
$this->args=$args;
$this->nb_args=count($this->args);
}

public function get($option,$default_value=null)
{
try
{
$index=$this->find_arg_index($option);
return $this->get_arg_at($index+1);
}
catch(Exception $ex)
{
if($default_value!==null)
{
return $default_value;
}
throw new ArgumentNotFoundException($option,$this->args);
}
}

public function has_arg($arg)
{
return in_array($arg,$this->args);
}

public function find_arg_index($arg)
{
if($this->has_arg($arg))
{
return array_search($arg,$this->args,true);
}
throw new ArgumentNotFoundException($arg,$this->args);
}

public function get_arg_at($index)
{
if(isset($this->args[$index]))
{
return $this->args[$index];
}
throw new OutOfBoundsException($index.'/'.$this->nb_args);
}

public function get_nb_args()
{
return $this->nb_args;
}
}
?>
