<?php include('header.php');
?>
<br>
<br>
<br>
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<form method="post" action="payment_db.php">

                 <h2 align="center"><b>Payment</b></h2>
                 <br>
            
 
				<p><b>Enter Card holder name</b></p>
				<input type="text"  name="name"class="form-control" placeholder="Enter Card holder name" required>
             <br>
             
				<p><b>Enter Card no</b></p>
				<input type="number" name="card_no"  class="form-control"placeholder="Enter card no" required>
                <br>
             
                
                <p><b>Expiry date</b></p>
                <input type="text" class="expire" name="expire" placeholder="Enter expiry date" required>
                <br>
             <br>
             
                <p><b>CVV</b></p>
                <input type="password" class="cvv" name="cvv"  maxlength="3" placeholder="Enter CVV" required>
                <br>
                <br>
                
                <p><b>Email</b></p>
				<input type="Email" name="email"  class="form-control"placeholder="Enter Email" required>
                <br>
                
				<input type="submit" name="" class="btn btn-default" value="Pay Now">
             
			</form>
 </div>
 </div>
   <?php include('footer.php');
?>