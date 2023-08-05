<?php
include('db.php');
	$user_id=$_POST['user_id'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$confirm=$_POST['confirm'];
	$gender=$_POST['gender'];
	$query=("insert into user_detail(user_id,first_name,last_name,email_id,mobile,password,confirm_password,gender) values('$user_id','$first_name','$last_name','$email','$mobile','$password','$confirm','$gender')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	header('location:Login.php');
	echo 'insert record sucessfully'
?>