<?php
echo "hi this email app";
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
sendEmail($mail);

  //PHPMailer send email to user
  function sendEmail($param){
    try {
        //Server settings
        $param->SMTPDebug = 0;                    // Enable verbose debug output
        $param->isSMTP();                         // Set mailer to use SMTP
        $param->Host       = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
        $param->SMTPAuth   = true;                // Enable SMTP authentication
        $param->Username   = 'cb16b6318225c4';    // SMTP username
        $param->Password   = 'bb11d508ae5ed2';    // SMTP password
        $param->SMTPSecure = 'TLS';               // Enable TLS encryption, `ssl` also accepted
        $param->Port       = 2525;                // TCP port to connect to

        //Recipients
        $param->setFrom('2do@gmail.com', '2do TEAM');
        $param->addAddress('the.dark.lord.2627@gmail.com', 'the best guy');     // Add a recipient
        $param->addReplyTo('the.dark.lord.2627@gmail.com', 'Information');

        // Content
        $param->isHTML(true);                                  // Set email format to HTML
        $param->Subject = 'EMAIL APP BRUUUU';
        $param->Body    = 
"Hi YOURE THE MAN STEVE ";
        $param->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $param->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$param->ErrorInfo}";
    }
}//endsendEmail
?>