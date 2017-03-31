<?php


























include_once PATH_TO_ROOT.'/kernel/lib/php/phpmailer/class.phpmailer.php';

class MailToPHPMailerConverter
{



private $mailer;



private $mail_to_send;





public function convert(Mail $mail)
{
$this->mail_to_send=$mail;
$this->mailer=new PHPMailer(true);
$this->convert_mail();
return $this->mailer;
}

private function convert_mail()
{
foreach($this->mail_to_send->get_recipients()as $recipient=>$name)
{
$this->mailer->AddAddress($recipient,$name);
}


foreach($this->mail_to_send->get_cc_recipients()as $recipient=>$name)
{
$this->mailer->AddCC($recipient,$name);
}


foreach($this->mail_to_send->get_bcc_recipients()as $recipient=>$name)
{
$this->mailer->AddBCC($recipient,$name);
}


$this->mailer->SetFrom($this->mail_to_send->get_sender_mail(),$this->mail_to_send->get_sender_name());
$this->mailer->AddReplyTo($this->mail_to_send->get_reply_to_mail()?$this->mail_to_send->get_reply_to_mail():$this->mail_to_send->get_sender_mail(),$this->mail_to_send->get_reply_to_name()?$this->mail_to_send->get_reply_to_name():$this->mail_to_send->get_sender_name());

$this->mailer->Subject=$this->mail_to_send->get_subject();


$this->convert_content();
}

private function convert_content()
{
if($this->mail_to_send->is_html())
{
$this->mailer->MsgHTML($this->mail_to_send->get_content());
}
else
{
$this->mailer->Body=$this->mail_to_send->get_content();
}
}
}
?>
