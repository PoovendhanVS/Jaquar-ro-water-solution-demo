<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$order = $_POST['order'];
$address = $_POST['address'];
$district = $_POST['district'];
/*echo $name ,$phone,$district, $order;
*/

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'poovendhanshan@gmail.com';                     //SMTP username
    $mail->Password   = 'qdktltrugyeuzinl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@gmail.com', $name);
    $mail->addAddress('poovendhanshanmugam.engineer@gmail.com');  

    $message ="Name : " . $name . "<br>" . "Address : " . $address . "<br>" . "Phone : ". $phone . "<br>" . "District : ". $district . "<br>" . "Product : " . $order;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =  $order;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Hi! ' . $name . ' your order is ' . $order . ' has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
