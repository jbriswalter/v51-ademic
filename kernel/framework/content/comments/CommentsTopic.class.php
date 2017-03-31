<?php
































class CommentsTopic
{
protected $module_id;
protected $topic_identifier='';
protected $id_in_module;
protected $url;

const DEFAULT_TOPIC_IDENTIFIER='default';

public function __construct($module_id,$topic_identifier=self::DEFAULT_TOPIC_IDENTIFIER)
{
$this->module_id=$module_id;
$this->topic_identifier=$topic_identifier;
}




public function get_authorizations()
{
return new CommentsAuthorizations();
}




public function is_display()
{
return false;
}




public function get_number_comments_display()
{
return CommentsConfig::load()->get_number_comments_display();
}




public function get_events()
{
return new CommentsTopicEvents($this);
}

public function display()
{
return CommentsService::display($this);
}

public function get_topic_identifier()
{
return $this->topic_identifier;
}

public function get_module_id()
{
return $this->module_id;
}

public function set_id_in_module($id_in_module)
{
$this->id_in_module=$id_in_module;
}

public function get_id_in_module()
{
return $this->id_in_module;
}

public function set_url(Url $url)
{
$this->url=$url;
}

public function get_url()
{
return $this->url->rel();
}

public function get_path()
{
return $this->url->relative();
}
}
?>
