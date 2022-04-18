<?php
include 'connection.php';
// new filename
$cat=$_GET['cat'];
$filename = 'pic_'.date('YmdHis') . '.jpeg';
$email=$_COOKIE['email'];
$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
}
$q2="SELECT * FROM product_info where Seller_email='$email' and Image_link2='0'";
$sel=mysqli_query($conn,$q2);
if(mysqli_num_rows($sel)>0){
	$q3="UPDATE product_info SET Image_link2='$filename' where Seller_email='$email' and Image_link2='0'";
    mysqli_query($conn,$q3);
}
else{
	$q1="INSERT INTO product_info(sn,title,quantity,category,price,Image_link1,Image_link2,Image_link3,Seller_email)
VALUES (NULL,'hcv part 1','1','$cat','0','$filename','0','0','$email')";
mysqli_query($conn,$q1);
}

// Return image url
echo $url;
?>