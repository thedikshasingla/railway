<?php include("db.php"); ?>
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

$query=mysqli_query($conn,"UPDATE routes set Train_no='$Train_no',Train_name='$Train_name',source='$source',destination='$destination',dep_time='$dep_time',arr_time='$arr_time', fare='$fare',Train_type='$Train_type' where Train_no='$Train_no'"); 
$msg="Edit Train successfully!!";
                         
header('location:addtrain.php?msg='.$msg);									                                       

?>