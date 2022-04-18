<?php
ob_start();
include 'connection.php';
$cat=$_POST['category'];
$email=$_COOKIE['email'];
?>
<html>
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
</head>
<body>
    <style>
        .container {
  width: 200px;
  margin: 50px auto;
  font-family: sans-serif;
}
label {
  display: block;
  max-width: 200px;
  margin: 0 auto 15px;
  text-align: center;
  word-wrap: break-word;
  color: #1a4756;
}
.hidden,
#uploadImg:not(.hidden) + label {
  display: none;
  height: 150px;
  width:250px;
}
#file {
  display: none;
  margin: 0 auto;
}
#file1{
  display: none;
  margin: 0 auto;
}
#file2{
  display: none;
  margin: 0 auto;
}
#upload {
  display: block;
  padding: 10px 25px;
  border: 0;
  margin: 0 auto;
  font-size: 15px;
  letter-spacing: 0.05em;
  cursor: pointer;
  background: #216e69;
  color: #fff;
  outline: none;
  transition: 0.3s ease-in-out;
}
#upload:hover,
#upload:focus {
  background: #1AA39A;
}
#upload:active {
  background: #13D4C8;
  transition: 0.1s ease-in-out;
}
#upload2 {
  display: block;
  padding: 10px 25px;
  border: 0;
  margin: 0 auto;
  font-size: 15px;
  letter-spacing: 0.05em;
  cursor: pointer;
  background: #216e69;
  color: #fff;
  outline: none;
  transition: 0.3s ease-in-out;
}
#upload2:hover,
#upload2:focus {
  background: #1AA39A;
}
#upload2:active {
  background: #13D4C8;
  transition: 0.1s ease-in-out;
}

#uploadImg2:not(.hidden) + label {
  display: none;
}
#upload2 {
  display: block;
  padding: 10px 25px;
  border: 0;
  margin: 0 auto;
  font-size: 15px;
  letter-spacing: 0.05em;
  cursor: pointer;
  background: #216e69;
  color: #fff;
  outline: none;
  transition: 0.3s ease-in-out;
}
#upload2:hover,
#upload2:focus {
  background: #1AA39A;
}
#upload2:active {
  background: #13D4C8;
  transition: 0.1s ease-in-out;
}

#uploadImg2:not(.hidden) + label {
  display: none;
}
#upload2 {
  display: block;
  padding: 10px 25px;
  border: 0;
  margin: 0 auto;
  font-size: 15px;
  letter-spacing: 0.05em;
  cursor: pointer;
  background: #216e69;
  color: #fff;
  outline: none;
  transition: 0.3s ease-in-out;
}
#upload1:hover,
#upload1:focus {
  background: #1AA39A;
}
#upload1:active {
  background: #13D4C8;
  transition: 0.1s ease-in-out;
}

#uploadImg1:not(.hidden) + label {
  display: none;
}
#upload1 {
  display: block;
  padding: 10px 25px;
  border: 0;
  margin: 0 auto;
  font-size: 15px;
  letter-spacing: 0.05em;
  cursor: pointer;
  background: #216e69;
  color: #fff;
  outline: none;
  transition: 0.3s ease-in-out;
}
#upload1:hover,
#upload1:focus {
  background: #1AA39A;
}
#upload1:active {
  background: #13D4C8;
  transition: 0.1s ease-in-out;
}

#uploadImg1:not(.hidden) + label {
  display: none;
}

img {
  display: block;
  margin: 0 auto 15px;
}

        </style>
           <form action='bdetail.php?cat=<?php echo $cat;?>' method='post' enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
<div class="container1">
	<label class="label" for="input"></label>

	<div class="input">
		<input name="i1" id="file1" type="file" accept="image/*">
	</div>
</div>   
</div>
<div class="form-group">
<div class="container2">
	<label class="label" for="input"></label>

	<div class="input">
		<input name="i2" id="file2" type="file" accept="image/*">
	</div>
</div>   
</div>
<div class="form-group">
<div class="container">
	<label class="label" for="input">Upload max 10 second Book video!</label>

	<div class="input">
		<input name="v" id="file" type="file" capture accept="video/*">
	</div>
</div>   
</div>
<button type="submit" style='display:block; margin-left:43%;' class="btn btn-success san">Next</button>
</form>
<script>
  $(function(){
	var container = $('.container1'), inputFile = $('#file1'), img, btn, txt = 'Add Book Front Side Pic', txtAfter = 'Browse another pic';
			
	if(!container.find('#upload').length){
		container.find('.input').append('<input type="button" value="'+txt+'" id="upload1">');
		btn = $('#upload1');
		container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg1" width="100">');
		img = $('#uploadImg1');
	}
			
	btn.on('click', function(){
		img.animate({opacity: 0}, 300);
		inputFile.click();
	});

	inputFile.on('change', function(e){
		container.find('label').html( inputFile.val() );
		
		var i = 0;
		for(i; i < e.originalEvent.srcElement.files.length; i++) {
			var file = e.originalEvent.srcElement.files[i], 
				reader = new FileReader();

			reader.onloadend = function(){
				img.attr('src', reader.result).animate({opacity: 1}, 700);
			}
			reader.readAsDataURL(file);
			img.removeClass('hidden');
		}
		
		btn.val( txtAfter );
	});
});
$(function(){
	var container = $('.container2'), inputFile = $('#file2'), img, btn, txt = 'Add Book Back Side Pic', txtAfter = 'Browse another pic';
			
	if(!container.find('#upload').length){
		container.find('.input').append('<input type="button" value="'+txt+'" id="upload2">');
		btn = $('#upload2');
		container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg2" width="100">');
		img = $('#uploadImg2');
	}
			
	btn.on('click', function(){
		img.animate({opacity: 0}, 300);
		inputFile.click();
	});

	inputFile.on('change', function(e){
		container.find('label').html( inputFile.val() );
		
		var i = 0;
		for(i; i < e.originalEvent.srcElement.files.length; i++) {
			var file = e.originalEvent.srcElement.files[i], 
				reader = new FileReader();

			reader.onloadend = function(){
				img.attr('src', reader.result).animate({opacity: 1}, 700);
			}
			reader.readAsDataURL(file);
			img.removeClass('hidden');
		}
		
		btn.val( txtAfter );
	});
});
$(function(){
	var container = $('.container'), inputFile = $('#file'), img, btn, txt = 'Add Book Video', txtAfter = 'Retake';
			
	if(!container.find('#upload').length){
		container.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
		btn = $('#upload');
		container.prepend('<video src="" class="hidden" style="height:150px; width:250px;" alt="Uploaded file" id="uploadImg" controls></video>');
		img = $('#uploadImg');
	}
			
	btn.on('click', function(){
		img.animate({opacity: 0}, 300);
		inputFile.click();
	});

	inputFile.on('change', function(e){

		
		var i = 0;
		for(i; i < e.originalEvent.srcElement.files.length; i++) {
			var file = e.originalEvent.srcElement.files[i], 
				reader = new FileReader();

			reader.onloadend = function(){
                img.attr('src', reader.result).animate({opacity: 1}, 700);
			}
			reader.readAsDataURL(file);
			img.removeClass('hidden');
		}
		
		btn.val( txtAfter );
	});
});
    </script>
</body>
       </html>