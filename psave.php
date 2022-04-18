<?php
include 'connection.php';
$email=$_COOKIE['email'];
$cat=$_POST['category'];
$naam=$_POST['naam'];
$bof=$_POST['bof'];
$qua=$_POST['qua'];
if($naam!=""){
$q1="INSERT INTO package(sn,pnaam,email,pid,category,price,bof,quantity,pic) VALUES(NULL,'$naam','$email','0','$cat','0','$bof','$qua','0')";
mysqli_query($conn,$q1);
echo $bof.'-'.$naam;
}
?>