<!DOCTYPE html>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/signup.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/signup.js"></script>
</head>

<div id="titile">
	<h4><strong>Create Account</strong></h4>
	
</div>
 <div id="form-container" onsubmit="return validation();">
 	<form action="account" method="post" >
 		<div class=form-group>
 			<input type="text" id="firstname" name="firstname" placeholder="First Name" autocomplete="off"class="form-control"/>
 			<input type="text" id="lastname" name="lastname" placeholder="Last Name" autocomplete="off" class="form-control"/>
		 </div>
		 <div class=form-group>
 			<input type="text" id="address" name="address" placeholder="Address" autocomplete="off"class="form-control"/>
 			<input type="text" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" class="form-control"/>
 		</div>


 		<div class="form-group">
 			<input type="text" id="email" name="email" placeholder="Email example@vybzgh.com" autocomplete="off"class="form-control"/>
 			<span id="erro"></span>
 		</div>


        <div class="form-group">
		<input type="text" id="username" name="username" placeholder="username" autocomplete="off"class="form-control"/>
 			<input type="password" id="password" name="password" placeholder="Password" autocomplete="off" class="form-control"/>
 			<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" autocomplete="off" class="form-control"/>
 		</div>

 		<div id="show-password"><label>Show password</label><input type="checkbox" name="checkbox" onclick="show()" /></div>
        <p id="signup">By clicking on <strong>Signup</strong> you agree to our<a href="#"> <strong>Terms and Conditions</strong></a></p>
 		<div>
 			<p><strong>Yes,I Agree</strong><label class="checkbox"><input type="checkbox" name="checkbox"></label></p>
 			<input type="submit" name="submit" id="submit" value="Signup"/>
 			
 		</div>
 	</form>
 </div>
 <div id="password-message">
 	<h4>Please password must contain the following</h4>
 	<p id="uppercase" class="invalid"><b>A lowercase letter</b></p>
 	<p id="lowercase" class="invalid"><b>A uppercase letter</b></p>
 	<p id="digit" class="invalid"><b>A number</b></p>
 	<p id="lengths" class="invalid"><b>Length must be between 8 to 20</b></p>
 	
 </div>
 </body>
</html>
