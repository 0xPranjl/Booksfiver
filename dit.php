<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pnm=$_GET['pnaam'];
$q1="SELECT * FROM package where email='$email' and pnaam='$pnm'";
$y=mysqli_query($conn,$q1);
while($row=mysqli_fetch_assoc($y)){
$pid=$row['pid'];
$qua=$row['quantity'];
$qn="SELECT * FROM product_info WHERE sn='$pid'";
$tro=mysqli_query($conn,$qn);
$col=mysqli_fetch_assoc($tro);
$price=$col['price'];
$no=$col['quantity'];
$qu1=$no+$qua;
$sp="UPDATE product_info set quantity='$qu1' where sn='$pid'";
mysqli_query($conn,$sp);
$r="DELETE From package where pnaam='$pnm'";
mysqli_query($conn,$r);
}
?>