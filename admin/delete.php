<?php include("db.php");  ?>
<?php $id=$_GET['id'];
$query="DELETE from routes where Train_no='".$id."'"; 
$res=mysqli_query($conn,$query);
$msg="Delete Train Successfully!!";
header("location:addtrain.php?msg=".$msg);
?>