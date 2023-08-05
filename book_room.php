<?php include('header.php');
?>
<style>
.slider
{
	background-image:url(images/hotel.jpg);
	background-attachment:fixed;
	background-size:cover;
	height:800px;
	padding:100px;
}
.frm
{
	background-color:rgba(255,255,255,0.5);
	padding:10px;
	margin-top:100px;
}
.imageeffect  {
transition:all 1s;
	vertical-align: middle;

border-style: none;
}
.imageeffect:hover{
	transform:scale(1.1);
	animation:cubic-bezier();
	
}
</style>
<script>

  $(document).ready(function () {

	  $("#date").datepicker({  dateFormat: 'yy-mm-dd',
	  minDate:0
	  });
  });
  </script>
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
<div class="slider">
<div class="container-fluid">
<h1 style="color:#906" align="center">Indian Railway Room Service</h1>
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="frm">
<form method="post" action="book_room_db.php">

				<p><b>Email</b></p>
				<input type="Email" name="email"  class="form-control"placeholder="Enter Email" required>
                <br>
                <p><b>Check In</b></p>
				<input type="text" id="date" name="check_in"class="form-control" placeholder="Choose Date" required>
                <br>
                <p><b>Check Out</b></p>
				<input type="text" id="date1" name="check_out"class="form-control"  placeholder="Choose Date" required>
                <br>
                <p><b>Room Type</b></p>
				<select name="type" class="form-control">
                <option value="AC">AC</option>
                <option value="Non-AC">Non-Ac</option>
                </select>
                <br>
                <input type="submit" name="" align="middle" class="btn btn-default" value="Submit">
             
               
               
               
</form>
</div>
</div>
</div>
</div>
</div>
<div  class="row">
	<div class="col-lg-12">
    	<h3 align="center" style="color:#906">Guests Favorite Rooms</h3>
        </div>
        </div>
        
      <br>
      <br>  
 <div class="container">       
           <div  class="row">
	             <div class="col-lg-4">
                     <img src="Project/download (1).jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/download (2).jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/download.jpg" class="img-responsive imageeffect">
                    </div>
            </div>   
            
            <br>
            <br>
            
            <div  class="row">
	             <div class="col-lg-4">
                     <img src="Project/download (3).jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/download (4).jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/download (5).jpg" class="img-responsive imageeffect">
                    </div>
            </div>       
    		<br>
            <br>
            <div  class="row">
	             <div class="col-lg-4">
                     <img src="Project/download (6).jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/images.jpg" class="img-responsive imageeffect">
                    </div>
                    
                    <div class="col-lg-4">
                     <img src="Project/download (7).jpg"class="img-responsive imageeffect">
                    </div>
            </div>  
    
    </div>
 <?php include('footer.php');
?>