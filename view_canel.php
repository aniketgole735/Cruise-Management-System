 <table border="1">
<?php
 $s1="";
 $cprice=0;
 $cperson=0;
$con = mysqli_connect("localhost","root","","cruise_database");
//$bookid=$_POST['bookid'];
//$_SESSION["bookid"]=$bookid;

$sql="select * from tbl_booking";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
                
			  $s1= $row["cruise_name"];
              $s3=$row["cust_name"];
			  $s4=$row["cruise_amt"];
			  $s5=$row["acprice"];
			  $s6=$row["famt"];
			  $bdate=$row["bdate"];
              $nperson=$row["nperson"];        
              	
?>

<?php 
echo"<tr><td>Booking Date/td><td>".$bdate."</td></tr>";
echo"<tr><td>Customer Name</td><td>".$s3."</td></tr>";
echo"<tr><td>Cruise Name/td><td>".$s1."</td></tr>";
echo"<tr><td>Cruise Amount</td><td>".$s4."</td></tr>";
echo"<td>Accomodation Price</td><td>".$s5."</td></tr>";
echo"<tr><td>No of tickets</td><td>".$nperson."</td></tr>";
?>
<tr><td>Reason For cancellation/td><td>
<input type="text" name="t1" id="t7"></td></td></tr>

</tr>
<?php
}
}
?>

</table>
</center>