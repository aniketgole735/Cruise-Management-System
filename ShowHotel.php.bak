<body>
<h1>Show Accomodation</h1>
<?php
$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_hotel";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Accomodation id</td><td>Type</td><td>RoomNo</td><td>Feature</td><td>Price</td></tr>";
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["acid"];
              $s2= $row["atype"];
			$s3= $row["aroomno"];
			  $s4=$row["acfeatures"];
			  $s5=$row["acprice"];
                        
				echo"<tr><td>".$s1."</td>";
				echo"<td>".$s2."</td>"; 
				echo"<td>".$s3."</td>";
				echo"<td>".$s4."</td>";
				echo"<td>".$s5."</td></tr>";
              
              }
            }
?>
</table>