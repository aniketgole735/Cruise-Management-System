<center>
<h2>Cruise  Details</h2>
            
<?php

    $con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_cruise";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Cruise Id</td><td>cruisename</td><td>cruise_arrival</td><td>cruise_dest</td><td>cruise_dest</td><td>cruise_date</td><td>cruise_total</td><td>cruise_other</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["cruise_id"];
              $s2= $row["cruisename"];
			  $s3=$row["cruise_arrival"];
			  $s4=$row["cruise_dest"];
			  $s5=$row["cruise_date"];
			  $s6=$row["cruise_duration"];
			  $s7=$row["cruise_total"];
              $s8=$row["cruise_other"];         
              echo"<tr><td>".$s1."</td>";
              echo"<td>".$s2."</td>";
			  echo"<td>".$s3."</td>";
			echo"<td>".$s4."</td>";
			echo"<td>".$s5."</td>";
			echo"<td>".$s6."</td>";
			echo"<td>".$s7."</td>";
			echo"<td>".$s8."</td></tr>";
              
              }
            }
?>
</table>

</form>