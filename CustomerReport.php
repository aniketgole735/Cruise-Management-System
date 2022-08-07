<center>
<h1>
	Customer report
	<br>
	</h1>
	<?php
echo "Date".date("d/m/y");


	?>
<br>
<br>
 <table border="1">
 	<tr>
 		<th>Customer Id</th>
 		<th>Customer Name</th>
 		<th>Mobile</th>
 		<th>Address</th>
 		<th>Email Id</th>
 		<th>Username</th>
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$sql="select * from tbl_customer";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["custid"];
              $s3=$row["custname"];
			  $s4=$row["custmob"];
			  $s5=$row["custadd"];
			  $s6=$row["custmailid"];
			  $s7=$row["username"];
              	
?>

<?php 
echo"<tr><td>".$s1."</td>";
echo"<td>".$s3."</td>";
echo"<td>".$s4."</td>";
echo"<td>".$s5."</td>";
echo"<td>".$s6."</td>";
echo"<td>".$s7."</td></tr>";
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