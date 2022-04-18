<?php
include 'connection.php';  
$book=$_POST['book'];
$category=$_POST['category'];
$weight=$_POST['weight'];
$fprice=$_POST['fprice'];
if($weight>1){
  $fullprice=$weight*42;
}
else{
  $fullprice=$weight*40;
}
$fn=$fprice/100;
$fno=$fprice-57*$fn;
$fnp=$fno+$fullprice;
$fin=round($fnp);
$q="SELECT * from listprice where book='$book'";
$q1=mysqli_query($conn,$q);
$q2=mysqli_num_rows($q1);
if($q2>0){
  echo 'already exists';
}
else{
$query="INSERT INTO listprice(sn,book,category,weighto,fullprice) values(NULL,'$book','$category','$weight','$fin')";
if(mysqli_query($conn,$query)){

}
$q2="UPDATE product_info set price='$realp' where title='$book'";
    mysqli_query($conn,$q2);
    $caption='Congrates 🎉🎉🎉🎉🎉🎉🎉🎉 '.' Link:'.'your book '.$book.' is live now see it'.'https://booksfiver.com/book.php';
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage
?chat_id=$chat_id&caption=$caption";
file_get_contents($url);
header("location:dono.php");
}
?>