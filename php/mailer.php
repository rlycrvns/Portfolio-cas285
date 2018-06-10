<?php
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["message"])) {
    $message = $_POST["message"];
}

date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

if (isset($name))
  {

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "rileycravens.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "info@rileycravens.com";
//Password to use for SMTP authentication
$mail->Password = "M0Rxv9IA@xDd";
//Set who the message is to be sent from
$mail->setFrom('info@rileycravens.com', 'Riley Cravens');
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress('info@rileycravens.com', 'Riley Cravens');
//Set the subject line
$mail->Subject = 'Contact Form Inquiry';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('../PHPMailer/examples/contents.html'), dirname(__FILE__));
$mail->isHTML(true);
$mail->Body = 'Email:' . $email . '<br>';
$mail->Body .= 'Name:' . $name . '<br>';
$mail->Body .= 'Message:' . $message . '<br>';
//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('../PHPMailer/images/phpmailer_mini.png');
    //send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=rilezrdc_rileycravens', 'rilezrdc_info', '$629i@UITjjW$uAf');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.php';
  exit();
}

if ((isset($_POST['name'])))
  {

    try {
      $sql = 'INSERT INTO contactform SET
          email = :email,
          name = :name,
          message = :message';
      $s = $pdo->prepare($sql);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':message', $_POST['message']);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submittion: ' . $e->getMessage();
      include 'error.php';
      exit();
    }
}

    $data = 'Data received\\nName: ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '\\nEmail: ' .htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '\\nMessage: ' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<script type='text/javascript'>alert('$data');</script>";
    include 'form.php';
}

} else {
    include 'form.php';
}
?>
