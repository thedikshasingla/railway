
<?php include('header.php');
?>

			<div class="row" align="center" style="margin-top:80px;">
            	<div class="col-lg-12">
			<form  method="post" action="platform_db.php">
            
 				<h3><b>Platform Ticket</b></h3>
                <br>
				<p><b>Station</b></p>
				<input type="text" class="form-control" name="station" placeholder="Enter Station" style="width:17%">
             
				<p><b>Date</b></p>
				<input type="text" name="date" id="date" class="form-control" value="<?php
				date_default_timezone_set("Asia/Kolkata");
				echo  date("d-m-y");
				?>"  style="width:17%" required>
				<p><b>Time</b></p>
				<input type="text" name="time" value="<?php
				date_default_timezone_set("Asia/Kolkata");
				echo  date("h:i:sa");
				?>"  class="form-control"  style="width:17%">
                <p><b>No of Person</b></p>
				<input type="number" name="person"class="form-control" min="1" placeholder="Enter No of Person"  style="width:17%">
                <br>
                <h3><b>Note:-</b></h3>
                <p>Valid for only 3 Hours<br>Ticket is not Transferable</p>
				<input type="submit"  class="btn btn-default" value="Buy">
             
			</form>
            </div>
            </div>


<?php include('footer.php');
?>