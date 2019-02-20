<?php
require_once 'dbconn.php';
if(isset($_POST['firstname'])&& !empty($_POST['lastname'])&&!empty($_POST['email']) ){
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$sql = "INSERT INTO credentials (First, Last, Email,Address,Phone)
	VALUES ('$firstname', '$lastname', '$email','$address',$phone)";
    $sql2="INSERT INTO login (username,password)
    VALUES('$username','$password')";
    if($conn->query($sql2)==TRUE){
     
    }
	if ($conn->query($sql) === TRUE) {
	header('Location:index');
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>