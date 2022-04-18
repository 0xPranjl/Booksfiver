<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pnaam=$_POST['d'];
$q1="DELETE FROM package where pnaam='$pnaam'";
mysqli_query($conn,$q1);
?>