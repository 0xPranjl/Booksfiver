<?php
include 'connection.php';
$cat=$_GET['cat'];
// $email=$_COOKIE['email'];
// $i1=$_FILES["i1"]["name"];
// $i2=$_FILES["i2"]["name"];
// $v=$_FILES["v"]["name"];

// if(isset($i1)&&isset($i2)&&isset($v)){
//   if ($_FILES["v"]["size"] > 10000000) {
//     echo "Sorry, your file is too large.";
//   }
//   else{
//     $uploadOk = 0;
// $target_dir = "upload/";
// $i1t = $target_dir . basename($_FILES["i1"]["name"]);
// $i2t = $target_dir . basename($_FILES["i2"]["name"]);
// $vt = $target_dir . basename($_FILES["v"]["name"]);
// move_uploaded_file($_FILES["i1"]["tmp_name"], $i1t);
// move_uploaded_file($_FILES["i2"]["tmp_name"], $i2t);

// $quera="INSERT INTO product_info(sn,title,quantity,category,price,Image_link1,Image_link2,Image_link3,Seller_email)
// VALUES (NULL,'hc verma part 1','1','$cat','$price','$i1','$i2','$v','$email')";
// mysqli_query($conn,$quera);
// }
if(isset($_POST['quantity'])&&isset($_POST['catg'])){
  $email=$_COOKIE['email'];
    $q1="SELECT * FROM product_info WHERE Seller_email='$email' ORDER BY sn DESC LIMIT 1";
    $otitle=$_POST['otitle'];
    $rew=mysqli_query($conn,$q1);
    $r=mysqli_fetch_assoc($rew);
  $sn=$r["sn"];
  $sno=$sn;
  $quantity=$_POST['quantity'];
  $price="calculating...";
  $rize=$price."@"."off";
  $title=$_POST['catg'];
  if($title=="other"){ 
    $quera="UPDATE product_info SET title='$otitle',quantity='$quantity',price='$rize' WHERE sn='$sno'";
    mysqli_query($conn,$quera);
    header("location:wbook.php?sn=$sno");
  }
  else{
    $r1="SELECT * FROM listprice where book='$title'";
    $r2=mysqli_query($conn,$r1);
    $r3=mysqli_fetch_assoc($r2);
    $pp=$r3['fullprice'];
    $rize=$pp."-"."off";
  $quera="UPDATE product_info SET title='$title',quantity='$quantity',price='$pp' WHERE sn='$sno'";
  mysqli_query($conn,$quera);
  header("location:wbook.php?email=$email&book=$title&sn=$sno");  
}
  
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="jsm.js"></script>

  <style>
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
#stat{
  display:block;

}
body{


}
#imageprev{
  width: 340px;
        height: 670px;
       
}
.container {
  padding: 2rem 0rem;

}
.foto{
  width:70%;

}
h4 {
  margin: 2rem 0rem;
}
.cento{
  display: inline-block;
    margin-left: 40%;
    text-align: center;
}
.panel {
  border-radius: 4px;
  padding: 1rem;
  margin-top: 0.2rem;
  background-color: #F5F5F5;
  color: #323B40;
}
@media only screen and (max-width: 480px) {
  .cento{
  display: inline-block;
    text-align: center;
    margin-left: 10%;
}
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
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
  
}
#my_camera{
        width: 340px;
        height: 670px;
       
    }
    ul{
      margin-top: 0px;
      background: #fff;
      color: #000;
    }
    li{
      padding: 12px;
      cursor: pointer;
      color: black;
    }
    li:hover{
      background: #f0f0f0;
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

    </style>
<script>
$(document).ready(function(){
$("#otitle").hide();
});

  </script>
<script>
function getNewVal(item)
{
  
    var dck=item.value;
    if(dck=='other'){
      document.getElementById('otitle').style.display = "block";
    }
    else{
      document.getElementById('otitle').style.display = "none";
    }
}
</script>
      <br><br>
</div>
                     
</div>
</div>
    <div class="container">
     <h3 id='stat' class='col text-center'>Book details </h3>
    </div>
                  
    <div class='form-group text-center cento'>
          <form action='' method='post' class='text-center'>
            <div class="modal-body">
              <label class='san'  style='margin-left:10px;'>Book name</label>
              <select class="form-control" onchange="getNewVal(this);" name='catg' id="cats">
      <?php 
      $quora="SELECT book FROM listprice WHERE category='$cat'";
      $rel=mysqli_query($conn,$quora);
      while($row=mysqli_fetch_assoc($rel)){
          echo "<option>".$row['book']."</option>";
      }
      ?>
      <option>other</option>
    </select>
  
<div class="form-group san">
    <input type="text" name="otitle" class="form-control foto" placeholder='Add new Book' id="otitle">
  </div>
<div class="form-group san">
    <input type="number" name="quantity" class="form-control foto" placeholder='Quantity' id="exampleFormControlFile1">
  </div>
  <!-- <div class="form-group">upload Book image2
    <label for="exampleFormControlFile1"></label>
    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">upload Book Condition video</label>
    <input type="file" name="video1" class="form-control-file" id="bv">
    <small id="emailHelp" class="form-text text-muted" style='color:red;' id='vwarn'></small>  
  </div> -->
       
              <button type="submit" class="btn btn-success san">Add Book</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jsm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
