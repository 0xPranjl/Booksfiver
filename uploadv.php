<?php
include 'connection.php';
$email=$_COOKIE['email'];
if(!empty($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    $it=$_FILES['userImage']['name'];
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "upload/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
    $q2="SELECT * FROM product_info where Seller_email='$email' order by sn desc limit 1";
$sel=mysqli_query($conn,$q2);
$rt=mysqli_fetch_assoc($sel);
$ido=$rt['sn'];
$q3="UPDATE product_info SET Image_link3='$it' WHERE sn='$ido'";
mysqli_query($conn,$q3);
echo "<video src=".$targetPath.' width=150px height="270px">';

}
}
}

?>