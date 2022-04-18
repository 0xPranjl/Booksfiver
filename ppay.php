<?php
include 'connection.php';
$idm=$_GET['sn'];
$email=$_COOKIE['email'];
$cmail=$_COOKIE['cmail'];
$q1="SELECT * FROM customer_info where email='$cmail'";
$r=mysqli_query($conn,$q1);
$r1=mysqli_fetch_assoc($r);
$add=$r1['addres'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jsm.js"></script>

    
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
.container-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container-checkbox input {
    position: relative;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.container-checkbox .checkmark {
    position: relative;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.container-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}


/* The container */
.container-radio {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container-radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.container-radio .checkmark {
    position: absolute;
    left: auto;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container-radio:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container-radio input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.container-radio .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container-radio input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container-radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
body {
  text-align: center;
  background: #ebf4fb;
  min-height: 95vh;
  margin: 0;
  padding: 0;
  font-family: "Myriad Pro", "Arial", sans;
  font-size: 24px;
}

.dropdown-el {
  margin-top: 5vh;
  margin-bottom:150px;
  min-width: 12em;
  position: relative;
  display: inline-block;
  margin-right: 1em;
  min-height: 2em;
  max-height: 2em;
  overflow: hidden;
  top: 0.5em;
  cursor: pointer;
  text-align: left;
  white-space: nowrap;
  color: #444;
  outline: none;
  border: 0.06em solid transparent;
  border-radius: 1em;
  background-color: #cde4f5;
  transition: 0.3s all ease-in-out;
}
.dropdown-el input:focus + label {
  background: #def;
}
.dropdown-el input {
  width: 1px;
  height: 1px;
  display: inline-block;
  position: absolute;
  opacity: 0.01;
}
.dropdown-el label {
  border-top: 0.06em solid #d9d9d9;
  display: block;
  height: 2em;
  line-height: 2em;
  padding-left: 1em;
  padding-right: 3em;
  cursor: pointer;
  position: relative;
  transition: 0.3s color ease-in-out;
}
.dropdown-el label:nth-child(2) {
  margin-top: 2em;
  border-top: 0.06em solid #d9d9d9;
}
.dropdown-el input:checked + label {
  display: block;
  border-top: none;
  position: absolute;
  top: 0;
  width: 100%;
}
.dropdown-el input:checked + label:nth-child(2) {
  margin-top: 0;
  position: relative;
}
.dropdown-el::after {
  content: "";
  position: absolute;
  right: 0.8em;
  top: 0.9em;
  border: 0.3em solid #3694d7;
  border-color: #3694d7 transparent transparent transparent;
  transition: 0.4s all ease-in-out;
}
.dropdown-el.expanded {
  border: 0.06em solid #3694d7;
  background: #fff;
  border-radius: 0.25em;
  padding: 0;
  box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 5px 0px;
  max-height: 15em;
}
.dropdown-el.expanded label {
  border-top: 0.06em solid #d9d9d9;
}
.dropdown-el.expanded label:hover {
  color: #3694d7;
}
.dropdown-el.expanded input:checked + label {
  color: #3694d7;
}
.dropdown-el.expanded::after {
  transform: rotate(-180deg);
  top: 0.55em;
}
.container {
  width: 100vw;
  height: 100vh;
  top: -100px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.button {
  width: 300px;
  height: 60px;
  border-radius: 30px;
  background-color: black;
  marging: 0 auto;
  z-index: 0;
  display: flex;
  cursor: pointer;
  padding: 15px;
}
.text {
  z-index: 1;
  color: white;
  font-size: 30px;
  margin: auto;
  text-decoration: none;
}
#anim {
  display: none;
}
#anim:target {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 100%;
  position: relative;
  background-color: black;
  overflow-x: hidden;
}
#anim:target + a {
  display: none;
}
#anim:target > .path {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  position: relative;
  position: absolute;
  left: 200%;
  width: 50%;
  height: 100%;
  background-color: black;
  -webkit-animation: linear alternate;
  -webkit-animation-name: path;
  -webkit-animation-duration: 4s;
  -webkit-animation-delay: 3s;
}
#anim:target > .path > .stripes {
  width: 15px;
  height: 5px;
  background-color: white;
  display: inline;
  margin-right: 7px;
  overflow-x: auto;
}
#anim:target> .Package {
  width: 30px;
  height: 30px;
  background-color: orange;
  align-self: center;
  -webkit-box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  -moz-box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  position: relative;
  z-index: 400;
  right: 200%;
  position: absolute;
  -webkit-animation: linear alternate;
  -webkit-animation-name: pack;
  -webkit-animation-duration: 5s;
}
#anim:target > .Car {
  width: 60%;
  height: 100%;
  display: flex;
  align-items: center;
  background-color: black;
  position: relative;
  -webkit-box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  -moz-box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  box-shadow: -3px -5px 9px 0px rgba(56, 54, 45, 1);
  z-index: 500;
  position: absolute;
  left: 200%;
  -webkit-animation: ease-in-out alternate;
  -webkit-animation-name: example;
  -webkit-animation-duration: 5s;
}
#anim:target > .Car > .busBack {
  width: 40%;
  height: 100%;
  background-color: yellow;
}
#anim:target > .Car > .busFront {
  display: flex;
  align-items: center;
  height: 100%;
  width: 60%;
}
#anim:target > .Car > .busFront > .busFrontMain {
  border: 1px solid brown;
  border-bottom: 50px solid brown;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  transform: rotate(90deg);
  height: 0;
  width: 30px;
}

