<center>
<h1>
	Cruise report
	<br>
	</h1>
	<?php
echo "Date".date("y/m/d");


	?>
<br>
<br>
 <table border="1">
 	<tr>
 		<th>Cruise Id</th>
 		<th>Cruise Name</th>
 		<th> Arrival</th>
 		<th>Destination</th>
 		<th>Date</th>
 		<th>Duration</th>
 		<th>Amount</th>
 		<th>No of person</th>
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$sql="select * from tbl_cruise";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["cruise_id"];
              $s3=$row["cruisename"];
			  $s4=$row["cruise_arrival"];
			  $s5=$row["cruise_dest"];
			  $s6=$row["cruise_date"];
			  $s7=$row["cruise_duration"];
			  $s8=$row["cruise_total"];
			  $s9=$row["cruise_other"];
              	
?>

<?php 
echo"<tr><td>".$s1."</td>";
echo"<td>".$s3."</td>";
echo"<td>".$s4."</td>";
echo"<td>".$s5."</td>";
echo"<td>".$s6."</td>";
echo"<td>".$s7."</td>";
echo"<td>".$s8."</td>";
echo"<td>".$s9."</td></tr>";
?>


<?php
	}
}
?>
</table>
<br>
<br>
<input type="Submit" value="Print" onclick="window.print()">
<a href="Admin.html"><input type="reset" value="Home"></a>
</center>