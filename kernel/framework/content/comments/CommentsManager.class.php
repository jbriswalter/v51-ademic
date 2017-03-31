<?php































class CommentsManager
{
private static $user;

public static function __static()
{
self::$user=AppContext::get_current_user();
}

public static function add_comment($module_id,$id_in_module,$topic_identifier,$topic_path,$message,$pseudo='')
{
if(!CommentsTopicDAO::topic_exists($module_id,$id_in_module,$topic_identifier))
{
$id_topic=CommentsTopicDAO::create_topic($module_id,$id_in_module,$topic_identifier,$topic_path);
}
else
{
$id_topic=CommentsTopicDAO::get_id_topic_module($module_id,$id_in_module,$topic_identifier);
}

if(self::$user->check_level(User::MEMBER_LEVEL))
{
$id_comment=CommentsDAO::add_comment($id_topic,$message,self::$user->get_id(),self::$user->get_display_name(),AppContext::get_request()->get_ip_address());
}
else
{
$id_comment=CommentsDAO::add_comment($id_topic,$message,self::$user->get_id(),$pseudo,AppContext::get_request()->get_ip_address());
}

CommentsTopicDAO::incremente_number_comments_topic($id_topic);

self::regenerate_cache();
return $id_comment;
}

public static function edit_comment($comment_id,$message)
{
CommentsDAO::edit_comment($comment_id,$message);
self::regenerate_cache();
}

public static function delete_comment($comment_id)
{
$comment=CommentsCache::load()->get_comment($comment_id);
CommentsDAO::delete_comment($comment_id);
CommentsTopicDAO::decremente_number_comments_topic($comment['id_topic']);
self::regenerate_cache();
}

public static function comment_exists($comment_id)
{
return CommentsDAO::comment_exists($comment_id);
}

public static function delete_comments_module($module_id)
{
CommentsDAO::delete_comments_module(CommentsTopicDAO::get_id_topics_module($module_id));
CommentsTopicDAO::delete_topics_module($module_id);
self::regenerate_cache();
}

public static function delete_comments_topic_module($module_id,$id_in_module)
{
$id_topic=CommentsTopicDAO::get_id_topic_module($module_id,$id_in_module);
CommentsDAO::delete_comments_by_topic($id_topic);
CommentsTopicDAO::delete_topic_module($module_id,$id_in_module);
self::regenerate_cache();
}

public static function get_number_comments($module_id,$id_in_module,$topic_identifier)
{
return CommentsDAO::get_number_comments($module_id,$id_in_module,$topic_identifier);
}

public static function get_user_id_posted_comment($comment_id)
{
return CommentsDAO::get_user_id_posted_comment($comment_id);
}

public static function get_last_comment_added($user_id)
{
return CommentsDAO::get_last_comment_added($user_id);
}

public static function comment_topic_locked($module_id,$id_in_module,$topic_identifier)
{
if(CommentsTopicDAO::topic_exists($module_id,$id_in_module,$topic_identifier))
{
return CommentsTopicDAO::comments_topic_locked($module_id,$id_in_module,$topic_identifier);
}
return false;
}

public static function lock_topic($module_id,$id_in_module,$topic_identifier)
{
CommentsTopicDAO::lock_topic($module_id,$id_in_module,$topic_identifier);
}

public static function unlock_topic($module_id,$id_in_module,$topic_identifier)
{
CommentsTopicDAO::unlock_topic($module_id,$id_in_module,$topic_identifier);
}

private static function regenerate_cache()
{
CommentsCache::invalidate();
}
}
?>
