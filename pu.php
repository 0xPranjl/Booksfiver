<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pid=$_POST['sn'];
$bof=$_POST['bof'];
$bk=$_POST['bk'];
$qn="SELECT * FROM product_info WHERE sn='$pid'";
$tro=mysqli_query($conn,$qn);
$col=mysqli_fetch_assoc($tro);
$price=$col['price'];
$no=$col['quantity'];
$q1="SELECT * FROM package WHERE email='$email' and pid='0' order by sn desc limit 1";
$res=mysqli_query($conn,$q1);
$row=mysqli_fetch_assoc($res);
$cat=$row['category'];
$naam=$row['pnaam'];
$qua=$row['quantity'];
$pic=$row['pic'];
if($qua>$no){
    echo 'pagal';
}
else{
    $qu1=$no-$qua;
    $sp="UPDATE product_info set quantity='$qu1' where sn='$pid'";
    mysqli_query($conn,$sp);
    $q2="INSERT INTO package(sn,pnaam,email,pid,category,price,bof,quantity,pic) VALUES(NULL,'$naam','$email','$pid','$cat','$price','$bof','$qua','$pic')";
    mysqli_query($conn,$q2);
    echo "cnkjrefygref";
}
?>