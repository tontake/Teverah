<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Teverah";
$first="";
$last="";
$Email="";
$ID="";
if(isset($_POST['username'])&& !empty($_POST['password']) ){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  
    $sql1 = "SELECT ID,username FROM login WHERE password='$pass'";
    $result = $conn->query($sql1);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if($user==$row['username']){

        
        $ID=$row['ID'];
            //echo "login successfully";
        }
        
        
        
        }
       
    }
    else{
        header("Location:/teverah");
    }
    $conn->close();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT First,Last,Email FROM credentials WHERE MyID='$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $first=$row['First'];
        $last=$row['Last'];
        $Email=$row['Email'];
    }
} else {
   // echo "error wrong credentials";
   header("Location:/teverah");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teverah</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/teverah.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
            <a class="nav-item nav-link  disabled" href="#">
              <form class="form-inline my-2 my-lg-0">
                
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Log In</button>
              </form>
            </a>
            <a class="nav-item nav-link active text-white mt-2" href="#">
              <form class="form-inline my-2 my-lg-0">
            
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Log Out</button>
              </form>


            </a>
          </div>
        </div>
      </nav>
      <?php echo  "<h1 class="."mybrand" .">Teverah Mobile Tracking </h1>";?>


<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/hero.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $first .$last;?>
                                    </h5>
                                    <h6>
                                        Welcome 
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true">Credentials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="add" role="tab" aria-controls="profile" aria-selected="false">Devices</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="profile-edit-btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" >Add Devices</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="profile-edit-btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" >Edit Profile</button>
                    </div>
                    <!-- Modal -->

                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>OUR LINKs</p>
                            <a href="">Security</a><br/>
                            <a href="">Mobile Tracking</a><br/>
                            <a href="">Users  Friendly</a>
                            <p>Contact</p>
                            <a href="">Techvillage</a><br/>
                            <a href="">It takes a village to raise a child</a><br/>
                            <a href="">Follow us on Facebook</a><br/>
                        
                            <a href=""></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php 
                                                echo "1";?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $first;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Email;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>0773772888</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>SalesMan</p>
                                            </div>
                                        </div>
                                        <?php $conn->close();?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    
</body>
</html>