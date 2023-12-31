<?php 
require_once(base_path('models/UserModel.php'));
require base_path('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendEmail($recipient) {
  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'priconne45703@gmail.com';                     //SMTP username
    $mail->Password   = 'bfgj xjil hfst quub';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('priconne45703@gmail.com', 'Learn2Code');
    $mail->addAddress($recipient, 'User');     //Add a recipient
    $mail->addAddress($recipient);               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcome to Learn2Code';
    $mail->Body    = '<b>Do not reply to this email!</b>';
    $mail->AltBody = 'You can now login to your account.';

    $mail->send();
    //echo 'Message has been sent';
  } catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

$alert = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userModel = new UserModel();
  $user = $userModel->findUser([
    'email' => $_POST['email']
  ]);

  if ($user || !validatePassword($_POST['password']) || !validateEmail($_POST['email'])) {

    $alert = 'Invalid email or password';

  } else {

    $userModel->addUser([
      'email' => $_POST['email'],
      'password' => $_POST['password'],
      'name' => $_POST['name']
    ]);

    sendEmail($_POST['email']);

    $alert = 'Sign up successfully';
  }
}

view("signup.view.php", [
  'header' => 'Sign up',
  'alert' => $alert
]);