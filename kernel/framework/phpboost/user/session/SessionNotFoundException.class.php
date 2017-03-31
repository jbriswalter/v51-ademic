<?php






























class SessionNotFoundException extends Exception
{
public function __construct($user_id,$session_id)
{
parent::__construct('No session found for user '.$user_id.' and session '.$session_id);
}
}

?>
