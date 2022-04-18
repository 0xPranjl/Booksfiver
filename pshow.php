<?php 
  include 'connection.php';
  $email=$_COOKIE['email'];
  $q1="SELECT * FROM package WHERE email='$email' group by pnaam";
  $res=mysqli_query($conn,$q1);
  if(mysqli_num_rows($res)>0){
    echo '<table class="table table-hover table-dark">
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
$lp='dit.php?naam='.$pname;
$naam=$row['pnaam'];
     $sn=$row['pid'];
     $rl=mysqli_fetch_assoc($res1);
     $title = $rl['title'];
     echo $title;
     $quantity = $rl['quantity'];
     $price=$rl['price'];
     $image=$rl['Image_link1'];
     $w="SELECT SUM(price) as tprice FROM package where pnaam='$naam'";
     $wow=mysqli_query($conn,$w);
     $ro = mysqli_fetch_array($wow);
     $tprice=$ro['tprice'];
     $u="upload/";
     $f=$u.$image;
     $sno=$row['sn'];
     echo  "<tr>";
     echo "<td><a href=".$link.">".$naam."</a></td>"; 
     echo "<td><a href=".$link.">".$tprice."</a></td>";
     echo "<td><a href=".$lp."><button value=".$sn.">delete</button></a></td>";  
     echo "</tr>";


    }
}
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

   <script>
         $(".cut").click(function(){
           var se=$(this).attr('value');
    //    $.ajax({
    //    url:"cut.php",
    //    type:"POST",
    //    data:{d:se}
    // });
      });
       </script>
           <script src="jsm.js"></script>
           <body>
    </body>
    </html>