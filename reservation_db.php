<?php
include('db.php');
	$fname=$_POST['fname'];
	$date=$_POST['date'];
	$timet=$_POST['time'];
	$person=$_POST['person'];
	$email=$_POST['email'];
	$query=("insert into food(fname,date,time,person,email) values('$fname','$date','$time','$person','$email')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	
	$msg=" information send sucessfullly";
	header('location:food.php?msg='.$msg);
		
	
?>