<?php
include 'connection.php';
$cmail=$_COOKIE['cmail'];
$id=$_GET['sn'];
$query="SELECT * FROM order_book where pid='$id'";
$rq=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($rq);
$semail=$row['cmail'];
$q1="SELECT * FROM customer_info where email='$semail'";
$r=mysqli_query($conn,$q1);
$rw=mysqli_fetch_assoc($r);
$chat_id=$rw['numbe'];
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendPhoto?photo=AgACAgUAAxkBAANlYRDZwjLzij6I6mE5QU4RVZwgKHEAAiStMRujc4hUK82uPZzIiO8BAAMCAAN4AAMgBA&chat_id=$chat_id&caption=your order is Confirmed by seller shipping soon";
$q1="UPDATE order_book set statuss='confirmed' where pid='$id'";
$s=mysqli_query($conn,$q1);
$qp="SELECT * from product_info where sn='$id'";
$f=mysqli_query($conn,$qp);
$f1=mysqli_fetch_assoc($f);
$qua=$f1['quantity'];
$qu1=$qua-1;
$sp="UPDATE product_info set quantity='$qu1'";
file_get_contents($url);
header("location:ajaxsubmit.php");

?>