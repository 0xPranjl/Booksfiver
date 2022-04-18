<?php
include 'connection.php';
    $q=$_GET['q'];
    $query=mysqli_query($conn,'SELECT * From product_info');
    if(mysqli_num_rows($query)>0){

      while($row=mysqli_fetch_assoc($query))
    {
   
echo "<option>".$row['title']."</option>";
    }
}
   
?>