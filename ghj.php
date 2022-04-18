
<?php
include 'connection.php';
$input=file_get_contents("https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/getUpdates");
$data=json_decode($input);
$text=$data->message->chat->text; 
echo $text;
?>