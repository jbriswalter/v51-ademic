<?php


























class DefaultMailService extends AbstractPHPMailerMailService
{
protected function set_send_settings(PHPMailer $mailer)
{
$mailer->IsMail();
}
}
?>
