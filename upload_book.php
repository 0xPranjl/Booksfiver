<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./upload_book.php_files/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./upload_book.php_files/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./upload_book.php_files/jquery.min.js"></script>
    <link rel="stylesheet" href="./upload_book.php_files/font-awesome.min.css">
  <script src="./upload_book.php_files/popper.min.js"></script>
  <script src="./upload_book.php_files/bootstrap.min.js"></script>
  <style>
body{width:610px;}
#uploadForm {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#uploadForm label {margin:2px; font-size:1em; font-weight:bold;}
.demoInputBox{padding:5px; border:#F0F0F0 1px solid; border-radius:4px; background-color:#FFF;}
#progress-bar {background-color: #12CC1A;height:20px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
.btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
#progress-div {border:#0FA015 1px solid;padding: 5px 0px;margin:30px 0px;border-radius:4px;text-align:center;}
#targetLayer{width:100%;text-align:center;}

</style>
<script src="./upload_book.php_files/jquery-2.1.1.min.js" type="text/javascript"></script>
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
html,body {
margin:0;
padding:0;
margin: 0px;
    padding: 0px;
width:100%;
    overflow-x:hidden;
}
    </style>
    </head><body><div class="container">
     <h3 id="stat" class="col text-center">Front Side Book Pic</h3>
    </div>
                  
    <div class="form-group cento">
          <form action="upload_book.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="modal-body">
              <div class="form-group">
                <div id="my_camera" style="bottom: 50px; width: 340px; height: 670px;"><div></div><video autoplay="autoplay" style="width: 340px; height: 670px;"></video></div>
                
                <div id="WAButton" value="Front Side Photo" onclick="take_snapshot()" class="float takc">
<input value="Front Side Photo" id="tak" hidden="">
                <i class="fa fa-camera-retro" style="font-size:36px"></i> 
</div>  
                <div value="Done" onclick="saveSnap()" class="floatr savc" style="display: none;">
                <input value="Done" id="sav" hidden="">
                <i class="fa fa-check" style="font-size:36px"></i> 
</div>
                <div id="results"></div>
                </div>
            </div>
           
              <label class="san" style="margin-left: 10px; display: none;">Book name</label>
              <select class="form-control foto san" onchange="getState()" name="catg" id="cats" style="display: none;">
            <option>other</option>
    </select>
  
  <!-- <div class="form-group">upload Book image2
    <label for="exampleFormControlFile1"></label>
    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">upload Book Condition video</label>
    <input type="file" name="video1" class="form-control-file" id="bv">
    <small id="emailHelp" class="form-text text-muted" style='color:red;' id='vwarn'></small>  
  </div> -->
       
              <button type="submit" class="btn btn-success san" style="display: none;">Add Book</button>
            </form></div>
          
        
      
    


<!-- Webcam.min.js -->
  <script type="text/javascript" src="./upload_book.php_files/webcam.min.js"></script>

<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
 // Configure a few settings and attach camera

  Webcam.set('constraints',{
      facingMode: "environment",
      width: 400,
    height: 290,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.attach( '#my_camera' );
  // preload shutter audio clip
  var shutter = new Audio();
  shutter.autoplay = true;
  shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

  function take_snapshot() {
      // play sound effect
      shutter.play();
  
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
          // display results in page
          document.getElementById('results').innerHTML = 
          '<img id="imageprev" src="'+data_uri+'"/>';
          $('#my_camera').hide();
          $('.savc').show();
      
      } );
  }
  function saveSnap(){
// Get base64 value from <img id='imageprev'> source
var base64image = document.getElementById("imageprev").src;

Webcam.upload( base64image, 'upload.php?cat=', function(code, text) {
console.log('Save successfully');
alert("Uploaded Successfully");
// window.location.replace("https://www.insta2youtube.com/snapc.html");
//console.log(text);
if($('#sav').attr('value')==="dusra"){
  window.location.replace("https://booksfiver.com/telev.php");

}
});

}

</script>	
  <script>
      $('#cameraFlip').click(function() {
webcam.flip();
webcam.start();

});
$(document).ready(function(){
$('#uploadForm').hide();
$('.san').hide();
$('.savc').hide();
});
$('.takc').click(function(){

  $('.savc').show();
$('#sav').show();
if($('#tak').attr('value')==='Retake'){
$('#my_camera').show();
$('#tak').attr('value','Front Side Photo');

$('#imageprev').hide();  
}
else if($('#tak').attr('value')==='Try again'){
$('#my_camera').show();
$('#tak').attr('value','Back Side Photo');

$('#imageprev').hide();  
}
else if($('#tak').attr('value')==="Front Side Photo"){
  $('#tak').attr('value','Retake');

  }
  else if($('#tak').attr('value')==="Back Side Photo"){
  $('#tak').attr('value','Try again');
  $('#sav').attr('value','dusra');
  }
});
$('.savc').click(function(){
  $('.savc').hide();
if($('#tak').attr('value')==="Back Side Photo"){
      $('#tak').attr('value','Try again');
      $('.savc').hide();
      $('#imageprev').show(); 
      $('.san').show();
      
  }

$('#my_camera').show();
$('#imageprev').hide();  
$('#tak').attr('value','Back Side Photo');
$('#stat').text('Back Side Book pic');
  // else{    $('#tak').attr('value','Retake');
  //     $('#tak').attr('value','Back Side Photo');

  // }
});
  </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./upload_book.php_files/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./upload_book.php_files/popper.min(1).js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./upload_book.php_files/bootstrap.min(1).js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="./upload_book.php_files/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script>

</body></html>