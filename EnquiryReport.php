<center>
<h1>
	Enquiry report
	<br>
	</h1>
	<?php
echo "Date".date("y/m/d");


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
 		<th>Enquiry For</th>
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$sql="select * from tbl_enquiry";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["eid"];
              $s3=$row["ename"];
			  $s4=$row["contactno"];
			  $s5=$row["address"];
			  $s6=$row["emailid"];
			  $s7=$row["enquiryfor"];
              	
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