<?php
session_start();
include('db.php');
	$station=$_POST['station'];
		$date=$_POST['date'];
			$time=$_POST['time'];
	$person=$_POST['person'];
	$tfare=$person*10;
$_SESSION['st']=$station;
$_SESSION['dt']=$date;
$_SESSION['tm']=$time;
$_SESSION['pr']=$person;
$_SESSION['tf']=$tfare;
	$query="insert into platform(station,date,time,person,tfare) values('$station','$date','$time','$person','$tfare')" or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	
	$msg=" information send sucessfullly";
	header('location:payment.php?msg='.$msg);
		
	echo 'insert record sucessfully'
	
?>
