<?php
include 'connection.php';
$naam=$_GET['name'];
$email=$_GET['email'];
$cookie_name = "cmail";
setcookie($cookie_name, $email, time() + (86400 * 360), "/");
$query1="SELECT * FROM customer_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
if(mysqli_num_rows($rtu)>0){
header("location:ajaxsubmito.php");
}
else{
    if(isset($_POST['naam'])&&isset($_POST['mobile'])&&isset($_POST['address'])&&isset($_POST['pcode'])&&isset($_POST['city'])&&isset($_POST['state'])){
$naam=$_POST['naam'];
$mobile=$_POST['mobile'];
$a1=$_POST['address'];
$pcode=$_POST['pcode'];
$city=$_POST['city'];
$state=$_POST['state'];
$address="name: ".$nam." "."mobile no: "." ".$mobile." "." Address:".$a1." "." State: ".$state." "." city: ".$city." "." Pincode: "." ".$pcode;
$query = "INSERT INTO customer_info(sn, email, naam, addres, numbe) VALUES (NULL,'$email','$naam','$address','null')";
mysqli_query($conn,$query);
 $query1="SELECT * FROM customer_info WHERE email='$email'";
$rtu=mysqli_query($conn,$query1);
$takla=mysqli_fetch_assoc($rtu);
  $decider=$takla['numbe'];
if($decider=='null'){
    header("location:lotelegram.php?email=$email");
}
} 
}
?>
<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="699677837875-82ddd76ls9146fr16qu054qh1lccv28v.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <style>
          @import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
}

h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  max-width: 40rem;
  padding: 10vw 2rem 0;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: 0.5rem;
  border-radius: 0.25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem;
}

.field__input {
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}

          </style>
<div class="container">
  <h1>Address</h1>
  <p>Please enter your Address details.</p>
  <hr />
  <form action='' method='post'>
  <div class="form">
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname">Name</span>
      <input class="field__input" name='naam' type="text" id="firstname" />
    </label>
    <label class="field">
      <span class="field__label" for="lastname">Mobile number</span>
      <input class="field__input" name='mobile' type="number" id="lastname"/>
    </label>
  </div>
  <label class="field">
    <span class="field__label" for="address">Address</span>
    <input class="field__input" type="text" name='address' id="address" />
  </label>
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Pin code</span>
      <input class="field__input" type="text" name='pcode' id="zipcode" />
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <input class="field__input" type="text" name='city' id="city" />
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <select class="field__input" name='state' id="state">
      <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
      </select>
    </label>
  </div>
  </div>
  <hr>
  <button type='submit' class="button">Continue</button>
</form>
</div>
</body>
</html>