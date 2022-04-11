<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `orgsignup` WHERE id = $id ";

mysqli_query($con, $q);

header('location:S_details.php');

?>