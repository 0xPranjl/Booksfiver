
<?php
ob_start();
include 'connection.php';
$category=$_GET['cat'];
$image1=$_GET['img'];
$email=$_COOKIE['email'];
$title=$_GET['title'];
$quantity=$_GET['quantity'];
$price=$_GET['price'];
$quera="INSERT INTO product_info(sn,title,quantity,category,price,Image_link1,Image_link2,Image_link3,Seller_email)
VALUES (NULL,'$title','$quantity','$category','$price','$image1','0','0','$email')";
mysqli_query($conn,$quera);
header("location:book.php");
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

       <script type="text/javascript">
    $(window).on('load', function() {
      $('#myModal').modal({backdrop: 'static', keyboard: false})  
        $('#myModal').modal('show');
    });
    $('#cats').value
</script>
 
   <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    document.getElementById("quantity").style.visibility = "visible";
    return;
  }
  else{
    document.getElementById("quantity").style.visibility = "hidden";
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","action.php?key="+str,true);
  xmlhttp.send();
}
function getState(){
var cats= document.getElementById("cats").value;
document.getElementsByClassName("container").style.display='none';
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("bookn").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "booktitle.php?q=" + str, true);
    xmlhttp.send();
}
</script>
  <style>
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
body{
  background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(234,41,41,1) 50%, rgba(255,87,23,1) 74%, rgba(252,176,69,1) 100%);

86}
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
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
  
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
      <br><br>
</div>
                     
</div>
</div>
    <div class="container">
     
    </div>
    
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add new Book</h5>
            
            
          </div>
                  
    <div class='form-group'>
          <form action='upload_b.php' method='post' enctype="multipart/form-data" onsubmit="return validateForm()">
              <label  style='margin-left:10px;'>Book name</label>
              <select class="form-control" onChange="getState()" name='category' id="cats">
      <?php 
      $quora="SELECT DISTINCT title FROM product_info WHERE category='$category'";
      $rel=mysqli_query($conn,$quora);
      while($row=mysqli_fetch_assoc($rel)){
          echo "<option>".$row['title']."</option>";
      }
      ?>
      <option>other</option>
    </select>
</div>
<div class="form-group">
    <input type="number" name="quantity" class="form-control" placeholder='Quantity' id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <input type="number" name="price" class="form-control" placeholder='Set Price per book' id="exampleFormControlFile1">
    <small id="emailHelp" class="form-text text-muted">You will get 75% of the price you set</small>
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
        
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Add Book</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
