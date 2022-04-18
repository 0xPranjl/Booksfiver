<?php
include 'connection.php';
$id=$_GET['sn'];
$dt=date("d/m/Y");
$cmail=$_COOKIE['cmail'];
$ql="SELECT * FROM package where sn='$id'";
$t1=mysqli_query($conn,$ql);
$t2=mysqli_fetch_assoc($t1);
$pnaam=$t2['pnaam'];
$pd=$t2['pid'];
$mlo=$t2['email'];
$qua1=$t2['quantity'];
$ty2=$qua1-1;
$zi="UPDATE package set quantity='$ty2' where pnaam='$pnaam' and email='$mlo'";
mysqli_query($conn,$zi);
$query2="INSERT INTO order_book(sn,cmail,pid,datee,statuss) VALUES(NULL,'$cmail','$id','$dt','order placed')";
mysqli_query($conn,$query2);
$query3="SELECT * from product_info where sn='$pd'";
$z=mysqli_query($conn,$query3);
$z1=mysqli_fetch_assoc($z);
$emailo=$z1['Seller_email'];
$query4="SELECT * from Seller_info where email='$emailo'";
$y=mysqli_query($conn,$query4);
$y1=mysqli_fetch_assoc($y);
$chat_id=$y1['numbe'];
$naam=$y1['naam'];
$caption='Congrates 🎉🎉🎉🎉🎉🎉🎉🎉 '.$naam.' Link:'.'https://booksfiver.com/ordercp.php?sn='.$id;
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendPhoto?photo=AgACAgUAAxkBAANbYRCMML3X_Z1In67kxOQv2eWEJtYAAmmuMRujc4BUJndeV-NQSJABAAMCAANzAAMgBA&chat_id=$chat_id&caption=$caption";
file_get_contents($url);
?>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jsm.js"></script>
    <script>
         setTimeout(function(){
            window.location.href = 'osc.php';
         }, 5000);
      </script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="699677837875-82ddd76ls9146fr16qu054qh1lccv28v.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <style>
          .fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.wrapper {
  height: 100vh;
  /*This part is important for centering*/
  display: flex;
  align-items: center;
  justify-content: center;
}

.typing-demo {
  width: 22ch;
  animation: typing 4s steps(22), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 2em;
}

@keyframes typing {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
  }
}
          </style>
      <div class="fullscreen-bg">
    <video muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="op.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
    <div class="typing-demo">
      Order Placed
    </div>
</div>
</div>
</body>
</html>