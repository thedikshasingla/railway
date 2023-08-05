<?php
session_start();
include('db.php');

	$name=$_POST['name'];
	$Age=$_POST['Age'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$person=$_POST['person'];
	$fare=$_SESSION['fare'];
	$tfare=$fare*$person;
	$_SESSION['tfare']=$tfare;
	$query=("insert into book_ticket(name,Age,email,mobile,no_of_person,tfare) values('$name','$Age','$email','$mobile','$person','$tfare')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	
	
	header('location:payment.php');
		
?>