<?php

session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'donatopedia');

$name = $_POST['name'];
$org = $_POST['org'];
$mob = $_POST['mobile'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$country = $_POST['country'];
$gender = $_POST['gender'];

$q = "select * from donationdetails where name = '$name' && emailid = '$email' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script>alert("Duplicate data")</script>'; 
}else{
    $qy = "INSERT INTO donationdetails (DonarName,OrgName, emailid , mobileNo ,Amount, country,Gender) VALUES ('$name', '$org', '$email','$mob','$amount','$country','$gender')";
    mysqli_query($con,$qy);
}





?>