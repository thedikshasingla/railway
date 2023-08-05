<?php include('header.php');
$msgg=$_GET['msg'];
?>



<div class="prallex">
<div class="container-fluid">
<div class="row" style="padding-top:50px;">         
         <div class="col-lg-4 col-sm-4  col-md-4 col-lg-offset-1 col-sm-offset-1 col-md-offset-1">
                <h2>Contact us</h2>
                
          <?php echo $msgg;?>
           
			<form method="post" action="contact_db.php">
            
 
				<p><b>Name</b></p>
				<input type="text"  name="name"class="form-control" placeholder="Enter Name">
             
				<p><b>Email</b></p>
				<input type="Email" name="email"  class="form-control"placeholder="Enter Email">
                
                <p><b>Mobile_Number</b></p>
				<input type="number" name="mobile"class="form-control" placeholder="Enter Mobile number">
                <p><b>Suggestion</b></p>
                <textarea  rows="3" class="form-control" cols="40" name="suggestion" placeholder="Give your Suggestion"></textarea>
                <br>
				<input type="submit" name="" class="btn btn-default" value="Submit">
             
			</form>
  
</div>

<div class="col-lg-6 col-sm-6  col-md-6 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 divider">
<div class="text">
<h4>customer care number : 0755-3934141 , 0755-6610661</h4>
<h5>(Language:Hindi and English)</h5>
<br>
<h4><b>For Railway tickets booked through IRCTC</b></h4>
<h4>General Information</h4>
<h4>I-tickets/E-tickets: <a href="#" style="color:white"><u>care@irctc.co.in</u></a></h4>
<h4>For Cancellation E-Tickets: <a href="#" style="color:white"><u>etickets@irctc.co.in</u></a></h4>
<h4>For   Mumbai    Suburban   season   tickets : <a href="#" style="color:white"><u>seasontickets@irctc.co.in</u></a></h4>
<h4>For IRCTC SBI Card User who to not receive the card with in 01 month  from the date of application kindly call on the Railway SBI Card Helpline no. 0124-39021212 or 18001801295 (if calling from BSNL/MTNL line) or send email to  <a href="#" ><u>feedback.gesbi@ge.com</u></a>. For other queries on your IRCTC SBI card account, kindly email at <a href="#"><u>loyaltyprogram@irctc.co.in</u></a>
<h4>Registed Office/Corporate Office:</h4>
<h5>Indian Railway Catering and Tourism Corporation Ltd.,<br>B-148,11th floor,Statesman House,<br>Barakhamba Road,New Delhi 110001</h5>
</div>
</div>
</div>
</div>
</div>

<?php include('footer.php');
?>