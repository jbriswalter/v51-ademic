<?php


























class SearchResult
{
private $id;
private $title;
private $link;
private $relevance;








public function __construct($id,$title,$link,$relevance)
{
$this->id=$id;
$this->title=$title;
$this->link=$link;
$this->relevance=$relevance;
}

public function get_id()
{
return $this->module_id;
}

public function get_title()
{
return $this->title;
}

public function get_link()
{
return Url::to_rel($this->link);
}

public function get_relevance()
{
return $this->relevance;
}
}
?>
