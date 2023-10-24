<?php 
use PHPMailer\PHPMailer\PHPmailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])) {
    $email = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'uas.pweb.def@gmail.com';
    $mail->Password = 'jkhlemqoyniqwwge';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->IsHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('uas.pweb.def@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->Send();

    echo "
                <script>
                    alert('pesan terkirim');
                    document.location.href = 'form_email.php';
                </script>
            ";



}

// PW-Google 
// jkhlemqoyniqwwge

?>