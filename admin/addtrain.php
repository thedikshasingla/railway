<?php include("db.php");?>
<?php session_start();
if(!isset($_SESSION['login'])){
header("location:index.php");

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
<script>  
function validateform(){  
var Tno=document.myform.Tno.value;  
var Tname=document.myform.Tname.value;    
var src=document.myform.src.value;  
var dest=document.myform.dest.value;    
var dhour=document.myform.dhour.value;  
var dmin=document.myform.dmin.value;  
var dsec=document.myform.dsec.value;  
var dam=document.myform.dam.value;  
var ahour=document.myform.ahour.value;  
var amin=document.myform.amin.value;  
var asec=document.myform.asec.value;  
var dam=document.myform.dam.value;  
var fare=document.myform.fare.value;  
var Ttype=document.myform.Ttype.value;  


if (Tno == null || Tno == ""){  
  alert("Enter Train number");  
  return false;  
}
else if(Tname == null || Tname== ""){
	alert("Enter Train Name");
	return false;
}
else if(src==null || src==""){
	alert("Enter Train source ");
	return false;
}
else if(dest==null || dest==""){
	alert("Enter Train Destination");
	return false;
}

else if(fare==null || fare==""){
	alert("Enter Train Fare");
	return false;
}
else if(Ttype==null || Ttype==""){
	alert("Enter Train type");
	return false;
}
}  
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
									<span class="prfil-img"><img src="images/2.png" height="60px" width="60px" alt=""> </span> 
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
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
         <?php
  @$msg=$_GET['msg'];
 
   ?>
   <?php if(isset($msg)){ if($msg==1){?>
  <div class="row">
 </div>

 <?php } else { ?>  
 
</div></div> <?php } } ?>
      
		<div id="page-wrapper">
			<div class="main-page">
				               
				<div class="row">
						<h3 class="title1">Add Train</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="addprocess.php" name="myform" method="post" onSubmit="return validateform()">
								<div class="form-group">
									<label for="Train_no" class="col-sm-2 control-label">Train No</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Train_no" name="Tno" placeholder="Train No">
									</div>
								</div>
                                <div class="form-group">
									<label for="Train_name" class="col-sm-2 control-label">Train Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="Train_name" name="Tname" placeholder="Train Name">
									</div>
								</div>
								<div class="form-group">
									<label for="source" class="col-sm-2 control-label label-input-sm">Source</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="source" name="src" placeholder="source">
									</div>
								</div>
								<div class="form-group">
									<label for="destination" class="col-sm-2 control-label">Destination</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="destination" name="dest" placeholder="Destination">
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label" name="dep_time">Depart Time</label>
									<div class="col-sm-2">
                                    <select name="dhour" required class="form-control1"><br>

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
                                    <select name="ahour" required class="form-control1"><br>

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
										<input type="text" class="form-control1 input-lg" id="fare" name="fare" placeholder="Fare">
									</div>
								</div>
                                <div class="form-group">
									<label for="Train_type" class="col-sm-2 control-label label-input-sm">Train Type</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="Train_type" name="Ttype" placeholder="Train type">
									</div>
								</div>
                                <input type="submit" id="button" name="submit" class="btn btn-default"  value="submit" onClick="validateform()">
							</form>
						</div>
					</div>
			</div>
		</div>
        <div id="page-wrapper">
        <div class="container-fluid">
        <div class="rows">
        <div class="col-lg-12 col-sm-8">
        <table width="100" height="256" border="2" bordercolor="#DFDFDF" id="bus_table" class="table table-hover table-responsive">
     
     <tr>
     <th width="260" scope="col">Train_No</th>
      <th width="260" scope="col">Train_Name</th>
      <th width="260" scope="col">Source</th>
      <th width="260" scope="col">Destination</th>
       <th width="260" scope="col">Departure Time</th>
        <th width="260" scope="col">Arrival Time</th>
           <th width="260" scope="col">Fare</th>
           <th width="260" scope="col">Train_type</th>
           <th width="260" scope="col">Action</th>
           <th width="260" scope="col">Action</th>
        
           </tr>
       <?php $query="SELECT * FROM routes";
	          $result=mysqli_query($conn,$query);
			  while($res=mysqli_fetch_assoc($result))
			  {?>
         
          <tr>
              <td><?php echo $res['Train_no'];?></td>
              <td><?php echo $res['Train_name'];?></td>
              <td><?php echo $res['source'];?></td>
              <td><?php echo $res['destination'];?></td>
              <td><?php echo $res['dep_time'];?></td>
              <td><?php echo $res['arr_time'];?></td>
              <td><?php echo $res['fare'];?></td>
              <td><?php echo $res['Train_type'];?></td>
              <td><a href="edit.php?id=<?php echo $res['Train_no']; ?>">Edit</a></td>
              <td onClick=" return ConfirmDelete()"> <a href="delete.php?id=<?php echo $res['Train_no']; ?>">Delete</a></td>
             
              </tr>
               <?php } ?>                                   
              </table>
             
        </div>
        </div>
        </div>
        </div>
         <script>
	function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}
</script>
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
