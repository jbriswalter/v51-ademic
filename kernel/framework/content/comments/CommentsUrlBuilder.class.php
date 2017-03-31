<?php


























class CommentsUrlBuilder
{





public static function edit($comment_path,$id)
{
return self::build_url($comment_path,'edit_comment='.$id.'#comments_message');
}






public static function delete($comment_path,$id)
{
return self::build_url($comment_path,'delete_comment='.$id.'#comments-list');
}






public static function lock_and_unlock($comment_path,$lock)
{
return self::build_url($comment_path,'lock='.(int)$lock.'#comments-list');
}





public static function comment_added($comment_path,$id_comment)
{
return new Url($comment_path.'#com'.$id_comment);
}

private static function build_url($comment_path,$parameters)
{
if(strpos($comment_path,'?')===false)
{
return new Url($comment_path.'?'.$parameters);
}
else
{
return new Url($comment_path.'&'.$parameters);
}
}
}
?>
