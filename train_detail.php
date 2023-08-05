               <?php include('header.php');
?>
<?php  session_start(); ?>
<?php include("db.php"); 

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


<br><br><br><br>
<div class="maincontact">
    <div class="container">
        <div class="row">
        <?php
		$source=$_POST['src'];
	$destination=$_POST['dest'];
	
	
	$_SESSION['src']=$source;
	$_SESSION['dest']=$destination;
	
	
	$query="select * from routes WHERE source='$source' AND destination='$destination'";
	$result=mysqli_query($conn,$query); 
    $rows =	mysqli_num_rows($result);
		
		 if($rows==0){ ?>
        <div class="box1">No Train are available..........!</div>
        <?php } else {?>
    
         
    

 </div>
 </div>
 </div>

         
          
         <div class="row">
         <div class="col-lg-10 col-lg-offset-1">
        
         <table width="100" height="256" border="2" bordercolor="#DFDFDF" id="bus_table" class="table table-hover table-responsive">
     
     <tr>
    
     <th width="260" scope="col">TrainNo</th>
      <th width="260" scope="col">Train Name</th>
       <th width="260" scope="col">Departure Time</th>
        <th width="260" scope="col">Arrival Time</th>
        <th width="260" scope="col">Fare</th>
          <th width="260" scope="col">Book</th>
           
        
           </tr>
           <?php if($rows==0) { echo "no results found"; } else { ?>
       
         <?php  while($res = mysqli_fetch_assoc($result)){ 
		 $train_no= $res['Train_no'];
		 $train_name= $res['Train_name'];
		 $dep_time= $res['dep_time'];
		 $arr_time= $res['arr_time'];
		 $fare= $res['fare'];
		 $_SESSION['tno']=$train_no;
		 $_SESSION['tname']=$train_name;
		 $_SESSION['dtime']=$dep_time;
		 $_SESSION['atime']=$arr_time;
		 $_SESSION['fare']=$fare;
		 ?>
          <tr>
             
              <th><?php echo $res['Train_no']; ?></th>
              <th><?php echo $res['Train_name']; ?></th>
              <th><?php echo $res['dep_time']; ?></th>
              <th><?php echo $res['arr_time']; ?></th>
               <th><?php echo $res['fare']; ?></th>
              <th><a href="book.php?fare=<?php echo $fare ?>">
              <button type="button" id="button" class="btn btn-info btn-md" data-toggle="modal" data-target=" ">Book</button></a></th>
              
             
             
              </tr>
               
		
		
	<?php  } }?>
                                                         
                    
                           
                                              
              </table>
              
        </div>
          <?php } ?>  
        </div>
    </div>
</div>
<?php include('footer.php');
?>