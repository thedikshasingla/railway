<?php include('header.php');
?>
<?php
 
session_start();
include('db.php');
if(@$_POST['login'])
 
{   
 
 $u = $_POST['email_id'];
 
 $p = $_POST['password'];
 
 $query="SELECT * from user_detail WHERE email_id='".$u."' AND password = '".$p."'";
 $result = mysqli_query($conn,$query);
 $r=mysqli_fetch_assoc($result);
 $rows =  mysqli_num_rows($result); 

 if($rows>0)
 
 {
 
 $_SESSION['username'] = $u;
$_SESSION['fname']= $r['first_name'];
 header('Location: user_login.php');
 
 }
 
 else
 
 {
 
 $err= "<font color='red'>Invalid user login </font>";
 
 }
 
}
 
?>
 

 <div class="back">
       <div class="loginBox">
            <img src="Project/download.jpeg" class="user">
			<h2 style="margin:0; padding:0  0 20px; color:#6FF; text-align:center">Log In Here</h2>
			<form method="post">
				<p>Email id</p>
				<input type="text" name="email_id" placeholder="Enter User id">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<input type="submit" name="login" value="Login">
				<a href="#">Forget Password</a>
			</form>
           </div>
       </div>
       

<?php include('footer.php');
?>