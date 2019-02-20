<?php
include_once 'config.php';
$logurl=$gClient->createAuthUrl();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teverah</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success" id="fix"
        <a class="navbar-brand" href="#">TEVERAH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto mt-1">
            <a class="nav-item nav-link active text-white mt-2" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-white mt-2" href="#">Pricing</a>
            <a class="nav-item nav-link text-white" href="#">
              <form class="form-inline my-2 my-lg-0">
                
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Log In</button>
              </form>
            </a>
            <a class="nav-item nav-link disabled" href="#">
              <form class="form-inline my-2 my-lg-0">
            
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Log Out</button>
              </form>


            </a>
          </div>
        </div>
      </nav>
	    <section class="bgimage">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	  <div class="container login-container">
<div class="row">
<div class="col-md-6 col-xs-6"></div>
 <div class="col-md-6 login-form-2">
                    <h3>TEVERAH</h3>
                    <form id="validation" method="POST" action="teverah">
                        <div class="form-group" >
                            <input type="text" class="form-control" id="user" placeholder="Your Email or Username" name="username" value="" required />
							
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Your Password "name="password" value="" required  />
							
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
							
                        </div>
						         <div class="form-group">

                            <a href="#" class="myor" value="Login">OR</a>
                        </div>
						
                        </form>
                        <div class="form-group">
                            <input type="submit"onclick="window.location='<?php echo "signup"; ?>'" class="btnSubmit" value="Create Account" />
							
                        </div>
						
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    
                    
					 <button class="mybtn " onclick="window.location='<?php echo $logurl; ?>'"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                </button>
                </div>





</div>
</div>
  </div>
        </div>
      </div>
    </section>
	

	 
	


      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js">
</script>

</body>
</html>