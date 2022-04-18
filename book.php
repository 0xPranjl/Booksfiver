<?php
include 'connection.php';
if(!isset($_COOKIE['email'])){
  header("location:pandu.html");
}
$book=$_GET['book'];
$email=$_COOKIE['email'];
$q1="SELECT naam FROM Seller_info where email='$email'";
$r1=mysqli_query($conn,$q1);
$r2=mysqli_fetch_assoc($r1);
$naam=$r2['naam'];

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
  <script>
    $('#fop').modal({
    backdrop: 'static',
    keyboard: false
})
    </script>
    <title>Hello, world!</title>
    
  </head>
  <body>

  <div class="wrapper" id='1s'>
    <div class="typing-demo">
    <h4>Hello, <?php echo $naam;?></h4><br>
    </div>
</div>
      <br><br>
      <div class='container'>
    
      <div class='col' id='offer'>
  <?php 
  include 'connection.php';
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
        echo  "<tr>";
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
          echo  "<tr>";
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
                  <div class="container">
                      <div class="row">
                        <div class="col">
                          <h1><?php echo $book;?></h1>
                            <div class="text-center">
                         <img src="plus.png" style='border-radius: 50px;  background: none;
                          border: none;' style="height:80px; width:80px;" data-toggle="modal" data-target="#myModel" alt="..." class="img-thumbnail">
                          <h4 class="text-center">Add new Book to sell</h4>
</div>
                        </div>
</div>
                        <div class="row">
                        <div class="col">
                        <div class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="chango1" data-target="#formt">Create Package</button>
                        <button type="button" class="btn btn-danger"  id='chango' data-toggle='modal' data-target='#fop' >Done</button>
</div></div>
                        <div class='col'>
                        <div class="text-center">
        <button type="button" class="btn btn-danger"  id='pshow' >Show Packages</button>
          
</div>
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
          <form action='upload_book.php' method='post' id='form' >
              <div class="form-group">
              <label for="exampleFormControlSelect1" style='left:10px;'>Category</label>
              <select class="form-control" onChange="getState()" name='category' id="cats">
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
<div class="form-group">
              <label for="exampleFormControlSelect1" style='left:10px;'>Book State</label>
              <select class="form-control"  name='bs' id="bs">
      <option>Old Book</option>
      <option>New Book</option>
    </select>
</div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Add Book</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="formt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Create Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div class="form-group">
            <form id='foto' method='post' enctype="multipart/form-data">
            <input type="text" required class="form-control" name='naam'  id="pn" aria-describedby="emailHelp" placeholder="Package name"> 
        </div>
        <div class="form-group">
              <label for="exampleFormControlSelect1" style='left:10px;'>Category</label>
              <select class="form-control" name='category' id="rats">
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
<div class="form-group">
            <input type="number" required class="form-control" name='qua'  id="qua" aria-describedby="emailHelp" placeholder="quantity"> 
        </div>
<div class="form-group">
              <label for="exampleFormControlSelect1" style='left:10px;'>Package of:</label>
              <select class="form-control" name='bof' id="bof">
      <option>New Books</option>
      <option>Old Books</option>
    </select>
    <div class='form-group'>
    <input type='button' value='submit' id='pkg'/>
</div>
  </div>
<div class="modal fade" id="fop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Upload Package thumbnail</h5>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
        </div>
        </button>
      </div>       
<div class="modal-footer border-top-0 d-flex justify-content-center">
        </div>
      </form>
      <form method='post' action="pt.php" enctype="multipart/form-data">
        <div class="modal-body">
         <div class='form-group'>
          <div class='form-group'>
   
        <input type="file" name="fileToUpload" id="fileToUpload" accept='image/*'>
</div>
          </div>
        <div class='form-group'>
          <button type="submit" id='pkg' class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
       <h1 id='sn10' class='' hidden>jfr</h1>
       <h1 id='dp' hidden>kzxidhisdi</h1>
    </div>
  </div>
</div>
<script>
 $(".adb").click(function(){
    var dec=$(this).html();
         var sd=$('#sn10').attr('class');
         var snno=$(this).attr('value');
  var iddo=$(this).attr('id');
  var bd=$(this).attr('name');
    if(dec==='delete'){
      var ido=$(this).attr('id');
      var dat=$(".adb").attr('value');
      var bko=$("#dp").attr('class');
      $("#"+ido).css('background-color','green');
      $.ajax({
       url:'deletep.php',
       type:'POST',
       data:{sn:ido,bk:bko},
       success:function(){
        $("#"+ido).html("Add");
       }

      });
    }
else{
  var snno=$(this).attr('value');
  var iddo=$(this).attr('id');
  var bd=$(this).attr('name');
  var tr=$('#dp').attr('class');
   var sd=$('#sn10').attr('class');
  if(bd===sd){
  $.ajax({
  url:'pu.php',
  type:'POST',
  data:{sn:snno,bof:sd},
  success:function(data){
    if(data==='pagal'){
      alert('insufficient number of book');
    }
    else{
    $("#"+iddo).css('background-color','red');
    $("#"+iddo).html("delete");
  }
  }
  });
}
else{
  alert("Choose "+bd+" only");
}
}
  });   





  </script>
<script>
    $("#pkg").click(function(){
      $('#formt').modal('hide');
    $.ajax({
       url:"psave.php",
       type:"POST",
       data:$("#foto").serialize(),
       success:function(data){
        var myArr = data.split('-');
        var cl=myArr[0];
        var ml=myArr[1];
        $('#sn10').removeClass();
         $('#sn10').addClass(cl);
       $('#dp').addClass(ml);
       var sp=$('#dp').attr('class');
       }
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
  <script type="text/javascript">
    $(window).on('load', function() {
      $(".adb").css('background-color','green');
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
        $('.adder').hide();
       $(".adb").hide();
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
       $("#fop").prependTo("body");
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