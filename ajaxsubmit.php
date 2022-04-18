<?php
include 'connection.php';
if(isset($_GET['name'])){
$naam=$_GET['name'];
$email=$_GET['email'];
$cookie_name = "email";
setcookie($cookie_name, $email, time() + (86400 * 360), "/");
}
else{
  $email=$_COOKIE['email'];
}
$query1="SELECT * FROM Seller_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
$pos=mysqli_fetch_assoc($rtu);
if(mysqli_num_rows($rtu)>0){
$naam=$pos['naam'];
}
else{
$query = "INSERT into Seller_info(sn,naam,email,numbe,Addres,Passwor) values (NULL,'$naam', '$email', 'null','null','null')";
mysqli_query($conn,$query);
 $query1="SELECT * FROM Seller_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
$takla=mysqli_fetch_assoc($rtu);
  $decider=$takla['numbe'];
if($decider=='null'){
    header("location:telegram.php?email=$email");
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
.wrapper {
  display: flex;
  align-items: center;
  top: 50px;
  left: 15px;
}

.typing-demo {
  width: 22ch;
  animation: typing 2.5s steps(22), blink .5s step-end infinite alternate;
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
.wrapper1 {
  display: flex;
  align-items: center;
  top: -100px;
  left: 15px;
}


.typing-demo1 {
  width: 22ch;
  animation: typing 2.5s steps(22), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 2em;
}

@keyframes typing1 {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
  }
}
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="fullscreen-bg" id='mu'>
    <video muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="dash.mp4" type="video/mp4">
    </video>
    <div class="wrapper text-center">
    <div class="typing-demo">
    <h4>BooksFiver Dashboard</h4><br>
    </div>
</div>
</div>

  <div class="wrapper" id='1s'>
    <div class="typing-demo">
    <h4>Hello, <?php echo $naam;?></h4><br>
    </div>
</div>
      <!-- Modal -->
      <br><br>
                    <div class="container" id='2s'>
                      <div class="row">
                        <div class="col">
                            <div class="text-center">
                        <a href='sorderbook.php'><img src="ord.png" style='border-radius: 50px;  background: none;
                          border: none;'  alt="..." class="img-thumbnail"></a>
                          <h3 class="text-center">Order Book</h3>
</div>
                        </div>
                     
                        <div class="col">
                        <div class="text-center">
                          <a href='book.php?naam=<?php echo $naam;?>&email=<?php echo $naam;?>'><img src="book.png" style='border-radius: 50px;  background: none;
                          border: none;' alt="..." class="img-thumbnail"></a>
                           <h3 class="text-center">My Books</h3>
                        </div>
</div>
                  
                        <div class="col">
                        <div class="text-center">
                          <a href='reindex.php'><img src="payment.jpeg" style='border-radius: 50px;  background: none;
                          border: none;' alt="..." class="img-thumbnail"></a>
                           <h3 class="text-center">Payments</h3>
                        </div>
</div>
</div>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id='3s'>
     
    </div>
    
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Create Seller Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action='ajaxsubmit.php' method='post'>
            <div class="modal-body">
              <div class="form-group">
                   <input type="text" name="naam" class="form-control" id="naam" aria-describedby="emailHelp" placeholder="Enter Name"></div>
               <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
              </div>
                   <div class="form-group">
                   <input type="number" name="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter Phone number"></div>
              <div class="form-group">
                   <input type="text" name="Address" class="form-control" id="Address" aria-describedby="emailHelp" placeholder="Enter Address"></div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </form>
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
  $(document).ready(function(){
    $('#1s').hide();
    $('#2s').hide();
    $('#3s').hide();
    $('#mu').show();
  });
  setTimeout(() => {
    $('#mu').hide();
    $('#1s').show();
    $('#2s').show();
    $('#3s').show();
  },4000);
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>