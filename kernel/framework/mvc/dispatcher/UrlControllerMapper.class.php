<?php































class UrlControllerMapper extends AbstractUrlMapper
{
private $classname;
private $parameters_names;









public function __construct($classname,$capture_regex='`^/?$`',$parameters_names=array())
{
$this->classname=&$classname;
$this->parameters_names=$parameters_names;
parent::__construct($capture_regex);
}




public function call()
{
$this->build_parameters();
$this->do_call();
}

private function build_parameters()
{
$captured_parameters=$this->get_captured_parameters();

$i=1;
foreach($this->parameters_names as $parameter_name)
{
$value=null;
if(isset($captured_parameters[$i]))
{
$value=$captured_parameters[$i];
}
AppContext::get_request()->set_getvalue($parameter_name,$value);
$i++;
}
}

private function do_call()
{
$controller=new $this->classname();
if(!($controller instanceof Controller))
{
throw new NoSuchControllerException($this->classname);
}
$controller_to_execute=$controller->get_right_controller_regarding_authorizations();
$response=$controller_to_execute->execute(AppContext::get_request());
$response->send();
}
}
?>
