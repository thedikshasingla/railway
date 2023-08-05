<?php session_start();?>
<br>
<br>
<br>
<div class="row text-center">
<div class="col-lg-12">
<h3 align="center" style="color:#F00"><b>Your Platform Ticket Booked Succesfully</b></h3>
<table border="1" align="center" width="500" height="500">
<tr>
<td>Station</td>
<td>
<?php echo $_SESSION['st']."<br>";?>
</td>
</tr>
<tr>
<td>Date</td>
<td>
<?php echo $_SESSION['dt']."<br>";?>
</td>
</tr>
<tr>
<td>Time</td>
<td>
<?php echo $_SESSION['tm']."<br>";?>
</td>
</tr>
<tr>
<td>No of person</td>
<td>
<?php echo $_SESSION['pr']."<br>";?>
</td>
</tr>
<tr>
<td>Total Fare</td>
<td>
<?php echo $_SESSION['tf']."<br>";?>
</td>
</tr>
<tr>
<td>Note:</td>
<td>
Tickect is valid for only 3 Hours
<br />
Tickect is not Transferable
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" value="Print" onClick="window.print() "></td>
</tr>
</table>
</div>
</div>
  