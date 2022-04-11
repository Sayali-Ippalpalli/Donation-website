<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'donatopedia');

$name = $_POST['myEmail'];
$pass = $_POST['psw'];

$q = "select * from staffsignin where emailid = '$name' && password ='$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){

    header('location:S_Details.php');
    
}else{
    
    header('location:S_login.php');
   
}





?>