<?php































class Mail
{
const SENDER_ADMIN='admin';

const SENDER_USER='user';




var $subject='';




var $content='';




var $sender_mail='';




var $sender_name='';




var $reply_to_mail='';




var $reply_to_name='';




var $headers='';




var $recipients=array();




var $cc_recipients=array();




var $bcc_recipients=array();




var $is_html=false;





public function __construct()
{
}






public function set_sender($sender,$sender_name=self::SENDER_ADMIN)
{
$site_name=GeneralConfig::load()->get_site_name();

if($sender_name==self::SENDER_ADMIN || $sender_name==self::SENDER_USER)
{
$sender_name=$sender_name==self::SENDER_ADMIN?LangLoader::get_message('administrator','user-common'):LangLoader::get_message('user','user-common');
}

$this->sender_name=str_replace('"','',$site_name.' - '.$sender_name);

$this->sender_mail=$sender;
}






public function set_reply_to($reply_to,$reply_to_name='')
{
if($reply_to_name==self::SENDER_ADMIN || $reply_to_name==self::SENDER_USER)
{
$reply_to_name=$reply_to_name==self::SENDER_ADMIN?LangLoader::get_message('administrator','user-common'):LangLoader::get_message('user','user-common');
}

$this->reply_to_name=$reply_to_name;

$this->reply_to_mail=$reply_to;
}






public function add_recipient($address,$name='')
{
if(self::check_mail($address))
{
$this->recipients[$address]=$name;
}
}

public function clear_recipients()
{
$this->recipients=array();
}






public function add_cc_recipient($address,$name='')
{
if(self::check_mail($address))
{
$this->cc_recipients[$address]=$name;
}
}

public function clear_cc_recipients()
{
$this->cc_recipients=array();
}






public function add_bcc_recipient($address,$name='')
{
if(self::check_mail($address))
{
$this->bcc_recipients[$address]=$name;
}
}

public function clear_bcc_recipients()
{
$this->bcc_recipients=array();
}

private static function check_mail($mail)
{
return AppContext::get_mail_service()->is_mail_valid($mail);
}





public function get_recipients()
{
return $this->recipients;
}





public function get_cc_recipients()
{
return $this->cc_recipients;
}





public function get_bcc_recipients()
{
return $this->bcc_recipients;
}





public function set_subject($subject)
{
$this->subject=$subject;
}





public function set_content($content)
{
$this->content=$content;
$this->set_is_html($content!=strip_tags($content));
}





public function set_headers($headers)
{
$this->headers=$headers;
}





public function get_sender_mail()
{
return $this->sender_mail;
}





public function get_sender_name()
{
return $this->sender_name;
}





public function get_reply_to_mail()
{
return $this->reply_to_mail;
}





public function get_reply_to_name()
{
return $this->reply_to_name;
}





public function get_subject()
{
return $this->subject;
}





public function get_content()
{
return $this->content;
}

public function set_is_html($is)
{
$this->is_html=$is;
}

public function is_html()
{
return $this->is_html;
}
}
?>
