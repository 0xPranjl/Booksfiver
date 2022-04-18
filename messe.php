<?php
$text="koi hai kya be?";
$chat_id="1687225827";
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage?text=$text&chat_id=$chat_id";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res=curl_exec($ch);
curl_close($ch);
echo "<pre>";
print_r($res);
?>