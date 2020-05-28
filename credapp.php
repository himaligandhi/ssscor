<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require_once __DIR__ . '/vendor/autoload.php';


//Grab variables

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$addln1=$_POST['addln1'];
$addln2=$_POST['addln2'];
$city=$_POST['city'];
$province=$_POST['province'];
$owner_psd=$_POST['owner_psd'];
$owner_phonenumber=$_POST['owner_phonenumber'];
$owner_email=$_POST['owner_email'];
$dl=$_POST['dl'];
$property=$_POST['property'];
$propertyamt=$_POST['propertyamt'];
$owner_years=$_POST['owner_years'];
$owner_months=$_POST['owner_months'];
$lconame=$_POST['lconame'];
$opname=$_POST['opname'];
$shareholdername=$_POST['shareholdername'];
$cn=$_POST['cn'];
$bn=$_POST['bn'];
$datebusinc=$_POST['datebusinc'];
$businesstype=$_POST['businesstype'];
$busadd=$_POST['busadd'];
$buscity=$_POST['buscity'];
$busprov=$_POST['busprov'];
$buspsd=$_POST['buspsd'];
$radio_bus=$_POST['radio_bus'];
$coproperty=$_POST['coproperty'];
$busyears=$_POST['busyears'];
$busmonth=$_POST['busmonth'];
$busphonenumber=$_POST['busphonenumber'];
$website=$_POST['website'];
$busact=$_POST['busact'];
$bname=$_POST['bname'];
$bankadd=$_POST['bankadd'];
$bankcity=$_POST['bankcity'];
$bankprov=$_POST['bankprov'];
$bankpsd=$_POST['bankpsd'];
$accmanager=$_POST['accmanager'];
$bankphonenumber=$_POST['bankphonenumber'];
$acon=$_POST['acon'];
$radio_acc=$_POST['radio_acc'];
$gsr=$_POST['gsr'];
$gi=$_POST['gi'];
$ni=$_POST['ni'];
$ct=$_POST['ct'];
$psr=$_POST['psr'];
$pgi=$_POST['pgi'];
$cash=$_POST['cash'];
$accrec=$_POST['accrec'];
$inv=$_POST['inv'];
$co_vech=$_POST['co_vech'];
$realestate=$_POST['realestate'];
$refunds=$_POST['refunds'];
$other_Assets=$_POST['other_Assets'];
$tot_Assets=$_POST['tot_Assets'];
$crcrd=$_POST['crcrd'];
$bankloan=$_POST['bankloan'];
$autoloan=$_POST['autoloan'];
$shareholder_loan=$_POST['shareholder_loan'];
$acc_pay=$_POST['acc_pay'];
$owing=$_POST['owing'];
$cor_tax=$_POST['cor_tax'];
$oth_lia=$_POST['oth_lia'];
$payroll_taxes=$_POST['payroll_taxes'];
$liatot=$_POST['liatot'];
$coname=$_POST['coname'];
$fulladd=$_POST['fulladd'];
$refcontactname=$_POST['refcontactname'];
$refphonenumber=$_POST['refphonenumber'];
$refhcg=$_POST['refhcg'];
$refbusinessyrs=$_POST['refbusinessyrs'];
$coname2=$_POST['coname2'];
$refcontactname2=$_POST['refcontactname2'];
$refphonenumber2=$_POST['refphonenumber2'];
$refhcg2=$_POST['refhcg2'];
$refbusinessyrs2=$_POST['refbusinessyrs2'];
$loantype=$_POST['loantype'];
$loanamtreq=$_POST['loanamtreq'];
$term=$_POST['term'];
$datefunds=$_POST['datefunds'];
$securityloan=$_POST['securityloan'];
$currentdate=$_POST['currentdate'];
$signofname=$_POST['signofname'];





$mpdf=new \Mpdf\Mpdf();

