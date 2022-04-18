<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pid=$_POST['sn'];
$bk=$_POST['bk'];
$qk="SELECT * FROM package where pnaam='$bk' and pid='$pid'";
$res=mysqli_query($conn,$qk);
$row=mysqli_fetch_assoc($res);
$cat=$row['category'];
$naam=$row['pnaam'];
$qua=$row['quantity'];
$pic=$row['pic'];
$q1="DELETE FROM package where pid='$pid' and pnaam='$bk'";
$qua=$row['quantity'];
$qn="SELECT * FROM product_info WHERE sn='$pid'";
$tro=mysqli_query($conn,$qn);
$col=mysqli_fetch_assoc($tro);
$price=$col['price'];
$no=$col['quantity'];
$qu1=$no+$qua;
$sp="UPDATE product_info set quantity='$qu1' where sn='$pid'";
mysqli_query($conn,$sp);
mysqli_query($conn,$q1);
?>