#anim:target > .Car > .busFront > .topLight {
  border-bottom: 50px solid yellow;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  transform: rotate(270deg);
  height: 0;
  top: 0;
  right: 0;
  opacity: 0;
  position: relative;
  position: absolute;
  width: 1px;
  visibility: visible;
  opacity: 1;
  -webkit-animation: ease-in alternate;
  -webkit-animation-name: light;
  -webkit-animation-duration: 5s;
}
#anim:target > .Car > .busFront > .bottomLight {
  border-bottom: 50px solid yellow;
  opacity: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  transform: rotate(270deg);
  height: 0;
  bottom: 0;
  right: 0;
  position: relative;
  position: absolute;
  width: 1px;
  -webkit-animation: ease-in alternate;
  -webkit-animation-name: light;
  -webkit-animation-duration: 5s;
}
@-webkit-keyframes example {
  0% {
    left: 200%;
  }
  30% {
    left: 10%;
  }
  40% {
    left: 10%;
  }
  100% {
    left: 200%;
  }
}
@-webkit-keyframes path {
  0% {
    left: 50%;
  }
  20% {
    left: 0;
  }
  100% {
    left: 200%;
  }
}
@-webkit-keyframes pack {
  0% {
    right: 70%;
  }
  30% {
    left: 0;
  }
  40% {
    left: 15%;
  }
  100% {
    left: 200%;
  }
}
@-webkit-keyframes light {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
#anim:target > .final {
  text-align: center;
  position: relative;
  z-index: -700;
  color: white;
  font-size: 30px;
  margin: auto;
  text-decoration: none;
  -webkit-animation: linear alternate;
  -webkit-animation-name: final;
  -webkit-animation-fill-mode: forwards;
  -webkit-animation-delay: 1s;
  -webkit-animation-duration: 10s;
}
@-webkit-keyframes final {
  0% {
    z-index: -700;
  }
  100% {
    z-index: 700;
  }
}a {
  text-decoration: none;
}

.-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 216px;
  height: 56px;
  text-align: center;
  border-radius: 12px;
}

.-btn:hover {
  opacity: .8;
}

.-bg {
  background: #1c449b;
}

.-txt {
  color: #fff;
}

.-xs {
  font-size: 12px;
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
      <div class="container" style='margin-left:5px;'>
      <div class="row">
<?php
$q1="SELECT * FROM package WHERE sn='$idm'";
$reso=mysqli_query($conn,$q1);
while($rt=mysqli_fetch_assoc($reso)){
  $title=$rt['pnaam'];
  $price=$rt['price'];
  $product=$title;
  $image=$rt['pic'];
  $u="upload/";
  $f=$u.$image;
  echo "<div class='col-sm'>";
  echo "<a href=showp.php?book=".$idm.">";
  echo "<img src=".$f.' width=280px height="280px">';
  echo "<h3 id='dig' class=".$idm.">".$title."</h3>";
  echo "<h4 style='color:green; top:-10px;'>₹".$price."</h4>";
  echo "</a>";
  echo "</div>";
}
?>
  </div>
</div>
<div style='text-align:center;'>
<h1>Payment methods</h1>
<span class="dropdown-el">
    <input type="radio" name="sortType" value="Cod" checked="checked" id="sort-relevance"><label for="sort-relevance">Cash on Delivery</label>
    <input type="radio" name="sortType" value="Online" id="sort-best"><label for="sort-best">Online</label>
  </span>
</div>
<div class="container" style='margin-top: -250px; margin-left: -5px;'>
<div class="ub-text-card">
  <div class="ub-text-card__content">
    <h4>Address</h4>

    <p class="ub-text-card__text--small"></p>
    <p><?php echo $add; ?></p>
    <a href="addu.php?sn=<?php echo $idm;?>">Change Address</a></p>
  </div>
</div>  
</div>
<div class="container text-center" style='margin-top: -500px; margin-left: -10px;' >
  <a href="o2.php?sn=<?php echo $idm;?>" class="-btn -bg -txt"  id='popo'>Place order
</a>
</div>

<script>
$('.dropdown-el').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('expanded');
  $('#'+$(e.target).attr('for')).prop('checked',true);
});
$(document).click(function() {
  $('.dropdown-el').removeClass('expanded');
});
</script>
<script>
  $("#popo").click(function(){
   var se=$('#dig').attr('class');
   var d = new Date();
   var year=d.getTime();
   var date=d.getDate();
   var month=d.getMonth();
   var dt=date+'-'+month+'-'+year;
   $.ajax({
     url:"o1.php",
     type:"POST",
     data:{sn:se,dt:dt},
     success:function(data){

     }
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