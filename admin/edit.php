<?php include("db.php"); 
$id=$_GET['id'];?>
<?php session_start();
if(!isset($_SESSION['login'])){
header('location:index.php');

}


 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Railway Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
 <link href="css/index.css" rel="stylesheet">

<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="admin.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="addtrain.php"><i class="fa fa-cogs nav_icon"></i>Add Train <span class="fa arrow"></span></a>
							
							<!-- /nav-second-level -->
						</li>
						
						
						<li>
							<a href="reports.php"><i class="fa fa-bars nav_icon"></i>Reports <span class="fa arrow"></span></a>
							
							<!-- /nav-second-level -->
						</li>
						
						
							<!-- //nav-second-level -->
						</li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>Railway</h1>
					</a>
				</div>
				<!--//logo-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						
							<ul class="dropdown-menu">
								
								
								
							</ul>
						</li>
						
							<ul class="dropdown-menu">
								
							</ul>
						</li>	
						
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/Graphic1.png" height="60px" width="60px" alt=""> </span> 
									<div class="user-name">
										<p>Admin</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
             
<?php if(isset($msg)){ if($msg==1){?>
  <div class="row">
  <div class="alert alert-success">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Successfylly Login</strong> 
</div></div>

 <?php } else { ?><div class="row"><div class="alert alert-danger">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Login Failed</strong> 
</div></div> <?php } } ?>
		<div class="row">
						<h3 class="title1">Edit Train</h3>
						<div class="form-three widget-shadow">
                        <?php $query="SELECT * FROM routes WHERE Train_no='".$id."'"; 
						       $result=mysqli_query($conn,$query);
							   $res=mysqli_fetch_assoc($result);?>
							<form class="form-horizontal" action="editprocess.php"  method="post">
								<div class="form-group">
									<label for="Train_no" class="col-sm-2 control-label">Train No</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Train_no" name="Tno" placeholder="Train No" value="<?php echo $res['Train_no']; ?>">
									</div>
								</div>
                                <div class="form-group">
									<label for="Train_name" class="col-sm-2 control-label">Train Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Train_name" name="Tname" value="<?php echo $res['Train_name']; ?>" placeholder="Train Name">
									</div>
								</div>
							
								<div class="form-group">
									<label for="source" class="col-sm-2 control-label label-input-sm">Source</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="source" name="src"  value="<?php echo $res['source']; ?>" placeholder="source">
									</div>
								</div>
                                
								
								<div class="form-group">
									<label for="destination" class="col-sm-2 control-label">Destination</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="destination" name="dest"  value="<?php echo $res['destination']; ?>" placeholder="Destination">
									</div>
								</div>
                                
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label" name="dep_time">Depart Time</label>
									<div class="col-sm-2">
                                    <select name="dhour" required class="form-control1"><br>
>
                                    <option selected disabled="disabled">hh</option>
		                             <?php for($i=1;$i<=12;$i++) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                    </select>
										</div>
                                     <div class="col-sm-2">
                                       <select name="dmin" id="selector1" class="form-control1">
                                              <option selected disabled="disabled">mm</option>
                                              <?php for($i=1;$i<=59;$i++) : ?>
                                             <option value="<?= $i ?>"><?= $i ?></option>
                                             <?php endfor; ?>
                                             <option value="00">00</option>
									    </select></div>
                                    <div class="col-sm-2">
                                       <select name="dsec" id="selector1" class="form-control1">
                                              <option selected disabled="disabled">ss</option>
                                              <?php for($i=1;$i<=59;$i++) : ?>
                                             <option value="<?= $i ?>"><?= $i ?></option>
                                             <?php endfor; ?>
                                             <option value="00">00</option>
									    </select></div>
                                    <div class="col-sm-2">
                                    <select name="dam" id="selector1" class="form-control1" >
                                        <option selected>am</option>
                                         <option>pm</option>
									</select></div>
								</div>
                                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label" name="arr_time">Arrival Time</label>
									<div class="col-sm-2">
                                    <select name="ahour" required class="form-control1">
                                    <option selected disabled="disabled">hh</option>
		                             <?php for($i=1;$i<=12;$i++) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                    </select>
										</div>
                                     <div class="col-sm-2">
                                       <select name="amin" id="selector1" class="form-control1">
                                              <option selected disabled="disabled">mm</option>
                                              <?php for($i=1;$i<=59;$i++) : ?>
                                             <option value="<?= $i ?>"><?= $i ?></option>
                                             <?php endfor; ?>
                                             <option value="00">00</option>
									    </select></div>
                                    <div class="col-sm-2">
                                       <select name="asec" id="selector1" class="form-control1">
                                              <option selected disabled="disabled">ss</option>
                                              <?php for($i=1;$i<=59;$i++) : ?>
                                             <option value="<?= $i ?>"><?= $i ?></option>
                                             <?php endfor; ?>
                                             <option value="00">00</option>
									    </select></div>
                                    <div class="col-sm-2">
                                    <select name="dam" id="selector1" class="form-control1" >
                                        <option selected>am</option>
                                         <option>pm</option>
									</select></div>
                                    </div>
                                    
                                    
								<div class="form-group mb-n">
									<label for="fare" class="col-sm-2 control-label label-input-lg">Fare</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="fare" name="fare" value="<?php echo $res['fare']; ?>"placeholder="Fare">
									</div>
								</div>
                                <div class="form-group">
									<label for="Train_type" class="col-sm-2 control-label label-input-sm">Train_Type</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="Train_type" name="Ttype" value="<?php echo $res['Train_type']; ?>"placeholder="Train type">
									</div>
								</div>
                                <input type="submit" id="button" name="submit" class="btn btn-default"  value="edit">
                                
							</form>
						</div>
					</div>
			</div>
		</div>
       
             
        
		<!--footer-->
		<div class="footer">
		    <p>&copy; 2016 Railway Admin Panel. All Rights Reserved...</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>