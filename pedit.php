<?php
include 'connection.php';
$pnaam=$_GET['naam'];
$q2="SELECT SUM(price) as tprice FROM package WHERE pnaam='$pnaam'";
$reso=mysqli_query($conn,$q2);
$rz=mysqli_fetch_assoc($reso);
$total_price=$rz['tprice'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jsm.js"></script>
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
        <h1>
      Edit Package
</h1>
    </div>
</div>
  <div style='text-align:center; margin-top:150px;'>
  <div class="form-group">
    <label for="exampleInputEmail1">Package Name:</label>
    <label for="pn" id='bno'><?php echo $pnaam; ?></label>
    <button style="font-size:12px">Change<i class="fa fa-edit"></i></button>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Price:</label>
    <label for="pn" id='tpo' ><?php echo $total_price; ?></label>
    <button style="font-size:12px">Change<i class="fa fa-edit"></i></button>
  </div>
  <div class="form-group">
    <?php
    $q1="SELECT * FROM package WHERE pnaam='$pnaam'";
    $res=mysqli_query($conn,$q1);
    if(mysqli_num_rows($res)>0){
      echo '<table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Book name</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>';
      while($row=mysqli_fetch_assoc($res)){
          $pname=$row['pnaam'];
    $link='pedit.php?naam='.$pname;
    
       $naam=$row['pnaam'];
       $sn=$row['pid'];
       $query1="SELECT * FROM product_info WHERE sn='$sn'";
       $res1=mysqli_query($conn,$query1);
       $rl=mysqli_fetch_assoc($res1);
       $title = $rl['title'];
       $quantity = $rl['quantity'];
       $price=$rl['price'];
       $image=$rl['Image_link1'];
       $u="upload/";
       $f=$u.$image;
       $sno=$row['sn'];
       echo  "<tr class=".$sn.">";
       echo "<td><a href=".$link.">".$title."</a></td>"; 
       echo "<td><a href=".$link.">".$price."</a></td>";
       echo "<td><button value=".$sn." class='dt'>delete</button></td>";  
       echo "</tr>";
    
    
      }
    }
    ?>
</div><br><br>
<div class='form-control'>
  <a href='pbooks.php?pnaam=<?php echo $pnaam; ?>'><button type="submit" id='btn' class="btn btn-primary">Add More Book to Package</button>
  </a>
</div>
  <br><br>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$("#btn").click(function(){
var i_pn=$(".pn").attr('id');
var i_tp=$(".tp").attr('id');
var f_pn=$(".pn").val();
var f_tp=$(".tp").val();
if(i_pn===f_pn||i_tp===f_tp){

}
if(i_tp===f_tp&&i_pn===f_pn){

}
else{
  $.ajax({
url:'up.php',
type:'POST',
data:$('#fot').serialize(),
success:function(){
  alert("SUCCESS");
}
  });
}



});
  </script>
  <script>
    $(".dt").click(function(){
      var dat=$(this).attr('value');
      var bo=$("#bno").html();
      $.ajax({
       url:'deletepe.php',
       type:'POST',
       data:{sn:dat,pnaam:bo},
       success:function(data){
        $("."+dat).hide();
        $("#tpo").html(data);
       }

      });
    });
    </script>
  </body>
</html>