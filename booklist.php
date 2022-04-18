<?php
include 'connection.php';
$book=$_GET['book'];
$email=$_COOKIE['email'];

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
  xmlhttp.open("GET","sbook.php?key="+str,true);
  xmlhttp.send();
}
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
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BooksFiver</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
      </nav>
      <h4>Hello, <?php echo $email;?></h4>
      <!-- Modal -->
      <br><br>
      <div class='container'>
      <div class='col'>
  <?php 
  include 'connection.php';
  $query1="SELECT * FROM product_info WHERE Seller_email='$email'";
$res=mysqli_query($conn,$query1);
if(mysqli_num_rows($res)>0){
  echo '<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>';
  while($row=mysqli_fetch_assoc($res)){
      $title = $row['title'];
      $quantity = $row['quantity'];
      $price=$row['price'];
      $image=$row['Image_link1'];
      $u="uploads/";
      $f=$u.$image;
      echo  "<tr>";
      echo "<td>"."<img src=".$f.' width=100px height="100px">'."</td>";
      echo "<td>".$title."</td>";
      echo"<td>".$quantity."</td>"; 
      echo "<td>".$price."</td>"; 
      echo "</tr>";

  }
}
 ?>
 </div>
</div>
                  <div class="container">
                      <div class="row">
                        <div class="col">
                            <div class="text-center">
                         <img src="plus.png" style='border-radius: 50px;  background: none;
                          border: none;' style="height:80px; width:80px;" data-toggle="modal" data-target="#form" alt="..." class="img-thumbnail">
                          <h4 class="text-center">Add new Book to sell</h4>
</div>
                        </div>
                     
</div>
</div>
    <div class="container">
     
    
    <div class="modal fade" id="myModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add new Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action='upload_book.php' method='post' enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="modal-body">
              <div class="form-group">
                   <input type="text" value='<?php echo $book ?>' onkeyup="showResult(this.value)" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Book Title"></div>
                   <div id="livesearch"></div>
                   <div class="form-group">
                <input type="number" name="quantity" class="form-control" id="quantity" aria-describedby="emailHelp" placeholder="quantity">
              </div>
        
              <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select class="form-control" name='category' id="exampleFormControlSelect1">
      <option>CLASS 9</option>
      <option>CLASS 10</option>
      <option>CLASS 11</option>
      <option>CLASS 12</option>
      <option>JEE</option>
      <option>NEET</option>
      <option>UPSC</option>
      <option>SSC</option>
      <option>OTHER</option>
    </select>
</div>
<div class="container">
  <div class="row">
    <div class='col'>
    <div class="form-group">
                <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Price">
                <small id="emailHelp" class="form-text text-muted">You will get 80% of price you set example if you set 300 then you will get 240</small>  
            </div>
                   <div class="form-group">
    <label for="exampleFormControlFile1">upload Book image1</label>
    <input type="file" name="image1" class="form-control-file" id="exampleFormControlFile1">
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
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Add Book</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $("#submit").click(function(){
  var name = $("#naam").val();
  var email = $("#email").val();
  var number= $("#number").val();
  var password = $("#password").val();
  var Address = $("#Address").val();
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'naam='+ name + '&email='+ email + '&password='+ password + '&Address='+ Address +'&number='+ number;
  if(name==''||email==''||password==''||number==''||Address=='')
  {
  alert("Please Fill All Fields");
  }
  else
  {
  // AJAX Code To Submit Form.
  $.ajax({
  type: "POST",
  url: "ajaxsubmit.php",
  data: dataString,
  cache: false,
  success: function(result){
  alert(result);
  }
  });
  }
  return false;
  });
  });
</script>  
<script>
    validateForm = () => {
        const fi = document.getElementById('bv');
        var fileInput = 
                document.getElementById('bv');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.mp4|\.mkv|\.avi|\.gif)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Upload video Format');
                fileInput.value = '';
                return false;
                document.getElementById("vwarn").innerHTML = "Upload valid Book Condition video";
            } 
           
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                  alert("Maximum video size is 4Mb only");
                      return false;
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>
  <script>
    $(document).ready(function(){
    $('input.title').typeahead({
        name: 'typeahead',
        remote:'sbook.php?key=%QUERY',
        limit : 10
    });
});
  </script> 
  <script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
  <script>

// code to read selected table row cell data (values).
$('.pd-name').click(function(e) {
  var tdText = $('tr.select').find('td:first-child').text();
    alert(tdText);
 });

    </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>