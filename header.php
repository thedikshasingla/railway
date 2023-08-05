<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="bootstrap-3.3.6-dist/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-3.3.6-dist/animate/animate.min.css">
<script src="bootstrap-3.3.6-dist/animate/wow.js"></script>
<script>new WOW() .init()</script>
<script src="bootstrap-3.3.6-dist/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<style>
.navbar-default .navbar-nav > li > a {
    color: #fff;
}
.navbar-default .navbar-nav > li > a:hover {
    color: #906;
	background-color:#fff;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>
<body>


      <nav class="navbar navbar-default navbar-fixed-top">
             <div class="container">
		          <div class="navbar-header">
        	           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        	                <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>
                       <a class="navbar-brand" href="Home.html"><img src="Project/images (1).jpeg" width="75" height="35"/></a>
                   </div>
                   
                   
                   <div class="collapse navbar-collapse" id="mynavbar">
                  	   <ul class="nav navbar-nav navbar-right">
                             <li><a href="Home.php">Home</a></li>
                             <li><a href="about us.php">About us</a></li>
                             <li><a href="contact.php">Contact us</a></li>
                               <?php if(!@$_SESSION['username']): ?>
                             <li><a href="Login.php">Login</a></li>
                             <li><a href="sign up.php">Sign up</a></li>
                             <?php else: ?>
                              <li><a href="logout.php">Logout</a></li>
                              <li><a href="#"><?php
date_default_timezone_set("Asia/Kolkata");
echo  date("h:i:sa");
?></a></li>
		<?php endif; ?>
                             
                       </ul>
                  </div>
           </div>
</nav>