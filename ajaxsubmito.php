<?php
include 'connection.php';
  $email=$_COOKIE['cmail'];
 $query1="SELECT * FROM customer_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
$takla=mysqli_fetch_assoc($rtu);
  $decider=$takla['numbe'];
  $naam=$takla['naam'];
if($decider=='null'){
    header("location:lotelegram.php?email=$email");
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
  <div class="wrapper">
    <div class="typing-demo">
    <h4>Hello, <?php echo $naam;?></h4><br>
    </div>
</div>
      <!-- Modal -->
      <br><br>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                            <div class="text-center">
                        <a href='orderbook.php'><img src="ord.png" style='border-radius: 50px;  background: none;
                          border: none;'  alt="..." class="img-thumbnail"></a>
                          <h3 class="text-center">Order Book</h3>
</div>

</div>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
     
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>