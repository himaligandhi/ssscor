<?php
include "db.php";

$servername="localhost";
$username="root";
$password="root";
$dbname="businessownerinfo";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);

}
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $addln1=$_POST['addln1'];
    $addln2=$_POST['addln2'];
    $city=$_POST['city'];
    $psd=$_POST['psd'];
    $province=$_POST['province'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $driverlic=$_POST['driverlic'];
    $years=$_POST['years'];
    $months=$_POST['months'];
    $propertystatus=$_POST['propertystatus'];
    $amountrent=$_POST['amountrent'];
    $lconame=$_POST['lconame']; $opname=$_POST['opname']; $shareholdername=$_POST['shareholdername']; $businc=$_POST['businc'];
    $businesstype=$_POST['businesstype']; $busadd=$_POST['busadd']; $buscity=$_POST['buscity']; $buspsd=$_POST['buspsd']; 
    $co_province=$_POST['co_province']; $co_years=$_POST['co_years']; $co_months=$_POST['co_months']; $co_propertystatus=$_POST['co_propertystatus'];
    $co_amountrent=$_POST['co_amountrent']; $busphonenumber=$_POST['busphonenumber']; $website=$_POST['website']; $bankname=$_POST['bankname'];
    $bankadd=$_POST['bankadd']; $bankcity=$_POST['bankcity']; $bank_province=$_POST['bank_province']; $bankpsd=$_POST['bankpsd'];
    $bankaccmanager=$_POST['bankaccmanager']; $bankphonenumber=$_POST['bankphonemnumber']; $branchid=$_POST['branchid']; $transitno=$_POST['tranistno'];
    $acc_number=$_POST['acc_number']; $acc_type=$_POST['acc_type']; $gsrHst=$_POST['gsrHst']; $netinc=$_POST['netinc']; $ClientType=$_POST['ClientType'];
    $psr=$_POST['psr']; $pgi=$_POST['pgi'];$cash=$_POST['cash']; $accrec=$_POST['accrec']; $inv=$_POST['inv']; $co_vech=$_POST['co_vech']; $realestate=$_POST['realestate'];
    $refunds=$_POST['refunds']; $other_assets=$_POST['other_assets']; $tot=$_POST['tot']; $crcrd=$_POST['crcrd'];
    $bankloan=$_POST['bankloan']; $autoloan=$_POST['autoloan']; $shareholder_loan=$_POST['shareholder_loan']; $officelease=$_POST['officelease']; $acc_pay=$_POST['acc_pay'];
    $owing=$_POST['owing']; $cor_tax=$_POST['cor_tax']; $oth_lia=$_POST['oth_lia']; $liatot=$_POST['liatot']; $refconame=$_POST['refconame'];
    $reffulladd=$_POST['reffulladd']; $refcontactname=$_POST['refcontactname']; $refphonenumber=$_POST['refphonenumber'];
    $refhcg=$_POST['refhcg']; $refbusinessyrs=$_POST['refbusinessyrs']; $refconame2=$_POST['refconame2']; $reffulladd2=$_POST['reffulladd2'];
    $refcontactname2=$_POST['refcontactname2']; $refphonenumber2=$_POST['refphonenumber2']; $refhcg2=$_POST['refhcg2']; $refbusinessyrs2=$_POST['refbusinessyrs2'];
    $loantype=$_POST['loantype'];$loanamountreq=$_POST['loanamountreq']; $term=$_POST['term']; $datefunds=$_POST['datefunds']; $securityloan=$_POST['securityloan'];
    $currentdate=$_POST['currentdate'];$signofperson=$_POST['signofperson'];



    $sql="INSERT INTO creditapplication(firstname,lastname, addln1, addln2,city,psd,province,phonenumber, email,driverlic,years, months,propertystatus,
    amountrent, lconame, opname,shareholdername, businc, businesstype,busadd,buscity, buspsd,co_province, co_years, co_months, co_propertystatus,
    co_amountrent, busphonenumber,website, bankname, bankadd,bankcity,bank_province,bankpsd,bankaccmanager, bankphonenumber, branchid, transitno, acc_number,
    acc_type,gsrHst, netinc, ClientType, psr, pgi, cash, accrec, inv, co_vech, realestate, refunds, other_assets, tot, crcrd, bankloan, auto_loan,
    shareholder_loan, officelease, acc_pay, owing,cor_tax, oth_lia, liatot, refconame, reffulladd, refcontactname, refphonenumber, refhcg,
    refbusinessyrs, refconame2, reffulladd2, refcontactname2, refphonenumber2, refhcg2, refbusinessyrs2,loantype, loanamountreq, term, 
    datefunds, securityloan, currentdate, signofperson) VALUES ('$firstname', '$lastname, $addln1', '$addln2', '$city', '$psd', 
    '$province','$phonenumber', '$email', '$driverlic', '$years', '$months','$propertystatus', '$amountrent', '$lconame', '$opname','$shareholdername',
    '$businc','$businesstype', '$busadd', '$buscity', '$buspsd', '$co_province', '$co_years', '$co_months', '$co_propertystatus',
    '$co_amountrent', '$busphonenumber', '$website', '$bankname', '$bankadd', '$bankcity', '$bank_province', '$bankpsd', '$bankaccmanager',
    '$bankphonenumber', '$branchid', '$transitno','$acc_number','$acc_type', '$gsrHst', '$netinc', '$ClientType', '$psr', '$pgi','$cash',
    '$accrec', '$inv', '$co_vech','$realestate', '$refunds','$other_assets', '$tot','$crcrd', '$bankloan','$autoloan',
    '$shareholder_loan', '$officelease', '$acc_pay', '$owing', '$cor_tax', '$oth_lia', '$liatot', '$refconame', '$reffulladd',
    '$refcontactname', '$refphonenumber', '$refhcg', '$refbusinessyrs', '$refconame2', '$reffulladd2', '$refcontactname2', '$refphonenumber2', '$refhcg2', 
    '$refbusinessyrs2', '$loantype', '$loanamountreq','$term' , '$datefunds', '$securityloan','$currentdate', '$signofperson')";

if($conn->query($sql)===true){
    echo "Record inserted sucessfully";
}
else{
    echo "Error: Could not able to execute $sql". $conn->error;
}

}




$conn->close();


?>