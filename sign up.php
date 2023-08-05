<?php include('header.php');
?>
<style>
.signbox{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:350px;
	height:650px;
	padding:80px 40px;
	box-sizing:border-box;
	background:rgba(0,0,0,.5);
}

</style>
 <div class="signback">
       <div class="signbox">
            <img src="Project/download.jpeg" class="user">
			<h2 style="margin:0; padding:0  0 20px; color:#6FF; text-align:center">Register Here</h2>
			<form method="post" action="sign_up_database.php">
            
                <p><input type="text"  name="user_id" placeholder="enter user id" id="input" /></p>
				<p><input type="text" name="first_name"placeholder="enter first name" id="input" /></p>
				<p><input type="text" name="last_name" placeholder="enter last name" id="input" /></p>
				<p><input type="email" name="email" placeholder="enter email" id="input" /></p>
                <p><input type="text" name="mobile" placeholder="enter mobile number" id="input" /></p>
				<p><input type="password" name="password" placeholder="enter password" id="input" /></p>
				<p><input type="password" name="confirm" placeholder="confirm password" id="input" /></p>
                <p><label class="radio-inline"><input type="radio" name="gender" value="male" />&nbsp; &nbsp;&nbsp; &nbsp;male</label>
					<label class="radio-inline"><input type="radio" name="gender" value="female"  />&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;female </p></label>
                    <br>
				<input type="submit" name="" value="Sign In">
				
			</form>
           </div>
       </div>



<?php include('footer.php');
?>