//Create our pdf
$data='';
$data .='<h1>New Finance Application Details</h1>';
//Add data
$data .='<strong>First Name:</strong> '.$fname.'<br/>';
$data .='<strong>Last Name:</strong> '.$lname.'<br/>';
$data .='<strong>Address Line 1:</strong> '.$addln1.'<br/>';
$data .='<strong>Address Line 2:</strong> '.$addln2.'<br/>';
$data .='<strong>City:</strong> '.$city.'<br/>';
$data .='<strong>Province:</strong> '.$province.'<br/>';
$data .='<strong>Owner PostCode:</strong> '.$owner_psd.'<br/>';
$data .='<strong>Owner_Phonenumber:</strong> '.$owner_phonenumber.'<br/>';
$data .='<strong>Owner_email:</strong> '.$owner_email.'<br/>';
$data .='<strong>Driver License:</strong> '.$dl.'<br/>';
$data .='<strong>Property(Rent/Own):</strong> '.$property.'<br/>';
$data .='<strong>Property Amount(Rent/Mortgage):</strong> '.$propertyamt.'<br/>';
$data .='<strong>Since how long they are living(years):</strong> '.$owner_years.'<br/>';
$data .='<strong>Since how long they are living(months):</strong> '.$owner_months.'<br/>';
$data .='<strong>Legal Company Name:</strong> '.$lconame.'<br/>';
$data .='<strong>Operating Company Name:</strong> '.$opname.'<br/>';
$data .='<strong>Shareholder Name(% share):</strong> '.$shareholdername.'<br/>';
$data .='<strong>Ontario Corporation Number (CN):</strong> '.$cn.'<br/>';
$data .='<strong>Ontario Registered Business Number (BN):</strong> '.$bn.'<br/>';
$data .='<strong>Date Business Incorporated:</strong> '.$datebusinc.'<br/>';
$data .='<strong>Business Type:</strong> '.$businesstype.'<br/>';
$data .='<strong>Business Address:</strong> '.$busadd.'<br/>';
$data .='<strong>Business City:</strong> '.$buscity.'<br/>';
$data .='<strong>Business Province:</strong> '.$busprov.'<br/>';
$data .='<strong>Business PostCode:</strong> '.$buspsd.'<br/>';
$data .='<strong>Account Manager:</strong> '.$accmanager.'<br/>';
$data .='<strong>Bank Phone Number:</strong> '.$bankphonenumber.'<br/>';
$data .='<strong>Account Number:</strong> '.$acon.'<br/>';
$data .='<strong>Account Type(Chequing/Saving):</strong> '.$radio_acc.'<br/>';
$data .='<strong>Gross Sales Revenue:</strong> '.$gsr.'<br/>';
$data .='<strong>Gross Income:</strong> '.$gi.'<br/>';
$data .='<strong>Net Income:</strong> '.$ni.'<br/>';
$data .='<strong>Customer/Client Type:</strong> '.$ct.'<br/>';
$data .='<strong>Projected Sales Revenue:</strong> '.$psr.'<br/>';
$data .='<strong>Projected Gross Income:</strong> '.$pgi.'<br/>';
$data .='<strong>Assets->Cash:</strong> '.$cash.'<br/>';
$data .='<strong>Account Receivable:</strong> '.$accrec.'<br/>';
$data .='<strong>Inventory:</strong> '.$inv.'<br/>';
$data .='<strong>Company Vechicles:</strong> '.$co_vech.'<br/>';
$data .='<strong>Real Estate:</strong> '.$realestate.'<br/>';
$data .='<strong>Refunds:</strong> '.$Refunds.'<br/>';
$data .='<strong>Other Assets:</strong> '.$other_Assets.'<br/>';
$data .='<strong>Total Assets:</strong> '.$tot_Assets.'<br/>';
$data .='<strong>Liabilities:</strong> <br/>';
$data .='<strong>Credit Card:</strong> '.$crcrd.'<br/>';
$data .='<strong>Bank Loan:</strong> '.$bankloan.'<br/>';
$data .='<strong>Auto Loan:</strong> '.$autoloan.'<br/>';
$data .='<strong>Shareholder Loan:</strong> '.$shareholder_loan.'<br/>';
$data .='<strong>Account Payables:</strong> '.$acc_pay.'<br/>';
$data .='<strong>Owing:</strong> '.$owing.'<br/>';
$data .='<strong>Corporate Tax:</strong> '.$cor_tax.'<br/>';
$data .='<strong>Total Liability:</strong> '.$oth_lia.'<br/>';
$data .='<strong>Payroll Taxes:</strong> '.$payroll_taxes.'<br/>';
$data .='<strong>Total Liability:</strong> '.$liatot.'<br/>';
$data .='<strong>Business/Trade References</strong> <br/>';
$data .='<strong>Company Name:</strong> '.$coname.'<br/>';
$data .='<strong>Full Address:</strong> '.$fulladd.'<br/>';
$data .='<strong>Reference Contact Name:</strong> '.$refcontactname.'<br/>';
$data .='<strong>Reference Phone Number:</strong> '.$refphonenumber.'<br/>';
$data .='<strong>Reference highest Credit Granted:</strong> '.$refhcg.'<br/>';
$data .='<strong># of Years Doing Business:</strong> '.$refbusinessyrs.'<br/>';
$data .='<strong>Company Name 2:</strong> '.$coname2.'<br/>';
$data .='<strong>Full Address 2:</strong> '.$fulladd2.'<br/>';
$data .='<strong>Reference Contact Name 2:</strong> '.$refcontactname2.'<br/>';
$data .='<strong>Reference Phone Number 2:</strong> '.$refphonenumber2.'<br/>';
$data .='<strong>Reference highest Credit Granted 2:</strong> '.$refhcg2.'<br/>';
$data .='<strong># of Years Doing Business 2:</strong> '.$refbusinessyrs2.'<br/>';
$data .='<strong>Loan Type:</strong> '.$loantype.'<br/>';
$data .='<strong>Loan Amount Required:</strong> '.$loanamtreq.'<br/>';
$data .='<strong>Term:</strong> '.$term.'<br/>';
$data .='<strong>Date funds required:</strong> '.$datefunds.'<br/>';
$data .='<strong>securityloan:</strong> '.$securityloan.'<br/>';
$data .='<strong>Currrent date:</strong> '.$currentdate.'<br/>';
$data .='<strong>Signature and Title:</strong> '.$signofname.'<br/>';

