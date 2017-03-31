<?php


























class SMTPMailService extends AbstractPHPMailerMailService
{



private $configuration;

public function __construct(SMTPConfiguration $configuration)
{
$this->configuration=$configuration;
}

protected function set_send_settings(PHPMailer $mailer)
{
$mailer->IsSMTP();
$mailer->SMTPDebug=0;
$mailer->SMTPAuth=true;
$mailer->Timeout=1;
$auth_mode=$this->configuration->get_auth_mode();

if(!empty($auth_mode))
{
$mailer->SMTPSecure=$this->configuration->get_auth_mode();
}

$mailer->Host=$this->configuration->get_host();
$mailer->Port=$this->configuration->get_port();
$mailer->Username=$this->configuration->get_login();
$mailer->Password=$this->configuration->get_password();
}
}
?>
