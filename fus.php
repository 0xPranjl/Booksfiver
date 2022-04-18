<?php
include 'connection.php';
$email=$_COOKIE['email'];
$pid=$_POST['sn'];
$pnaam=$_POST['bookid'];
$qn="SELECT * FROM product_info WHERE sn='$pid'";
$tro=mysqli_query($conn,$qn);
$col=mysqli_fetch_assoc($tro);
$price=$col['price'];
$qz="SELECT * FROM package WHERE pnaam='$pnaam' and pid='$pid' order by sn desc limit 1";
$z1=mysqli_query($conn,$qz);
$z2=mysqli_num_rows($z1);
$q1="SELECT * FROM package WHERE pnaam='$pnaam' and email='$email'";
$res=mysqli_query($conn,$q1);
$row=mysqli_fetch_assoc($res);
$cat=$row['category'];
$naam=$row['pnaam'];
$bof=$row['bof'];
$qua=$row['quantity'];
$pic=$row['pic'];
$nom=mysqli_num_rows($res);
$naam=$row['pnaam'];
if($nom<1){
echo 'No files in the Package';
}
else{
if($z2>0){
echo "Already exists";
}
else{
    $qp="SELECT * from product_info where sn='$pid'";
    $f=mysqli_query($conn,$qp);
    $f1=mysqli_fetch_assoc($f);
    $qu=$f1['quantity'];
    if($qu>=$qua){
    $qu1=$qu-$qua;
    $sp="UPDATE product_info set quantity='$qu1' where pnaam='$naam' and pid='$pid'";
    mysqli_query($conn,$sp);
$q2="INSERT INTO package(sn,pnaam,email,pid,category,price,bof,quantity,pic) VALUES(NULL,'$naam','$email','$pid','$cat','$price','$bof','$qua','$pic')";
mysqli_query($conn,$q2);
echo "cnkjrefygref";
    }
    else{
        echo 'pagalp';
    }
}
}
?>