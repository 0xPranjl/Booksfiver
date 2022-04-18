<?php
 include 'connection.php';
 $pnaam=$_GET['pnaam'];
 $email=$_COOKIE['email'];
 $q1="SELECT naam FROM Seller_info where email='$email'";
 $r1=mysqli_query($conn,$q1);
 $r2=mysqli_fetch_assoc($r1);
 $naam=$r2['naam'];
 $q2="SELECT * FROM package where pnaam='$pnaam' limit 1";
 $x=mysqli_query($conn,$q2);
 $x1=mysqli_fetch_assoc($x);
 $bof=$x1['bof'];
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
.has-badge {
	position: relative;
	display: inline-block;
	overflow: hidden;
}

.badge-overlay {
	position: absolute;
	top: 0;
	left: 0;
	
	&.triangle {
		color: yellow;
		font-weight: bold;
		
		&:before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			border: 20px solid red;
			border-right-color: transparent;
			border-bottom-color: transparent;
		}
		
		&:after {
			content: 'H';
			position: absolute;
			top: 0px;
			left: 5px;
		}
	}
	
	&.circle {
		background-color: red;
		color: yellow;
		font-weight: bold;
		border-radius: 25px;
		padding: 5px 10px;
		position: absolute;
		left: 5px;
		bottom: 5px;
		top: auto;
	}
	
	&.square {
		background-color: red;
		color: yellow;
		font-weight: bold;
		padding: 5px 10px;
		position: absolute;
		left: auto;
		right: 5px;
		bottom: 5px;
		top: auto;
	}
	
	&.strip {
		position: absolute;
		top: 5px;
		left: -30px;
		background-color: red;
		color: yellow;
		font-weight: bold;
		padding: 2px 40px;
		transform: rotate(-45deg);
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
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>

  <div class="wrapper" id='1s'>
    <div class="typing-demo">
    <h4>Hello, <?php echo $naam;?></h4><br>
    </div>
</div>
      <!-- Modal -->
      <br><br>
      <h1 id='sn10' class='<?php echo $bof;?>' hidden>jfr</h1>
      <div class='col'>
                        <div class="text-center">
        <a href="book.php"><button type="button" id='zi' class="btn btn-danger">Done</button>
</a>
</div>
</div>
      <div class='container'>
    
      <div class='col' id='offer'>
  <?php 
  $query1="SELECT * FROM product_info WHERE Seller_email='$email' and quantity between 1 and 1000000";
$res=mysqli_query($conn,$query1);
if(mysqli_num_rows($res)>0){
  echo '<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col" class="quantity">quantity</th>
      <th scope="col">price</th>
      <th scope="col" class="adder">Adder</th>
    </tr>
  </thead>
  <tbody>';
  while($row=mysqli_fetch_assoc($res)){
      $title = $row['title'];
      $quantity = $row['quantity'];
      $price=$row['price'];
      $image=$row['Image_link1'];
      $u="upload/";
      $f=$u.$image;
      $sno=$row['sn'];
      $def=$row['Image_link3'];
      if($def=='0'){
        if(is_numeric($price)==1){
        echo  "<tr style='color:blue'>";
        echo "<td>"."<div class='has-badge'><img src=".$f.' width=100px height="100px">'."<span class='badge-overlay strip' style='color:orange; font-style:bold;'>New>></span></td>";
        echo "<td>".$title."</td>";
        echo"<td class='quan'>".$quantity."</td>"; 
        echo "<td>".$price."</td>"; 
        echo "<td><button type='button' class='adb' id=".$sno." value=".$sno." name='New Books' >Add</button></td>"; 
        echo "</tr>";
        }
        else{
          echo  "<tr style='color:red'>";
          echo "<td>"."<div class='has-badge'><img src=".$f.' width=100px height="100px">'."<span class='badge-overlay strip' style='color:orange; font-style:bold;'>New>></span></td>";
          echo "<td>".$title."</td>";
          echo"<td class='quan'>".$quantity."</td>"; 
          echo "<td>".$price."</td>"; 
          echo "<td><button type='button' class='adb' id=".$sno." value=".$sno." name='New Books' >Add</button></td>"; 
          echo "</tr>";
        }
      }
      else{
        if(is_numeric($price)==1){
          echo  "<tr style='color:blue'>";
          echo "<td>"."<img src=".$f.' width=100px height="100px">'."</td>";
          echo "<td>".$title."</td>";
          echo"<td class='quan'>".$quantity."</td>"; 
          echo "<td id='elon' class=".$pnaam.">".$price."</td>"; 
          echo "<td><button type='button' class='adb' id=".$sno." value=".$sno." name='Old Books' >Add</button></td>"; 
          echo "</tr>";


        }
        else{
      echo  "<tr style='color:red'>";
      echo "<td>"."<img src=".$f.' width=100px height="100px">'."</td>";
      echo "<td>".$title."</td>";
      echo"<td class='quan'>".$quantity."</td>"; 
      echo "<td id='elon' class=".$pnaam.">".$price."</td>"; 
      echo "<td><button type='button' class='adb' id=".$sno." value=".$sno." name='Old Books' >Add</button></td>"; 
      echo "</tr>";
      }
    }
  }
}
 ?>
 </div>
</div>
     


  <script type="text/javascript">
    $(window).on('load', function() {
      $(".adb").css('background-color','green');
        $('#myModal').modal('show');
        $("#zi").hide();
    });
</script>
<script>
   $(".adb").click(function(){
    var dec=$(this).html();
      $("#zi").show();
    if(dec==='delete'){
      var ido=$(this).attr('id');
      var dat=$(this).attr('value');
      $("#"+ido).css('background-color','green');
      $.ajax({
       url:'deletepe.php',
       type:'POST',
       data:{sn:ido,pnaam:dat},
       success:function(){
        $("#"+ido).html("Add");
       }

      });
    }
else{
  var snno=$(this).attr('value');
  var iddo=$(this).attr('id');
  var bd=$(this).attr('name');
   var sd=$('#sn10').attr('class');
   var musk=$('#elon').attr('class');
  if(bd===sd){
  $.ajax({
  url:'fus.php',
  type:'POST',
  data:{sn:iddo,bookid:musk},
  success:function(data){
    if(data==='Already exists'){
      alert('already exists');
    }
    if(data==='pagalp'){
      alert('Insufficient number of book');
    }
    else if(data==='No files in the Package'){
    alert('Package is Empty create New');
    window.location.replace("book.php");    
    }
    else{
      $("#"+iddo).css('background-color','red');
    $("#"+iddo).html("delete");
    }
  }
  });
}
else{
  alert("Choose "+sd+" only");
}
}
  });
  </script>
  <script>

// code to read selected table row cell data (values).
$('.pd-name').click(function(e) {
  var tdText = $('tr.select').find('td:first-child').text();
    alert(tdText);
 });

    </script>
    <script>
      $("#pshow").click(function(){
        $('#offer').hide();
      $.ajax({
        url:"pshow.php",
        type:"POST",
        data:{sn:"cn"},
        success:function(data){
          $('#offer').show();
          $('#offer').html(data);
    
        }
      })
      });
      </script>
    <script>
      $(document).ready(function(){
        $('.quantity').hide();
        $('.quan').hide();
       $("#chango").hide();
      });
      $("#pkg").click(function(){
        $('.quantity').hide();
        $('.quan').hide();
        $("#chango").show();
        $("#chango1").hide();
       $('.adder').show();
       $(".adb").show();
      });
      $("#chango").click(function(){
        $('.adder').hide();
       $(".adb").hide();
       $("#chango1").show();
       $("#chango").hide();
       $.ajax({
       url:"delt.php",
       type:"POST",
       data:{d:"m"}
    });
      });
      </script>
     <script>
         $(".cut").click(function(){
           var se=$(this).attr('value');
    //    $.ajax({
    //    url:"cut.php",
    //    type:"POST",
    //    data:{d:se}
    // });
      });
       </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>