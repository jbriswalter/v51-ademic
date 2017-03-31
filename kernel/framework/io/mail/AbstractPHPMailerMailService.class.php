<?php


























include_once PATH_TO_ROOT.'/kernel/lib/php/phpmailer/class.phpmailer.php';
include_once PATH_TO_ROOT.'/kernel/lib/php/phpmailer/PHPMailerAutoload.php';

abstract class AbstractPHPMailerMailService implements MailService
{
private static $regex='(?:[a-z0-9_!#$%&\'*+/=?^|~-]\.?){0,63}[a-z0-9_!#$%&\'*+/=?^|~-]+@(?:[a-z0-9_-]{2,}\.)+([a-z0-9_-]{2,}\.)*[a-z]{2,}';




private $mailer;

public function send(Mail $mail)
{
$converter=new MailToPHPMailerConverter();
$this->mailer=$converter->convert($mail);
$this->set_send_settings($this->mailer);
try
{
$this->mailer->Send();
}
catch(Exception $ex)
{
throw new IOException('Mail couldn\'t be sent: '.$ex->getMessage());
}
}

public function try_to_send(Mail $mail)
{
try
{
$this->send($mail);
return true;
}
catch(IOException $ex)
{
return false;
}
}

public function send_from_properties($mail_to,$mail_subject,$mail_content,$mail_from='',$sender_name=Mail::SENDER_ADMIN)
{

$mail=new Mail();

$mail->add_recipient($mail_to);
if($mail_from=='')
{
$mail_from=MailServiceConfig::load()->get_default_mail_sender();
}
$mail->set_sender($mail_from,$sender_name);
$mail->set_subject($mail_subject);
$mail->set_content($mail_content);


return $this->try_to_send($mail);
}

abstract protected function set_send_settings(PHPMailer $mailer);

public function is_mail_valid($mail_address)
{
return preg_match($this->get_mail_checking_regex(),$mail_address);
}

public function get_mail_checking_regex()
{
return '`^'.self::$regex.'$`i';
}

public function get_mail_checking_raw_regex()
{
return self::$regex;
}
}
?>
