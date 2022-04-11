<?php
 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
<script>
    alert("Welcome");
    </script>
 
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Donation Details</h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <!-- <th> Id </th> -->
 <th> Donar Name </th>
 <th> Email Id </th>
 <th> Mobile Number </th>
 <th> Amount </th>
 <th> Country</th>
 <th> Gender</th>
 

 </tr >

 <?php

include 'conn.php'; 
$org = $_SESSION['username'];

$q = "select name from orgsignup where emailid = '$org' ";
$m = mysqli_query($con,$q);
while($rest = mysqli_fetch_array($m)){

    $name =  $rest['name'];
    
}
$qy = " select *  from donationdetails where OrgName = '$name' ";
$query = mysqli_query($con,$qy) or die(mysqli_error($con));

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 
 <td> <?php echo $res['DonarName'];  ?> </td>
 <td> <?php echo $res['emailid'];  ?> </td>
 <td> <?php echo $res['mobileNo'];  ?> </td>
 <td> <?php echo $res['Amount'];  ?> </td>
 <td> <?php echo $res['country'];  ?> </td>
 <td> <?php echo $res['Gender'];  ?> </td>
 

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>