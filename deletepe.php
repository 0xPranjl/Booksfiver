<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pid=$_POST['sn'];
$pnm=$_POST['pnaam'];
$t="SELECT * FROM package where pid='$pid' and pnaam='$pnm'";
$r=mysqli_query($conn,$t);
$f1=mysqli_fetch_assoc($r);
$ua=$f1['quantity'];
$q1="DELETE FROM package where pid='$pid' and pnaam='$pnm'";
mysqli_query($conn,$q1);
$qp="SELECT * from product_info where sn='$pid'";
$f=mysqli_query($conn,$qp);
$f1=mysqli_fetch_assoc($f);
$qua=$f1['quantity'];
$qu1=$qua+$ua;
$sp="UPDATE product_info set quantity='$qu1'";
mysqli_query($conn,$sp);
$q2="SELECT SUM(price) as tprice FROM package WHERE pnaam='$pnm'";
$reso=mysqli_query($conn,$q2);
$rz=mysqli_fetch_assoc($reso);
$fprice=$rz['tprice'];
echo $fprice;
?>