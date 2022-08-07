<form name="frmlogin" action="ShowCruise.php" method="post">
<center>
<h2>Employee Details</h2>
            
<?php
    $con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_employee";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Employee Name</td><td>Joining Date</td><td>Basic Salary</td><td>HRA</td><td>DA</td><td>MA</td><td>PF</td><td>TAX</td><td>Total Allowance</td><td>Net Pay</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["sid"];
              $s2= $row["ename"];
			  $s3=$row["saldate"];
			  $s4=$row["bsal"];
			  $s5=$row["hra"];
			  $s6=$row["da"];
			  $s7=$row["ma"];
              $s8=$row["pf"]; 
              $s9=$row["tax"]; 
              $s10=$row["totalallow"];
               $s11=$row["netpay"];
              echo"<tr><td>".$s1."</td>";
              echo"<td>".$s2."</td>";
			  echo"<td>".$s3."</td>";
			echo"<td>".$s4."</td>";
			echo"<td>".$s5."</td>";
			echo"<td>".$s6."</td>";
			echo"<td>".$s7."</td>";
			echo"<td>".$s8."</td>";
			echo"<td>".$s9."</td>";
			echo"<td>".$s10."</td>";
			echo"<td>".$s11."</td>";
              
              }
            }
?>
</table>

</form>
<br>
<a href=".php"></a><br><br>
<a href="category.php"></a>
</center>
