<?php session_start();
include('db.php'); 
$username=$_POST['username'];
$password=$_POST['password'];

if ($username=="admin" and $password=="admin")
{ 
   $_SESSION['login']= true;
   	header('location:admin.php');
}
else
{
	$msg="Login Failed...!!!!";
	header('location:index.php?msg='.$msg);
}
?>