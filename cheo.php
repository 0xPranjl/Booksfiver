<?php
include 'connection.php';
$sn=$_GET['sn'];
$q1="SELECT * FROM product_info where sn='$sn'";
$q=mysqli_query($conn,$q1);
$r=mysqli_fetch_assoc($q);
$title=$r['title'];
$email=$r['Seller_email'];
$i1=$r['Image_link1'];
$i2=$r['Image_link2'];
$i3=$r['Image_link3'];
$u="upload/";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jsm.js"></script> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body>
    <div class='text-center'>
      <h1 id='e1' hidden><?php echo $sn;?></h1>
  <div class="form-group">
   <h3><?php echo $title;?></h3>
</div>
<div class="form-group">
   <img src="<?php echo $u.$i1; ?>" style='height:100px; weight: 65px;'>
</div>
<div class="form-group">
   <img src="<?php echo $u.$i2; ?>" style='height:100px; weight: 65px;'>
</div>
<div class="form-group">
   <video src="<?php echo $u.$i3; ?>" style='height:300px; weight: 200px;' autoplay controls type="video/mp4" >
</video>
</div>
</div>
<div class='text-center'>
<a href="cal.php?sn<?php echo $sn;?>"><button class="btn btn-primary">Approve</button></a>
<a href="dl.php?sn<?php echo $sn;?>"><button class="btn btn-danger">decline</button></a>
<br><br><br>
<div id='ono' class='text-center'>
</div>
</div>
        <script src="jsm.js"></script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>