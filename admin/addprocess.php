<?php include('db.php'); ?>
<?php session_start(); ?>

<?php

$Train_no=$_POST['Tno'];



$Train_name=$_POST['Tname'];

$source=$_POST['src'];
 
$destination=$_POST['dest'];

$dhour=$_POST['dhour'];

$dmin=$_POST['dmin'];

$dsec=$_POST['dsec'];

$dam=$_POST['dam'];

$ahour=$_POST['ahour'];

$amin=$_POST['amin'];

$asec=$_POST['asec'];

$dep_time=$dhour.$dmin.$dsec; 

$arr_time=$ahour.$amin.$asec;

$Train_type=$_POST['Ttype'];

$fare=$_POST['fare'];


$query=mysqli_query($conn,"insert into routes (Train_no,Train_name,source,destination,dep_time,arr_time,fare,Train_type) values 
('$Train_no','$Train_name','$source','$destination','$dep_time','$arr_time','$fare','$Train_type')");
												$msg="Add Train Successfully!!";
                          
header('location:addtrain.php?msg='.$msg);									                                       

?>