<form name="frmlogin" action="ShowCruise.php" method="post">
<center>
<h2>Customer Details</h2>
            
<?php
    $con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_customer";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Customer Id</td><td>Customer Name</td><td>Mobile No</td><td>Address</td><td>Email</td><td>Username</td><td>Password</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["custid"];
              $s2= $row["custname"];
			  $s3=$row["custmob"];
			  $s4=$row["custadd"];
			  $s5=$row["custmailid"];
			  $s6=$row["usename"];
			  $s7=$row["custpass"];        
              echo"<tr><td>".$s1."</td>";
              echo"<td>".$s2."</td>";
			  echo"<td>".$s3."</td>";
			echo"<td>".$s4."</td>";
			echo"<td>".$s5."</td>";
			echo"<td>".$s6."</td>";
			echo"<td>".$s7."</td></tr>";
			/*echo"<td>".$s8."</td></tr>"*/
              
              }
            }
?>
</table>

</form>
<br>
<a href=".php"></a><br><br>
<a href="category.php"></a>
</center>
