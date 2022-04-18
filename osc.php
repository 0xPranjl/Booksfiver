<?php
include 'connection.php';
$cmail=$_COOKIE['cmail'];
$query="SELECT * FROM order_book where cmail='$cmail'";
$rq=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($rq);
$pid=$row['pid'];

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
  <div class='container'>
    
    <div class='col' id='offer'>
<?php 
$query1="SELECT * FROM product_info WHERE sn='$pid'";
$res=mysqli_query($conn,$query1);
if(mysqli_num_rows($res)>0){
echo '<table class="table table-hover table-dark">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col" class="quantity">quantity</th>
    <th scope="col">price</th>
  </tr>
</thead>
<tbody>';
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
    echo "<td><a href='osp.php?sn=".$pid."'>".$title."</a></td>";
    echo"<td class='quan'>".$quantity."</td>"; 
    echo "<td>".$price."</td>"; 
    echo "</tr>";

}
}
?>
</div>
</div>
</body>
</html>