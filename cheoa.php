<?php
include 'connection.php';
$sn=$_GET['sn'];
$q1="SELECT * FROM product_info where sn='$sn'";
$q=mysqli_query($conn,$q1);
$r=mysqli_fetch_assoc($q);
$title=$r['title'];
$email=$r['Seller_email'];
$price=$r['price'];
$realp=explode('-',$price,0);
$q2="SELECT * FROM Seller_info where email='$email'";
$t=mysqli_query($conn,$q2);
$t1=mysqli_fetch_assoc($t);
$chat_id=$t1['numbe'];
if($realp=='calculating...'){
    header("location:cal.php?sn=$sn");
}
else{
    $q2="UPDATE product_info set price='$realp' where sn='$sn'";
    mysqli_query($conn,$q2);
    $caption='Congrates 🎉🎉🎉🎉🎉🎉🎉🎉 '.$naam.' Link:'.'your book '.$title.' is live now see it'.'https://booksfiver.com/book.php';
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage
?chat_id=$chat_id&caption=$caption";
file_get_contents($url);
header("location:dono.php");
}


?>