


<form name="cancel_cruise" action="Save_cancellation.php" method="post">


<ul>
                    <li><a href="myact.php">HOME</a></li>                     
                    
                    <li><a href="booking.php">Book Cruice</a> </li>                  
                    
                    <li><a href="ViewCruise.php">View Cruise</a></li>
                    <li><a href="ViewHotel.php">View Accomodation</a></li>
                    <li><a href="Cancellation.php">Cruise cancel Form</a></li>
                    <li><a href="login.html">Logout</a></li>
        
                </ul>
 Welcome User
		<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"$sname";
		$_SESSION["uname"]=$sname;
		?>

<?php
echo "Date".date("d/m/y");


	?>
 <table border="1">
<?php
 $s1="";
 $cprice=0;
 $cperson=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$bookid=$_POST['bookid'];
//$_SESSION["bookid"]=$bookid;

$sql="select * from tbl_booking where bookid=$bookid";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
                $bid=$row["bookid"];
			  $s1= $row["cruise_name"];
              $s3=$row["cust_name"];
			  $s4=$row["cruise_amt"];
			  $s5=$row["acprice"];
			  $s6=$row["famt"];
			  $bdate=$row["bdate"];
              $nperson=$row["nperson"];        
              	
?>

<?php 
echo"<tr><td>Booking ID</td><td><input type=text name=t1 value=".$bid."></td></tr>";
echo"<tr><td>Booking Date</td><td><input type=text name=t2 value=".$bdate."></td></tr>";
echo"<tr><td>Customer Name</td><td><input type=text name=t3 value=".$s3."></td></tr>";
echo"<tr><td>Cruise Name</td><td><input type=text name=t4 value=".$s1."></td></tr>";
echo"<tr><td>Cruise Amount</td><td><input type=text name=t5 value=".$s4."></td></tr>";
echo"<td>Accomodation Price</td><td><input type=text name=t6 value=".$s5."></td></tr>";
echo"<td>Total Amount</td><td><input type=text name=tamt value=".$s6."></td></tr>";
echo"<tr><td>No of tickets</td><td><input type=text name=t7 value=".$nperson."></td></tr>";
?>
<tr><td>Enter Reason For cancellation</td><td>
<input type="text" name="t8" id="t8"></td></td></tr>

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