<center>
<h1>
	Employee report
	<br>
	</h1>
	<?php
echo "Date".date("d/m/y");


	?>
<br>
<br>
 <table border="1">
 	<tr>
 		<th> Id</th>
 		<th> Name</th>
 		<th> Joining Date</th>
 		<th>Contact No</th>
 		<th>Email</th>
 		<th>Address</th>
 		<th>Designation</th>
 		<th>Salary</th>
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$sql="select * from tbl_employee";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["sid"];
              $s3=$row["sname"];
			  $s4=$row["jdate"];
			  $s5=$row["contactno"];
			  $s6=$row["email"];
			  $s7=$row["address"];
			  $s8=$row["designation"];
			  $s9=$row["bsalary"];
              	
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