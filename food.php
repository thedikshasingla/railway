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

@import url('https://fonts.googleapis.com/css?family=Montserrat');
@import url('https://fonts.googleapis.com/css?family=Courgette');
.back{
	background-image:url(images/steak.jpg);
	background-attachment:fixed;
	width:100%;
	height:1000px;
	background-size:cover;
}
.background{
	background-image:url(images/pricing.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	padding:150px;
}
.menubackground{
	background-image:url(../fooddy/images%20pro/hero_slide_1.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	padding:150px;
}
	
.back2{
	background-image:url(images/beer.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	
}
.back3{
	background-image:url(images/breakfast.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	padding:150px;
}
.back4{
	background-image:url(images/featured.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	padding:150px;
}
.back5{
	background-image:url(images/radish.jpg);
	background-attachment:fixed;
	width:100%;
	height:400px;
	background-size:cover;
	color:#FFF;
	padding:150px;
}
.footer{
	color:#FFF;
	padding:500px;
}
.underline{
	border-bottom:3px solid #FFF;
	max-width:600px;
	margin-left:30px;
	margin-bottom:20px;
}
.underline1{
	border-bottom:1px solid black;
}

.social{
	border:3px solid white;
	color:#FFF;
	border-radius:100%;
	padding:10px;

}
.ravi{
	font-family:Courgette;
}
.ravi1{
	font-family:montserrat;
}
.book{
	background-color:none;
	border:1px thin #000;
	color:#FFF;
	font-family:montserrat;
}
.book a{
	text-decoration:none;
	color:;
}
.book:hover{
	background-color:#FFF;
	color:#FFF;
}
.book a:hover{
	color:#000;
}
.book1{
	margin-left:50px;
	background-color:none;
	border:1px solid #000;
	color:#000;
}
.book1 a{
	text-decoration:none;
	color:#03C;
}
.book1:hover{
	background-color:#FFF;
	color:#FFF;
}
.book1 a:hover{
	color:#000;
}
.social:hover{background-color:white;color:#00C;}
	.back6{
		background-color:#000;
	}
img {
	transition:all is;
}
img:hover{
	transform:scale(1.1);
	animation:running;
}
.user1{
	width: 50px;
	height: 50px;
	border-radius:50%;
	overflow: hidden;
	margin-left:0px;
}
.user{
	border-radius:50%;
}
.form-control{
	  display: block;
    width: 84%;
    height: 57px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0px;
}
.grad
{
	background-color:#FFF;
	padding:50px;
	
}
@media (min-width: 768px)
{
.form-inline .form-control {
    display: inline-block;
    width: 351px;
    vertical-align: middle;
}
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  $(document).ready(function () {

	  $("#date1").datepicker({  dateFormat: 'yy-mm-dd',
	  minDate:0
	  });
  });
  </script>
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
		<?php endif; ?>
                             
                       </ul>
                  </div>
           </div>
</nav>
<div class="back">
<div class="">
<h1 align="center" style="font-size:60px; font-style:oblique; color:#fff"><b>Railway Catering</b></h1>
<img src="images/images (5).jpg" class="user" width="100" height="100" style="margin-left:136px;">
<h1 align="center" style="font-size:40px; color:#fff"><b>"best in the city"</b></h1>

<div class="underline">
</div>

<div class="text-center">
</div>
</div>
</div>
<div class="container" style="padding-top:50px">
<div class="row">
<div class="col-lg-4">
<h1 class="book" align="center"><a href="#">ABOUT US</a></h1>
<div class="fa fa-cutlery fa-2x" align="center">
<p style="font-size:medium;">Restaurant is a place for simplicity. Good food, good beer, and good service. Simple is the name of the game, and we're good at finding it in all the right places, even in your dining experience. We're a small group from Denver, Colorado who make simple food possible. Come join us and see what simplicity tastes like.</p>
</div>
</div>
<div class="col-lg-6" style="margin-top:30px;">
<div class="text-right">
<img src="images/kabob.jpg" height="100" width="200">
<img src="images/limes.jpg" height="100" width="200">
<div class="img-section-space"></div>
<img src="images/radish.jpg" height="100" width="200">
<img src="images/corn.jpg" height="100" width="200">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="" style="height:300px; background-color:#6AB5B5">
<div class="cointainer-fluid" style="margin-top:50px;">
<div class="row text-center">
<div class="col-lg-10 col-lg-offset-1">
<h3 class="ravi">our services</h3>
<hr class="small">

<div class="row">

<div class="col-lg-3">
<span class="fa fa-stack fa-4x">
<i class="fa fa-circle fa-2x" style="color:#fff"></i>
<i class="fa fa-rupee fa-stack-1x text-primary"></i>
</span>
<h4>
<strong class="ravi1">cash on delivery</strong>
</h4>
<a href="#" class="btn btn-default">cash on delivery</a>
</div>

<div class="col-lg-3">
<span class="fa fa-stack fa-4x">
<i class="fa fa-circle fa-2x" style="color:white;"></i>
<i class="fa fa-coffee fa-stack-1x text-primary"></i>
</span>
<h4>
<strong class="ravi1">instance delivery</strong>
</h4>
<a href="#" class="btn btn-default">book food</a>
</div>

<div class="col-lg-3">
<span class="fa fa-stack fa-4x">
<i class="fa fa-circle fa-2x" style="color:white;"></i>
<i class="fa fa-location-arrow fa-stack-1x text-primary"></i>
</span>
<h4>
<strong class="ravi1">tract ur orde</strong>
</h4>
<a href="#" class="btn btn-default">check ur food</a>
</div>

<div class="col-lg-3">
<span class="fa fa-stack fa-4x">
<i class="fa fa-circle fa-2x" style="color:white;"></i>
<i class="fa fa-table fa-stack-1x text-primary"></i>
</span>
<h4>
<strong class="ravi1">reserve table</strong>
</h4>
<a href="#" class="btn btn-default">reserve ur table</a>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="background">
<div class="container-fluid" style="padding-top:-30px">
<div class="row text-center">
<h2 align="center" style="padding-top:50px; font-size:80px;"><b class="ravi">AFFORDABLE PRICING</b></h2>
<div class="underline" style="margin-left:300px;">
</div>
</div>
</div>
</div>
<div class="container" style="padding-top:50px">
<div class="row">
<div class="col-lg-3">
<img src="images/food_icon01.jpg" class=" img-responsive" height="220" width="250">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>

<div class="col-lg-3">
<img src="images/food_icon02.jpg" class=" img-responsive" height="220" width="250">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>

<div class="col-lg-3">
<img src="images/food_icon03.jpg" class=" img-responsive" height="220" width="250">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>

<div class="col-lg-3">
<img src="images/food_icon04.jpg" class=" img-responsive" height="220" width="250">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>

</div>

<div class="row">
<div class="col-lg-3">
<img src="images/food_icon05.jpg" class=" img-responsive" height="220" width="250" style="padding-top:10px;">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>

<div class="col-lg-3">
<img src="images/food_icon06.jpg" class=" img-responsive" height="220" width="250" style="padding-top:10px;">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#"$>20RS</a></h1>
</div>

<div class="col-lg-3">
<img src="images/food_icon07.jpg" class=" img-responsive" height="220" width="250" style="padding-top:10px;">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>
<div class="col-lg-3">
<img src="images/food_icon08.jpg" class=" img-responsive" height="220" width="250" style="padding-top:10px;">
<h1 class="book1" align="center" style="width:150px; border-radius:10px;"><a href="#">20RS</a></h1>
</div>
</div>
</div>
</div>
</div>
<div class="back2">
<div class="container" style="margin-top:50px">
<div class="row">
<h2 align="center" style="margin-top:50px; font-size:80px;"><b class="ravi">Great Place To Enjoy</b></h2>
<div class="underline" style="margin-left:300px;">
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid" style="padding-top:50px">
<div class="row">
<div class="col-lg-4 col-lg-offset-1">
<h1 class="book" align="center"><a href="#">OUR BEER</a></h1>
<div class="fa fa-beer fa-2x" align="center">
<p style="font-size:medium">Here at Restaurant we're all about the love of beer. New and bold flavors enter our doors every week, and we can't help but show them off. While we enjoy the classics, we're always passionate about discovering something new, so stop by and experience our craft at its best.</p>
</div>
</div>
<div class="col-lg-6">
<img src="images/beer_spec.jpg" width="500" height="300" style="padding-left:200px;">
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="back3" style="padding-top:70px;">
<div class="container">
<div class="row">
<h2 align="center" style="padding-top:50px; font-size:80px;"><b class="ravi">Our Breakfast Menu</b></h2>
<div class="underline" style="margin-left:300px;">
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="container-fluid" style="padding-top:10px">
<div class="row">
<div class="col-lg-4 col-lg-offset-1">
<h1 class="book" align="center"><a href="#">OUR BREAD</a></h1>
<div class="row">
<div class="col-lg-3 col-lg-offset-5">
<img src="logo/download (1).png" style="width:35px; height:35px;" align="center">
</div>
</div>
<div class="fa-2x" align="center">
<p style="font-size:medium">We love the smell of fresh baked bread. Each loaf is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
</div>
</div>
<div class="col-lg-6">
<img src="images/bread1.jpg" width="500" height="300" style="padding-left:200px;">
</div>
</div>
</div>
</div>
<br>
<br>
<br>

<div class="back4" style="padding-top:30px;">
<div class="container">
<div class="row">
<h2 align="center" style="padding-top:50px; font-size:80px; color:white;"><b class="ravi">Our Featured Dishes Menu</b></h2>
<div class="underline" style="margin-left:300px; margin-bottom:500px;">
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="container" style="padding-top:10px">
<div class="row">
<div class="col-lg-4">
<h1 class="book" align="center"><a href="#">Have A Look To Our Dishes!</a></h1>
<div class="fa fa-apple fa-2x" align="center">
<p style="font-size:medium">Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
</div>
</div>


<div class="col-lg-6 col-lg-offset-2">
<div id="mycarousel" class="carousel slide" data-ride="carousel">

<ol div class="carousel-indicators">

<li data-target="#mycarousel" data-slide to="0" class="active"></li>
<li data-target="#mycarousel" data-slide to="1"></li> 
<li data-target="#mycarousel" data-slide to="2" ></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<img src="images/slider1.jpg" width="500" height="300">
<div class="carousel-caption">
</div>
</div>

<div class="item">
<img src="images/slider2.jpg" width="500" height="300">
<div class="carousel-caption">
</div>
</div>

<div class="item">
<img src="images/slider3.JPG" width="500" height="300">
<div class="carousel-caption">
</div>
</div>
</div>

<a class="left carousel-control" href="#mycarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>

<a class="right carousel-control" href="#mycarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
</div>
</div>
<br>
<br>
<br>

<div class="back4" style="padding-top:150px;">
<div class="container">
<div class="row">
<h2 align="center" style="padding-top:50px; font-size:80px;"><b class="ravi"> Reserve A Table!</b></h2>
<div class="underline" style="margin-left:300px;">
</div>
</div>
</div>
</div>
</div>

<div class="grad">
   <div class="container-fluid">
      <div class="row">
      <div class="col-lg-6">
<img src="images/maxresdefault.jpg" class="img-responsive">
</div>
       <div class="col-lg-5 col-lg-offset-1">
   
 <form action="reservation_db.php" class="form-inline" method="post">
  <div class="form-group" >
    <label for="Destination" style="color:black">FIRST NAME</label><br>
    <input type="search" class="form-control" name="fname" id="search" size="40">
 </div>
 
  
  <div class="row">
  <div class="col-lg-5">
  <div class="form-group">
    <label for="Check In" style="color:black">DATE OF RESERVATION</label><br>
    <input type="text" id="date1" class="form-control"  name="date" placeholder="DD-MM-YY" size="40">
  </div>
  </div>
  </div>
  
  
    <div class="row">
  <div class="col-lg-5">
  <div class="form-group" >
    <label for="Check Out" style="color:black">TIME</label><br>
    <input type="time" class="form-control" name="time" id="TIME" placeholder="" size="60">
 </div>
 </div>
 </div>
  
  
  <div class="row">
  <div class="col-lg-5">
  <div class="form-group">
    <label for="Adult" style="color:black">NO OF PERSON</label><br>
    <input type="number" class="form-control" name="person" min="1" id="number" placeholder="01" size="40">
 </div>
 </div>
 </div>
  
  <div class="row">
  <div class="col-lg-5">
  <div class="form-group">
    <label for="email" style="color:black">EMAIL</label><br>
    <input type="email" class="form-control" name="email" id="email" placeholder="enter email" size="40">
 </div>
 </div>
 </div>
  
  <div class="row">
  <div class="col-lg-5">
 <div class="form-group">
  <button type="submit" class="btn btn-defaul" style="border-radius:10%; background: linear-gradient(to left, #C6C, #F90); padding:10px;color:white; margin-top:25px;"> Submit &nbsp;<span class="fa fa-arrow-right"> </span></button>
  </div>
  </div>
  </div>
</form>
</div>
</div>
</div>
</div> 

<br>


<div style="margin-top:50px; background-color:#906; padding:50px">
<div class="container">
<div class="row text-center">
   <div class="col-lg-6">
      <h2 style="color:#fff">FOLLOW US ON</h2>
   </div>
	<div class="col-lg-4" style="margin-top:15px;">
    	<span class="social"><a href="Login.html"><i class="fa fa-facebook"></i></a></span>
        <span class="social"><a href="Login.html"><i class="fa fa-twitter"></i></a></span>
         <span class="social"><a href="Login.html"><i class="fa fa-instagram"></i></a></span>
          <span class="social"><a href="Login.html"><i class="fa fa-google-plus"></i></a></span>
    </div>
</div>        
</div>
</div>

<div class="container" style="padding:40px;">
  <div class="row">
    <div class="col-lg-12 text-center">
      <p>All Rights Reserverd ..Copyright &copy;</p>
    </div>
  </div>
</div>