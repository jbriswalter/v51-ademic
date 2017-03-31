<?php


























interface MailService
{





function send(Mail $mail);







function try_to_send(Mail $mail);











function send_from_properties($mail_to,$mail_subject,$mail_content,$mail_from='',$sender_name='admin');






function is_mail_valid($mail_address);





function get_mail_checking_regex();





function get_mail_checking_raw_regex();
}
?>
