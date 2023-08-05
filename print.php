<?php session_start();?>
<br>
<br>
<br>
<div class="row text-center">
<div class="col-lg-12">
<h3 align="center" style="color:#F00"><b>Your Ticket Booked Succesfully</b></h3>
<table border="1" align="center" width="500" height="500">
<tr>
<td>Source</td>
<td>
<?php echo $_SESSION['src']."<br>";?>
</td>
</tr>
<tr>
<td>Destination</td>
<td>
<?php echo $_SESSION['dest']."<br>";?>
</td>
</tr>
<tr>
<td>Train Number</td>
<td>
<?php echo $_SESSION['tno']."<br>";?>
</td>
</tr>
<tr>
<td>Train Name</td>
<td>
<?php echo $_SESSION['tname']."<br>";?>
</td>
</tr>
<tr>
<td>Departure Time</td>
<td>
<?php echo $_SESSION['dtime']."<br>";?>
</td>
</tr>
<tr>
<td>Arrival Time</td>
<td>
<?php echo $_SESSION['atime']."<br>";?>
</td>
</tr>
<tr>
<td>Total Fare</td>
<td>
<?php echo $_SESSION['tfare']."<br>";?>
</td>
</tr>
<tr>
<td>Name of person</td>
<td>
<?php echo $_SESSION['fname']."<br>";
?>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" value="Print" onClick="window.print() "></td>
</tr>
</table>
</div>
</div>
  