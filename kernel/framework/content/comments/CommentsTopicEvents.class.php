<?php






























class CommentsTopicEvents
{
protected $comments_topic;

public function __construct(CommentsTopic $comments_topic)
{
$this->comments_topic=$comments_topic;
}

public function execute_add_comment_event(){}

protected function get_comments_topic()
{
return $this->comments_topic;
}
}
?>
