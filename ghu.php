<?php
include 'connection.php';
$email=$_COOKIE['email'];
$cat=$_GET['cat'];
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
<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">looking for: </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
              
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <a href="cate.php?bc=new&cat=<?php echo $cat;?>">
                         <img src="nb.jpeg" style='border-radius: 50px;  background: none; left: 500px;  display:block;
                         margin:auto;
                          border: none;' alt="..." class="img-thumbnail">
                          </a>
                          <h3 class="text-center">New Books</h3>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                          <a href="cate.php?bc=old&cat=<?php echo $cat;?>"><img src="ob.png" style='border-radius: 50px;  background: none;  display:block;
                            margin:auto;
                          border: none;' alt="..." class="img-thumbnail"></a>
                           <h3 class="text-center">Old books</h3>
                        </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>