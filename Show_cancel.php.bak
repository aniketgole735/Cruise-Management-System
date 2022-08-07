
<form name="cancel_cruise" action="Save_refund.php" method="post">

<h1>Welcome Admin</h1>
<ul>
<li><a href="Cruise.html">Add new Cruise</a><br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="Accomodation.html">Add new Cruise</a></br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="Show_cancellation.php">Show  Cancellation</a><br></li>
<li><a href="refund.php">Update Refund</a><br></li>
<li><a href="Reports.html">Reports</a><br></li>
<li><a href="login.html">Logout</a><br></li>
</ul>

<?php
echo "Date".date("d/m/y");


	?>
 <table border="1">
<?php
 $s1="";
 $cprice=0;
 $cperson=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$canid=$_POST['canid'];
//$_SESSION["bookid"]=$bookid;

$sql="select * from tbl_cancellation where cid=$canid";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
                $bid=$row["cid"];
			  $s1= $row["cdate"];
              $s2=$row["Bookingid"];
			  $s3=$row["customername"];
			  $s4=$row["description"];
			  $s5=$row["tamt"];
			         
              	
?>

<?php 
echo"<tr><td>Cancellation ID</td><td><input type=text name=t1 value=".$bid."></td></tr>";
echo"<tr><td>Cancellation Date</td><td><input type=text name=t2 value=".$s1."></td></tr>";
echo"<tr><td>Booking ID</td><td><input type=text name=t3 value=".$s2."></td></tr>";
echo"<tr><td>Customer Name</td><td><input type=text name=t4 value=".$s3."></td></tr>";
echo"<tr><td>reason for cancellation</td><td><input type=text name=t5 value=".$s4."></td></tr>";
echo"<td>Paid  Amount</td><td><input type=text name=t6 value=".$s5."></td></tr>";
?>
<tr><td>Select  Refund amount</td><td>
<select name="ramt">
<option>10</option><option>12</option><option>15</option><option>20</option><option>25</option>
<option>30</option>
<option>40</option></td></tr>

</tr>
<?php
}
}
?>


<tr><td><input type="submit" id="btn" value="Confirm "></td>
<td> <input type="reset" id="btn" name="Clear"></td></tr>
</table>
*Note cancellation amount only refund as per rules and regalations.


</center>