<?php


























class AbstractCommentsController extends AbstractController
{
protected $module_id;
protected $id_in_module;
protected $topic_identifier;
protected $provider;

public function execute(HTTPRequestCustom $request)
{
$this->module_id=$request->get_poststring('module_id','');
$this->id_in_module=$request->get_poststring('id_in_module','');
$this->topic_identifier=$request->get_poststring('topic_identifier','');
$this->provider=CommentsProvidersService::get_provider($this->module_id,$this->topic_identifier);
$this->provider->set_id_in_module($this->id_in_module);
}

public function is_authorized_read()
{
return $this->get_authorizations()->is_authorized_read();
}

public function is_display()
{
return $this->provider->is_display($this->get_module_id(),$this->get_id_in_module());
}

public function get_module_id()
{
return $this->module_id;
}

public function get_id_in_module()
{
return $this->id_in_module;
}

public function get_topic_identifier()
{
return $this->topic_identifier;
}

public function get_authorizations()
{
return $this->provider->get_authorizations($this->get_module_id(),$this->get_id_in_module());
}
}
?>
