<?php
include 'connection.php';
$cmail=$_COOKIE['cmail'];
$query="SELECT * FROM customer_info where email='$cmail'";
$rq=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($rq);
$pid=$row['pid'];
$datee=$row['datee'];
$statuss=$row['statuss'];

?>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jsm.js"></script>

    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="699677837875-82ddd76ls9146fr16qu054qh1lccv28v.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jsm.js"></script>
  </head>
  <body>
      <style>
          .orderstatus {
  color: #939393;
  display: block;
  padding: 1em 0;
  position: relative;
  text-align: center;
  min-height: 150px;
  left:50px;
}

.orderstatus.done:before {
  background: #32841f;
  
}
.orderstatus:before {
  content: '';
  height: 100%;
  position: absolute;
  left: 50%;
  width: 2px;
  background: #939393;
  margin: 0 25px;
}

.orderstatus:last-child:before {
  height: 0;
}

.orderstatus.done {
  color: 	#FF4500;
}

@media only screen and (max-width: 40em) {
  .orderstatus {
    text-align: left;
  }
  .orderstatus:before {
    left: 0;
  }
  .orderstatus .orderstatus-text {
    left: 0;
    width: 100%;
  }
}

.orderstatus-text {
  position: relative;
  width: 50%;
  left: 50%;
  text-align: left;
  padding-left: 60px;
}

@media only screen and (min-width: 40em) {
  .orderstatus:nth-child(2n) .orderstatus-text {
    left: 10px;
    text-align: right;
    padding-right: 20px;
  }
}

.orderstatus-container {
  padding: 10em 0;
}

.orderstatus time {
  display: block;
  font-size: 1em;
  color: #939393;
}

.orderstatus.done time {
  color: #368d22;
}

@media only screen and (max-width: 40em) {
  .orderstatus-container {
    text-align: center;
  }
}

.orderstatus-check {
  font-family: "Helvetica", Arial, sans-serif;
  border: 2px solid #939393;
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center;
  line-height: 48px;
  border-radius: 50%;
  margin-bottom: 0.5em;
  background: #fff;
  z-index: 2;
  position: absolute;
  color: #939393;
  left: 50%;
}

.done .orderstatus-check {
  color: #368d22;
  border-color: #368d22;
}

@media only screen and (max-width: 40em) {
  .orderstatus-check {
    left: 0;
  }
}

.orderstatus-active {
  text-align: center;
  position: relative;
  left: 25px;
  top: 20px;
  color: #939393;
}

@media only screen and (max-width: 40em) {
  .orderstatus-active {
    display: none;
  }
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
    <div class="wrapper">
    <div class="typing-demo">
      Order Status
    </div>
</div>
<h1 id='<?php echo $statuss;?>' class='dec' hidden>eiofhiueh</h1>
 <section>
  <div class="row orderstatus-container">
    <div class="medium-12 columns">
      <div class="orderstatus" id='four'>
        <div class="orderstatus-check"><span class="orderstatus-number">4</span></div>
        <div class="orderstatus-text">
          <time>24 Dec</time>
          <p>Out For delivered</p>
        </div>
      </div>
      <div class="orderstatus" id='three'>
        <div class="orderstatus-check"><span class="orderstatus-number">3</span></div>
        <div class="orderstatus-text">
          <time>19 Dec</time> 
          <p>shipped</p>
        </div>
      </div>
      <div class="orderstatus " id='two'>
        <div class="orderstatus-check"><span class="orderstatus-number">2</span></div>
        <div class="orderstatus-text">
          <time>18 dec</time>
          <p>order Confirmed From Seller</p>
        </div>
      </div>
      <div class="orderstatus done" id='one'>
        <div class="orderstatus-check"><span class="orderstatus-number">1</span></div>
        <div class="orderstatus-text">
          <time><?php echo $datee;?></time>
          <p>Your order is placed</p>
        </div>
      </div>


    </div>
  </div>
</section>
</body>
</html>
<script>
var dec=$('.dec').attr('id');
if(dec==='confirmed'){
  $('.two').addClass('Done');

}
if(dec==='shipped'){
  $('.three').addClass('Done');
}
if(dec==='out for delivery'){
  $('.four').addClass('Done');
}



  </script>