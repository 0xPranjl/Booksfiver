<?php
include 'connection.php';
$sn=$_GET['sn'];
$q1="SELECT * FROM product_info where sn='$sn'";
$q=mysqli_query($conn,$q1);
$r=mysqli_fetch_assoc($q);
$email=$r['Seller_email'];
$book=$r['title'];
$q2="SELECT * FROM Seller_info where email='$email'";
$t=mysqli_query($conn,$q2);
$t1=mysqli_fetch_assoc($t);
$chat_id=$t1['numbe'];
$q="SELECT * from listprice where book='$book'";
$q1=mysqli_query($conn,$q);
$t1=mysqli_fetch_assoc($q1);
$ppr=$t1['fullprice'];
if(mysqli_num_rows($q1)>0){
  $q2="UPDATE product_info set price='$ppr' where sn='$sn'";
  mysqli_query($conn,$q2);
  $caption='Congrates 🎉🎉🎉🎉🎉🎉🎉🎉 '.$book. 'is live now see it'."https://booksfiver.com/book.php";
$url="https://api.telegram.org/bot1738147065:AAGkTAd1WG5bGzcY73UJUTBRuQDc57aUWx4/sendMessage?chat_id=$chat_id&text=$caption";
file_get_contents($url);
header("location:dono.php");
}
$q1="SELECT * FROM product_info where sn='$sn'";
$q=mysqli_query($conn,$q1);
$r=mysqli_fetch_assoc($q);
$email=$r['Seller_email'];
$book=$r['title'];
$price=$r['price'];
$category=$r['category'];
$rs=explode('@',$price,0);
$q2="SELECT * FROM Seller_info where email='$email'";
$t=mysqli_query($conn,$q2);
$t1=mysqli_fetch_assoc($t);
$chat_id=$t1['numbe'];

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
  <form style='padding:50px;' id='fastly'>
  <div class="form-group" hidden>
    <input type="text" name='category' value="<?php echo $category;?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="original price">
  </div>
  <div class="form-group" hidden>
    <input type="text" name='ido' value="<?php echo $sn;?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="original price">
  </div>
  <div class="form-group" hidden>
    <input type="text" name='book' value="<?php echo $book;?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="original price">
  </div>
<div class="form-group">
    <input type="text" name='fprice'   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="original price">
  </div>
<div class="form-group">
    <input type="text" name='weight'   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="weight in kg(like 1.5kg)">
  </div>
</form>
<div class='text-center'>
<button id='clk' class="btn btn-primary">Submit</button>
<br><br><br>
<div id='ono' class='text-center'>
</div>
</div>
<script>
$("#clk").click(function(){
$.ajax({
url:'msavert.php',
type:'POST',
data:$("#fastly").serialize(),
success:function(data){
  alert(data);
  $("#fastly").trigger('reset');
}
});
$.ajax({
url:'ptable.php',
type:'POST',
data:{sn:'nsf'},
success:function(data){
  $("#ono").html(data);

}
});
});
    </script>
        <script src="jsm.js"></script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>