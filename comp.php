<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="businessownerinfo";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
   die("Connection failed".$conn->connect_error);


} 
if(isset($_POST['submit'])){
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
    $property=$_POST['$property'];
    $propertyamt=$_POST['propertyamt'];
    $owner_years=$_POST['owner_years'];
    $owner_months=$_POST['owner_months'];

$sql="INSERT INTO ownerinfo(fname,lname,addln1,addln2,city,province,owner_psd,owner_phonenumber,owner_email,dl,property,propertyamt,owner_years,owner_months)
VALUES('$fname','$lname','$addln1','$addln2','$city','$province','$owner_psd','$owner_phonenumber','$owner_email','$dl','$property','$propertyamt','$owner_years','$owner_months')";


if($conn->query($sql) === true){
    echo "Records inserted successfully.";
    
header('Location: page1_form.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}



}


$conn->close();

?>