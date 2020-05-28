
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/vendor/autoload.php';


//Grad variables

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

//Create new PDF instance
// $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
// use Mpdf\Mpdf;
 

//create your pdf

$data='';
$data.='<h1>Your Contact Details</h1>';

//Add Data
$data.='<strong>Name</strong>'.$name.'<br/>';
$data.='<strong>Phone Number</strong>'.$phone.'<br/>';
$data.='<strong>Email</strong>'.$email.'<br/>';
// $data.='<strong>Message</strong>'.$message.'<br/>';


if($message){
	$data.='<br/><strong>Messages</strong><br/>'.$message;
}


//Write pdf

$mpdf->WriteHTML($data);

$pdf=$mpdf->Output('','S');

$contact=[
	'name'=>$name,
	'Phone'=>$phone,
	'Email'=>$email,
	'Message'=>$message

];

sendEmail($pdf,$contact);
function sendEmail($pdf,$contact){
$emailbody='';
$emailbody.='<h1>Email enquiry from '.$contact['name'].'</h1>';
foreach($contact as $title=>$data){
    $emailbody.='<strong>'. $title .'</strong>:'. $data . '<br>';
}


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('info@corfinancialcorp.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Details from '. $contact['name'];
    $mail->Body    = $emailbody;
    $mail->AltBody = strip_tags($emailbody);

    $mail->send();
    header('Location:thanks.php?name='. $contact['name']);
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>