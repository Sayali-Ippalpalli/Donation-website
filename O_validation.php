<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'donatopedia');


$pass = $_POST['psw'];
$email = $_POST['myEmail'];

$q = "select * from orgsignup where emailid = '$email' && password ='$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $email;
    header('location:O_Details.php');
}else{
    echo '<script>alert("Enter correct details")</script>'; 
    header('location:O_login.php');
}





?>