<?php
include 'connection.php';
$price=$_GET['price'];
$title=$_GET['title'];
$khela=$price/5;
$rela=fmod($price,5);
$querys="SELECT * FROM product_info WHERE price='$price' and title='$title' LIMIT 1";
$lb=mysqli_query($conn,$querys);
while($row=mysqli_fetch_assoc($lb)){
    $title = $row['title'];
    $price=$row['price'];
    $image=$row['Image_link1'];
    $u="uploads/";
    $f=$u.$image;
    $id=$row['sn'];
 echo $f;
}

?>