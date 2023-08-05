<?php
include('db.php');
	$email=$_POST['email'];
	$check_in=$_POST['check_in'];
	$check_out=$_POST['check_out'];
	$type=$_POST['type'];
	$query=("insert into room(email,check_in,check_out,type) values('$email','$check_in','$check_out','$type')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	
	$msg=" information send sucessfullly";
	header('location:book_room.php?msg='.$msg);
		
	echo 'insert record sucessfully'
?>