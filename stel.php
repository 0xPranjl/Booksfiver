<?php
include 'connection.php';
$input=file_get_contents('php://input');
$data=json_decode($input);
$chat_id=$data->message->chat->id;
$text=$data->message->text; 
$email=$_COOKIE['email'];
$q1="SELECT * FROM Seller_info where numbe='$text'";
$sd=mysqli_query($conn,$q1);
$moto=mysqli_fetch_assoc($sd);
$ts=$moto['naam'];
$c1=$moto['numbe'];
$q2="SELECT * FROM customer_info where numbe='$text'";
$sdk=mysqli_query($conn,$q2);
$moti=mysqli_fetch_assoc($sdk);
$tsk=$moti['naam'];
$c2=$moti['numbe'];
if($text==$ts){
$text=$ts." Thanks For joining The Revolution Lets Disrupt"." Click here: https://booksfiver.com/verio.php?id=$chat_id";
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage?text=BAACAgUAAxkBAANuYREG1v7L2f9gtMpIs_z27E97TK0AAh4EAAKjc4hU2jIfqqva2pIgBA&chat_id=$chat_id";
}
if($text==$c2){
    $text=$tsk." Thanks For joining The Revolution Lets Disrupt"." Click here: https://booksfiver.com/verioc.php?id=$chat_id";
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage?text=BAACAgUAAxkBAANuYREG1v7L2f9gtMpIs_z27E97TK0AAh4EAAKjc4hU2jIfqqva2pIgBA&chat_id=$chat_id";

}
file_get_contents($url);
?>