<?php include('header.php');
?>
<br>
<br>
<br>
<?php @$fare=$_GET['fare'];
?>
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<form method="post" action="book_ticket_db.php">
            
				<p><b>Name</b></p>
				<input type="text"  name="name"class="form-control" placeholder="Enter Name">
             <br>
             
             <p><b>Age</b></p>
                <input type="number" class="form-control" name="Age" placeholder="Age">
                <br>
             
				<p><b>Email</b></p>
				<input type="Email" name="email"  class="form-control"placeholder="Enter Email">
                <br>
             
                <p><b>Mobile_Number</b></p>
				<input type="number" name="mobile" class="form-control" placeholder="Enter Mobile number">
                <br>
                            
                <p><b>No of Person</b></p>
                <input type="number" class="form-control" min="1" name="person" placeholder="Enter no of Person">
                <br>
                
				<input type="submit" name="" class="btn btn-default" value="Book Ticket">
             
			</form>
 </div>
 </div>
   <?php include('footer.php');
?>