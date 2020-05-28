<?php

use PHPMailer\PHPMailer\PHPMailer;

$error='';
$name='';
$phone='';
$email='';
$message='';
function clean_text($string){
    $string=trim($string);
    $string=stripslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}
if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
        $error .='<p><label class="text-dander">Please enter your name</label></p>';

    }else{
        $name=clean_text($_POST["name"]);
        if(!preg_match("\^[a-zA-Z]*$/",$name)){
            $error .='<p><label class="text-danger">Only letter and white space allowed</label></p>';

        }
    }
    if(empty($_POST["email"])){
        $error .='<p><label class="text-dander">Please enter your email</label></p>';
    }else{
        $email=clean_text($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error .='<p><label class="text-danger">Invalid Email format</label></p>';

        }
    }
    if(empty($_POST["message"])){
        $error .='<p><label class="text-dander">Message is required</label></p>';
    }else{
        $message=clean_text($_POST["email"]);
        
    }
    if($error!=''){
        require '~/src/PHPMailer.php';
        $mail=new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtpout.secureserver.net';
        $mail->Port='80';
        $mail->SMTPAuth=true;
        $mail->Username='Write your SMTP username';
        $mail->Password='SMTP password';
        $mail->SMTPSecure='';
        $mail->From=$_POST["email"];
        $mail->FromName=$_POST["name"];
        $mail->addAddress('info@corfinancialcorp.com','Name');
        $mail->AddCC($_POST["email"],$_POST["name"]);
        $mail->WordWrap=50;
        $mail->isHTML(true);
        $mail->Subject='Contact Details';
        $mail->Body=$_POST["message"];
        if($mail->Send()){
            $error='<label class="text-success">Thank you for contacting us</label>';
        }else{
            $error='<label class="text-danger">There is an error</label>';
        }
        $name='';
        $phone='';
        $email='';
        $message='';

        
    }

}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Site Metas-->
    <meta name="description" content="A boutique non-bank financial services company specializing in providing growth solutions to small and medium-sized business" />
    <meta name="keywords" content="Financial, CorFinancial,Business, small business, medium business " />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <title>Contact</title>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '691197158357706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=691197158357706&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="style.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
        .centered{
            position: absolute;
  top: 38%;
  left: 50%;
  transform: translate(-50%, -50%);
        }
    </style>

</head>
<body id="page-top" class="politics_version">
   
  <?php include('header.php');?>
  <div class="container">
  <img src="images/ContactUsRevised.jpg" alt="contact" style="width:100%;"/>
  <div class="centered">
  <h1 style="margin-top: 0; color:white;letter-spacing:1px; font-size:3.5em; font-weight:bold;"><u>CONTACT US</u></h1>
  </div>
    
    
        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6">
                <?php echo $error;?>
                <form class="cf" method="post" name="contact_form">
                <span id="formerror" class="error"></span>
                    <div class="half left cf" style="font-size: 1.2em;">
                        <input type="text" id="input-name" placeholder="Name" name="name" value="<?php echo $name; ?>"/>
                        <input type="tel" id="input-phone" placeholder="Phone Number" name="phone"/>
				
                        <input type="email" id="input-email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
                        <textarea type="text" id="input-message" name="message" placeholder="Message" name="message" value="<?php echo $message; ?>" ></textarea>

                    </div>
                    <input type="submit" value="submit" id="input-submit" name="submit" />
                </form>
            </div>
            <div class="col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.491587408252!2d-79.4729165845007!3d43.70033207911978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b315f540b2b77%3A0x4f36135b5dd5cea9!2sCORFinancial%20Corp.!5e0!3m2!1sen!2sca!4v1584370673424!5m2!1sen!2sca" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>


    <div class="container second-portion">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">EMAIL</h3>
                            <p style="font-size:1.2em;">
                                <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:someone@example.com?Subject=Inquired%20Financial%20Solutions" style="color:black;">info@corfinancialcorp.com</a>
                                <br>
                                <br><br><br>
                            </p>

                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">OFFICE</h3>
                            <p style="font-size:1.2em;color:black;">
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (416) 546-2859
                                <br>
                                <br>
                                <br><br>
                                
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p style="font-size:1.2em;color:black;">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> 77 Ingram Dr. <br>Suite 201 <br> North York, ON<br> M6M 2L7
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>


        </div>
    </div>
    <!--Footer Start-->
    <?php include('foo.php'); ?>
    <script language="JavaScript">
        var frmvalidator = new Validator("contactform");
        frmvalidator.addValidation("name", "req", "Please provide your name");
        frmvalidator.addValidation("email", "req", "Please provide your email");
        frmvalidator.addValidation("email", "email",
            "Please enter a valid email address");
    </script>

</body>
  </html>

