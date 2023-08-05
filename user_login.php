<?php include('header.php');
?>
 <?php
 
 include('db.php');
session_start();

 
if(!isset($_SESSION['username']))
 
{
 
    echo "<p align='center'>Please Login again ";
 
    echo "<a href='Login.php'>Click Here to Login</a></p>";
 
}
 
 
    else
 
    {
 
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  $(document).ready(function () {

	  $("#date").datepicker({  dateFormat: 'yy-mm-dd',
	  minDate:0
	  });
  });
  </script>
  <script>

  $(document).ready(function () {

	  $("#date1").datepicker({  dateFormat: 'yy-mm-dd',
	  minDate:0
	  });
  });
  </script>
<div style="background-color:#f6f6f6;">
<div class="container" style="margin-top:20px">
	<div class="row">
    	<div class="col-lg-12">
        	<h3 style="color:#906;" align="center">Welcome <?php echo $_SESSION['fname']; ?> </h3>
         </div>
         <div class="col-lg-6" align="right">
         	<h3 style="color:#fff;"></h3>
         </div>
    </div>
</div>
</div>
<div class="container">
	<div class="row">
    	<div class="col-lg-6 col-md-6" >
        <br>
        <br>
			<h2 style="margin:0; padding:0  0 20px; color:#906; text-align:center">Plan My Journey</h2>
			<form style="margin-left:140px;" method="post" action="train_detail.php">
				<p>From Station<span style="color:red">*</span>:</p>
				<select class="form-control" required id="sel1" name="src" onchange="r()">
          <option selected disabled value="" >From:</option>
        	<?php
		
		$subquery=mysqli_query($conn,"SELECT DISTINCT source  FROM routes");	
		while($result=mysqli_fetch_array($subquery))
		{ ?>
          
			<option id="idd<?php $result['source']; ?>" value="<?php echo $result['source']; ?>">
			<?php echo $result['source']; ?></option>
           <?php } ?>
		
		
        </select>
				<p>To Station<span style="color:red">*</span>:</p>
				<select class="form-control" required id="sel1" name="dest" onchange="r()">
          <option selected disabled value="" >To:</option>
        	<?php
		
		$subquery=mysqli_query($conn,"SELECT DISTINCT destination  FROM routes");	
		while($result=mysqli_fetch_array($subquery))
		{ ?>
          
			<option id="idd<?php $result['destination']; ?>" value="<?php echo $result['destination']; ?>">
			<?php echo $result['destination']; ?></option>
           <?php } ?>
		
		
        </select>
                <p>Journey Date<span style="color:red">*</span>:</p>
                <input type="text" id="date" name="date" placeholder="dd-mm-yy" class="form-control">
                <p></p>
                <p>
               
				<input type="submit"  value="submit">
				       
                </p>
  			</form>
     <span style="margin-left:140px;"><a href="user_login.php" style="color:#000"><button>Reset</button></a></span>
         </div>
         <div  class="col-lg-6 col-md-6">
         <br>
         <br>
         	<h2 style="margin:0; padding:0  0 20px; color:#906; text-align:center">Quick  Book</h2>
            <form style="margin-left:140px;" action="trainnumber.php" method="post">
				<p>Train No.<span style="color:red">*</span>:</p>
				<select class="form-control" required id="sel1" name="train_no" onchange="r()">
          <option selected disabled value="" >Train Number:</option>
        	<?php
		
		$subquery=mysqli_query($conn,"SELECT DISTINCT Train_no  FROM routes");	
		while($result=mysqli_fetch_array($subquery))
		{ ?>
          
			<option id="idd<?php $result['Train_no']; ?>" value="<?php echo $result['Train_no']; ?>">
			<?php echo $result['Train_no']; ?></option>
           <?php } ?>
		
		
        </select>
				<p>From Station<span style="color:red">*</span>:</p>
				<select class="form-control" required id="sel1" name="dest" onchange="r()">
          <option selected disabled value="" >From:</option>
        	<?php
		
		$subquery=mysqli_query($conn,"SELECT DISTINCT source  FROM routes");	
		while($result=mysqli_fetch_array($subquery))
		{ ?>
          
			<option id="idd<?php $result['source']; ?>" value="<?php echo $result['source']; ?>">
			<?php echo $result['source']; ?></option>
           <?php } ?>
		
		
        </select>
                <p>To Station<span style="color:red">*</span>:</p>
				<select class="form-control" required id="sel1" name="dest" onchange="r()">
          <option selected disabled value="" >To:</option>
        	<?php
		
		$subquery=mysqli_query($conn,"SELECT DISTINCT destination  FROM routes");	
		while($result=mysqli_fetch_array($subquery))
		{ ?>
          
			<option id="idd<?php $result['destination']; ?>" value="<?php echo $result['destination']; ?>">
			<?php echo $result['destination']; ?></option>
           <?php } ?>
		
		
        </select>
                <p>Journey Date<span style="color:red">*</span>:</p>
                <input type="text" name="" id="date1" placeholder="dd-mm-yy" class="form-control">
                <p></p>
                <p>
				<input type="submit" name="" value="Submit">
				<input type="submit" name="" value="Replan">
                </p>
  			</form>
     </div>
</div>
</div>
<?php }?>
<?php include('footer.php');
?>