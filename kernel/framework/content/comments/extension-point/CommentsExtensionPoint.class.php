<?php


























interface CommentsExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='comments';

function __construct(Array $comments_topics);




function get_comments_topics();
}
?>
