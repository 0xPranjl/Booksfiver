<?php
include 'connection.php';
$email=$_COOKIE['email'];
$cat=$_GET['cat'];
$bc=$_GET['bc'];
if(!isset($_COOKIE['cmail'])){
  header("location:cvr.html");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
      $(document).ready(function(){
          $("#myModal").modal('show');
          $("#slide").slideUp(2000);
      });
  </script>
  <style>
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
.container {
  padding: 2rem 0rem;

}

h4 {
  margin: 2rem 0rem;
}

.panel {
  border-radius: 4px;
  padding: 1rem;
  margin-top: 0.2rem;
  background-color: #F5F5F5;
  color: #323B40;
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
.container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:25px;
}
@media only screen and (max-width: 600px) {
 .container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
}
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
  
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
html,body {
margin:0;
padding:0;
margin: 0px;
    padding: 0px;
width:100%;
    overflow-x:hidden;
}
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container" style='margin-left:45px;'>
      <div class="row">
      <?php
      if($bc=='new'){
$querys="SELECT * FROM package WHERE category='$cat' and bof='New Books' and quantity between 1 and 1000000 group by pnaam";
$lb=mysqli_query($conn,$querys);
while($row=mysqli_fetch_assoc($lb)){
      $title = $row['pnaam'];
      $price=$row['price'];
      $image=$row['pic'];
      $u="upload/";
      $f=$u.$image;
      $qu=$row['quantity'];
      $id=$row['sn'];
if($qu>0){
    echo "<div class='col-sm'>";
    echo "<a href=ps.php?book=".$row['sn'].">";
    echo "<img src=".$f.' width=280px height="280px">';
    echo "<h3>".$title. "</h3>";
    echo "<h4 style='color:green;'>(₹".$price.")</h4>";
    echo "</a>";
    echo "</div>";
}
  }
      }
      else{
        $querys="SELECT * FROM package WHERE category='$cat' and bof='Old Books' and quantity between 1 and 1000000 group by pnaam";
$lb=mysqli_query($conn,$querys);
while($row=mysqli_fetch_assoc($lb)){
      $title = $row['pnaam'];
      $price=$row['price'];
      $image=$row['pic'];
      $u="upload/";
      $f=$u.$image;
      $qu=$row['quantity'];
      $id=$row['sn'];
if($qu>0){
    echo "<div class='col-sm'>";
    echo "<a href=ps.php?book=".$row['sn'].">";
    echo "<img src=".$f.' width=280px height="280px">';
    echo "<h3>".$title. "</h3>";
    echo "<h4 style='color:green;'>(₹".$price.")</h4>";
    echo "</a>";
    echo "</div>";
}
  }
      }
?>
  </div>
</div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>