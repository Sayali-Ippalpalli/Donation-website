<?php

session_start();
header('location:O_login.php');
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'donatopedia');

$name = $_POST['myName'];
$pass = $_POST['psword'];
$email = $_POST['myEmaill'];

$q = "select * from orgsignup where name = '$name' && emailid = '$email' && password ='$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script>alert("Duplicate data")</script>'; 
}else{
    $qy = "INSERT INTO orgsignup (name, emailid , password) VALUES ('$name', '$email', '$pass')";
    mysqli_query($con,$qy);
}





?>