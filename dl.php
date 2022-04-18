<?php
include 'connection.php';
$sn=$_GET['sn'];
$q1="SELECT * FROM product_info where sn='$sn'";
$q=mysqli_query($conn,$q1);
$r=mysqli_fetch_assoc($q);
$email=$r['Seller_email'];
$q2="SELECT * FROM Seller_info where email='$email'";
$t=mysqli_query($conn,$q2);
$t1=mysqli_fetch_assoc($t);
$chat_id=$t1['numbe'];
$qw="DELETE FROM product_info where sn='$sn'";
mysqli_query($conn,$qw);
$caption=$naam.' Link:'.'your book '.$title.' is deleted due to wrong pictures and video try with correct pic and videos'.'https://booksfiver.com/book.php';
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage?chat_id=$chat_id&text=$caption";
file_get_contents($url);
header("location:dono.php");

?>