<?php
include('db.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$suggestion=$_POST['suggestion'];
	$query=("insert into contact(name,email,mobile_no,suggestion) values('$name','$email','$mobile','$suggestion')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	
	$msg=" information send sucessfullly";
	header('location:contact.php?msg='.$msg);
		
	echo 'insert record sucessfully'
?>