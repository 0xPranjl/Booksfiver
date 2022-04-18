<?php
include 'connection.php';  
$sn=$_POST['sn'];
$w="SELECT * FROM listprice";
$w1=mysqli_query($conn,$w);
echo '<table class="table table-hover table-dark">
<thead>
  <tr>
    <th scope="col">Book name</th>
    <th scope="col">weight</th>
    <th scope="col">price</th>
  </tr>
</thead>
<tbody>';
while($row=mysqli_fetch_assoc($w1)){
    $naam=$row['book'];
    $wgt=$row['weighto'];
    $prz=$row['fullprice'];
    echo  "<tr>";
    echo "<td>".$naam."</a></td>"; 
    echo "<td>".$wgt."</a></td>";
    echo "<td>".$prz."</a></td>";
    echo "</tr>";

}
?>