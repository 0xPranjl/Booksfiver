<?php
include 'connection.php';  
$target_dir = "upload/";
$i=$_FILES["fileToUpload"]["name"];
$target_file = $target_dir.$_FILES["fileToUpload"]["name"];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$email=$_COOKIE['cmail'];
$q1="SELECT * FROM package WHERE email='$email' order by sn desc limit 1";
$res=mysqli_query($conn,$q1);
$row=mysqli_fetch_assoc($res);
$cat=$row['category'];
$naam=$row['pnaam'];
$qua=$row['quantity'];
$q2="UPDATE package set pic='$i' where pnaam='$naam' and email='$email'";
mysqli_query($conn,$q2);
?>