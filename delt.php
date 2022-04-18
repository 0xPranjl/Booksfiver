<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pid=$_POST['d'];
$q1="DELETE FROM package where pid='0'";
mysqli_query($conn,$q1);
?>