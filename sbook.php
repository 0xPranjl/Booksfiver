<?php
include 'connection.php';
    $key=$_GET['key'];
    $array = array();
    $query=mysqli_query($conn, "select * from product_info where title LIKE '%{$key}%'");
    if(mysqli_num_rows($query)>0){
     echo "<table class='table table-hover table-dark' id='getter'>
      <tbody>";
      while($row=mysqli_fetch_assoc($query))
    {
      $arra= $row['title'];
  
   echo
     " <tr>
        <td class='pd-name'>"."<a href='#?book=".$arra."'>".$arra."</a>"."</td>
      </tr>";
   
  }
  echo "</tbody>
  </table>";
  }
  else{
    echo "no Books Found";
  }
?>