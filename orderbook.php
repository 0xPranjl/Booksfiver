<?php
include 'connection.php';
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <style>
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
  <div class='container'>
  <div class='col'>
  <div class="wrapper">
    <div class="typing-demo">
        <h1>
      My orders
</h1>
    </div>
</div><br>
<br><br>
    <div class='col' id='offer'>
<?php 
$cmail=$_COOKIE['cmail'];
$query="SELECT * FROM order_book where cmail='$cmail'";
$y=mysqli_query($conn,$query);

if(mysqli_num_rows($y)>0){
  echo '<table class="table table-hover table-dark">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col">price</th>
  </tr>
</thead>
<tbody>';
}
else{
 echo  "<h1>no orders found</h1>";
}
while($y1=mysqli_fetch_assoc($y)){
$pid=$y1['pid'];
$pnaam=$y1['pnaam'];
$cml=$y1['cmail'];
$query1="SELECT * FROM product_info WHERE sn='$pid'";
$res=mysqli_query($conn,$query1);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
    $title = $row['title'];
    $quantity = $row['quantity'];
    $price=$row['price'];
    $image=$row['Image_link1'];
    $u="upload/";
    $f=$u.$image;
    $sno=$row['sn'];
    echo  "<tr>";
    echo "<td>"."<img src=".$f.' width=100px height="100px">'."</td>";
    echo "<td><a href='ospp.php?sn=".$pid."'>".$title."</a></td>";
    echo "<td>".$price."</td>";
    echo "</tr>";

}
}
  $q1="SELECT * FROM package WHERE email='$cml' and sn='$pid'";
  $res=mysqli_query($conn,$q1);
  while($row=mysqli_fetch_assoc($res)){
    
    $title = $row['pnaam'];
    $quantity = $row['quantity'];
    $price=$row['price'];
    $image=$row['pic'];
    $eml=$row['email'];
    $u="upload/";
    $f=$u.$image;
    
    $qz="SELECT SUM(price) as tpo from package where email='$eml' and pnaam='$title'";
    $tl=mysqli_query($conn,$qz);
    $cl=mysqli_fetch_array($tl);
    $tpn=$cl['tpo'];
    echo  "<tr>";
    echo "<td>"."<img src=".$f.' width=100px height="100px">'."</td>";
    echo "<td><a href='osu.php?sn=".$pid."'>".$title."</a></td>";
    echo "<td>".$tpn."</td>"; 
    echo "</tr>";

}
}
?>
</div>
</div>
</body>
</html>