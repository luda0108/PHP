<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$link=@mysqli_connect('localhost','root','','mail');
    if(!$link)
        die("無法開啟資料庫<br/>");

//SQL語法        
$sql="SELECT id FROM maillist";
$result=mysqli_query($link,$sql);


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'x20040108@gmail.com';                     //SMTP username
    $mail->Password   = 'kvvq vydn dlds pfwy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet    = 'utf-8';

    //Recipients
    $mail->setFrom('x20040108@gmail.com', '匿名');
    while ($row = mysqli_fetch_assoc($result))
    {
        $email = $row['id'] . '@gmail.com';
        $mail->addAddress($email);
    }
    //$mail->addAddress('loonaorbit0108@gmail.com', 'Joe User');     //Add a recipient
    //$mail->addAddress($to);               //Name is optional
    //$mail->addReplyTo('x20040108@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "【恭喜中獎】";
    $mail->Body    = "恭喜被挑中成為獲獎者";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
