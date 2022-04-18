<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jsm.js"></script> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body>
  <form style='padding:50px;' id='fastly'>
  <div class="form-group">
    <input type="text" class="form-control" name='book' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="book name">
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
    <input type="text" name='fprice'   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="original price">
  </div>
<div class="form-group">
    <input type="text" name='weight'   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="weight in kg(like 1.5kg)">
  </div>
</form>
<div class='text-center'>
<button id='clk' class="btn btn-primary">Submit</button>
<br><br><br>
<div id='ono' class='text-center'>
</div>
</div>
<script>
$("#clk").click(function(){
$.ajax({
url:'msaver.php',
type:'POST',
data:$("#fastly").serialize(),
success:function(data){
  alert(data);
  $("#fastly").trigger('reset');
}
});
$.ajax({
url:'ptable.php',
type:'POST',
data:{sn:'nsf'},
success:function(data){
  $("#ono").html(data);

}
});
});
    </script>
        <script src="jsm.js"></script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>