//Write pdf

$mpdf->WriteHTML($data);
//Output to string
$pdf=$mpdf->Output('','S');


//grab finance app data
$financeapp=[
    'fname'=>$fname,
'lname'=>$lname,'addln1'=>$addln1,'addln2'=>$addln2,'city'=>$city,'province'=>$province,'owner_psd'=>$owner_psd,
'owner_phonenumber'=>$owner_phonenumber,'owner_email'=>$owner_email,'dl'=>$dl,'property'=>$property,
'propertyamt'=>$propertyamt,
'owner_years'=>$owner_years,'owner_months'=>$owner_months,'lconame'=>$lconame,
'opname'=>$opname,'shareholdername'=>$shareholdername,'cn'=>$cn,'bn'=>$bn,
'datebusinc'=>$datebusinc,'businesstype'=>$businesstype,'busadd'=>$busadd,'buscity'=>$buscity,
'busprov'=>$busprov,'buspsd'=>$buspsd,'radio_bus'=>$radio_bus,'coproperty'=>$coproperty,
'busyears'=>$busyears,'busmonth'=>$busmonth,'busphonenumber'=>$busphonenumber,'website'=>$website,
'busact'=>$busact,'bname'=>$bname,'bankadd'=>$bankadd,'bankcity'=>$bankcity,
'bankprov'=>$bankprov,'bankpsd'=>$bankpsd,'accmanager'=>$accmanager,'bankphonenumber'=>$bankphonenumber,
'acon'=>$acon,'radio_acc'=>$radio_acc,'gsr'=>$gsr,'gi'=>$gi,'ni'=>$ni,'ct'=>$ct,'psr'=>$psr,
'pgi'=>$pgi,'cash'=>$cash,'accrec'=>$accrec,'inv'=>$inv,'co_vech'=>$co_vech,'realestate'=>$realestate,
'refunds'=>$refunds,'other_Assets'=>$other_Assets,'tot_Assets'=>$tot_Assets,'crcrd'=>$crcrd,'bankloan'=>$bankloan,
'autoloan'=>$autoloan,'shareholder_loan'=>$shareholder_loan,'acc_pay'=>$acc_pay,'owing'=>$owing,'cor_tax'=>$cor_tax,
'oth_lia'=>$oth_lia,'payroll_taxes'=>$payroll_taxes,'liatot'=>$liatot,'coname'=>$coname,'fulladd'=>$fulladd,
'refcontactname'=>$refcontactname,'refphonenumber'=>$refphonenumber,'refhcg'=>$refhcg,'refbusinessyrs'=>$refbusinessyrs,
'coname2'=>$coname2,'fulladd2'=>$fulladd2,
'refcontactname2'=>$refcontactname2,'refphonenumber2'=>$refphonenumber2,'refhcg2'=>$refhcg2,'refbusinessyrs2'=>$refbusinessyrs2,
'loantype'=>$loantype,'loanamtreq'=>$loanamtreq,'term'=>$term,'datefunds'=>$datefunds,'secuirtyloan'=>$securityloan,
'currentdate'=>$currentdate,'signofname'=>$signofname



];

sendEmail($pdf,$financeapp);

function sendEmail($pdf,$financeapp){


    $emailbody='';

    $emailbody.='<h1>Finance Application from '.$financeapp['fname'].'</h1>';
    foreach($financeapp as $title=>$data){
        $emailbody.='<strong>'.$title .'</strong> '.$data. '<br/>';


    }
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
        $mail->addAddress('info@corfinancialcorp.com', 'admin');     // Add a recipient
       // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        //Attachment
        $mail->addStringAttachment($pdf, 'myfinanceapp.pdf');
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Finance Application from' .$financeapp['fname'];
        $mail->Body    = $emailbody;
        $mail->AltBody = strip_tags($emailbody);
    
        $mail->send();
        header('Location:thanks.php?fname= '.$financeapp['fname']);
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>