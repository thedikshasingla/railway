<?php
session_start();
include('db.php');
	$name=$_POST['name'];
	$card_no=$_POST['card_no'];
	$expire=$_POST['expire'];
	$cvv=$_POST['cvv'];
	$email=$_POST['email'];
	$query=("insert into payment(name,card_no,expire,cvv,email) values('$name','$card_no','$expire','$cvv','$email')") or die(mysqli_error());
	$result=mysqli_query($conn,$query);
	if(!isset($_SESSION['username']))
 
{

header('location:platform_print.php');
 
}
else{
 
	$msg=" information send sucessfullly";
	header('location:print.php?msg='.$msg);
		
}
?>
<?php  
require_once "Mail.php";  
  
$from    = "jonnygill98@gmail.com";  
$to      = $email;  
$subject = "your ticket book successfully!";  
$body    =": "."\n\nMessege: ".$_POST["msg"].""; 

  
/* SMTP server name, port, user/passwd */  
$smtpinfo["host"] = "ssl://smtp.gmail.com";  
$smtpinfo["port"] = "465";  
$smtpinfo["auth"] = true;  
$smtpinfo["username"] = "jonnygill98@gmail.com";  
$smtpinfo["password"] = "Joban222";  
  
$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
$smtp = &Mail::factory('smtp', $smtpinfo );  
  
$mail = $smtp->send($to, $headers, $body);  
?>  
