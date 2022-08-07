<center>
<h1>
	Accomodation report
	<br>
	</h1>
	<?php
echo "Date".date("y/m/d");


	?>
<br>
<br>
 <table border="1">
 	<tr>
 		<th> Id</th>
 		<th>Type</th>
 		<th>RoomNo</th>
 		<th>Fetures</th>
 		<th>Price</th>
 
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$sql="select * from tbl_hotel";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["acid"];
              $s3=$row["atype"];
			  $s4=$row["aroomno"];
			  $s5=$row["acfeatures"];
			  $s6=$row["acprice"];
			
              	
?>

<?php 
echo"<tr><td>".$s1."</td>";
echo"<td>".$s3."</td>";
echo"<td>".$s4."</td>";
echo"<td>".$s5."</td>";
echo"<td>".$s6."</td></tr>";
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