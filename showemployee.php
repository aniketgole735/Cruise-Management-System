<form name="frmlogin" action="ShowCruise.php" method="post">
<center>
<h2>Employee Details</h2>
            
<?php
    $con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_employee";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Employee Id</td><td>Employee Name</td><td>Joining Date</td><td>Contact No</td><td>Email</td><td>Address</td><td>Designation</td><td>Basic Salary</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["sid"];
              $s2= $row["sname"];
			  $s3=$row["jdate"];
			  $s4=$row["contactno"];
			  $s5=$row["email"];
			  $s6=$row["address"];
			  $s7=$row["designation"];
              $s8=$row["bsalary"];         
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
<br>
<a href=".php"></a><br><br>
<a href="category.php"></a>
</center>
