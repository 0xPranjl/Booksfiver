<?php
include 'connection.php';
$email=$_GET['email'];
$query1="SELECT * FROM Seller_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
$ft=mysqli_fetch_assoc($rtu);
$naam=$ft['naam'];
mysqli_query($conn,$query1);
$otp=rand(100,1000);
$query = "INSERT into Seller_info(sn,naam,email,numbe,Addres,Passwor) values (NULL,'$naam', '$email', '$otp','null','null')";
mysqli_query($conn,$query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
      $(document).ready(function(){
          $("#myModal").modal('show');
          $("#slide").slideUp(2000);
      });
  </script>
  <style>
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
.container {
  padding: 2rem 0rem;

}
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

h4 {
  margin: 2rem 0rem;
}

.panel {
  border-radius: 4px;
  padding: 1rem;
  margin-top: 0.2rem;
  background-color: #F5F5F5;
  color: #323B40;
}
.panel.panel-blue {
  background-color: #E0F5FF;
  color: #00A5FA;
}
.panel.panel-big-height {
  min-height: 150px;
}

.item {
  border-radius: 4px;
  padding: 0.5rem;
  margin: 0.2rem;
  
}
.container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:25px;
}
@media only screen and (max-width: 600px) {
 .container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
}
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
  
}
.item.item-green {
  background-color: #B7E0DC;
  color: #019888;
}
.item.item-lime {
  background-color: #C7E8C8;
  color: #42B045;
}
.item.item-yellow {
  background-color: #FFEEBA;
  color: #FF9901;
}
.item.item-pink {
  background-color: #FABAD0;
  color: #EF075F;
}
.item.item-red {
  background-color: #FEC9C6;
  color: #FD3D08;
}
.item.item-big-width {
  min-width: 380px;
}
.wrapper {
  display: flex;
  align-items: center;
  top: 50px;
}

.typing-demo {
  width: 22ch;
  animation: typing 3s steps(22), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
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
html,body {
margin:0;
padding:0;
margin: 0px;
    padding: 0px;
width:100%;
    overflow-x:hidden;
}
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="fullscreen-bg" id='mu'>
    <video muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="tele.mp4" type="video/mp4">
    </video>
    <div class="wrapper text-center">
    <div class="typing-demo">
    <h4>Verify and Link Telegram</h4><br>
    </div>
</div>
</div>
      <div class="container" id='1s'>
      <form action='' method='post'>

<img src='telegram.png'>
<br><br>
<div class="wrapper text-center">
    <div class="typing-demo">
<h4>Steps</h4>
<h5>1)click and open bot</h5>
<h5>2)start the bot</h5>
<h5>3)Send <?php echo $otp ?></h5>
<h5>4)Open the link from bot</h5>
<a href='https://t.me/BooksFiver_bot'>
Verify and Link
</a>
</div>
</div>
</form>    
</div>
<script>
  $(document).ready(function(){
    $('#1s').hide();
    $('#mu').show();
  });
  setTimeout(() => {
    $('#mu').hide();
    $('#1s').show();
  },4000);
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>