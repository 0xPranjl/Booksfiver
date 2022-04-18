<?php
ob_start();
include 'connection.php';
$cat=$_POST['category'];
$email=$_COOKIE['email'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

       <script type="text/javascript">
    $(window).on('load', function() {
      $("#otitle").hide();
      $('#myModal').modal({backdrop: 'static', keyboard: false})  
        $('#myModal').modal('show');
        $("select.cats").change(function(){
        var vula = $(this).children("option:selected").val();
        if(vula==="other"){
          $("#otitle").show();
        }
    });
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
#stat{
  display:block;

}
body{


}
#imageprev{
  width: 340px;
        height: 670px;
       
}
.container {
  padding: 2rem 0rem;

}
.foto{
  width:70%;

}
h4 {
  margin: 2rem 0rem;
}
.cento{
  display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
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
#my_camera{
        width: 340px;
        height: 670px;
       
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
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}
.floatr{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:260px;
	background-color:red;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}
    </style>
      <br><br>
          <form action='' method='post' enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class='form-group'>
<label for="firstimg">
<i class="	fa fa-file-image-o" width="100" height="100" style="font-size: 24px;border: 1px solid black; cursor: pointer;">
    </label>

<input type="file" name="" id="firstimg" style="display: none;visibility: none;" onchange="getImage(this.value);"
/>
  </div>
       
              <button type="submit" class="btn btn-success san">Add Book</button>
          </form>
        </div>
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
