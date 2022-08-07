  <form name="form"  method="post" action="ShowCruise_Schedule.php">
   <center>
    <h2>Booking Form</h2>
  <?php
                            
               
$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_cruise";
$result=mysqli_query($con,$sql);

                 
                
?>

        Select Cruise<select name="cruise_type">
             <?php
             if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["cruisename"];
              echo"<option>".$s1."</option>";
          }
      }
            ?>
        

        </select>
        <input type="submit" value="submit">
    </br>    
</form>
<form name="" method="post" action="">
<hr>
<h2>Select Schedule--Journey Date</h2>
<table border=1>
<tr><td>Schedule No</td><td>Journey Date</td><td>End Date</td><td>Cruise Name</td><td>Boarding Time</td></tr>
<?php

$cname=$_POST['cruise_type'];
echo "Crise name".$cname;
$sql="select * from tbl_schedule where cruisename='$cname'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
                $s1=$row["scheduleno"];
			    $s2= $row["sc_start_date"];
                $s3=$row["sc_end_date"];
			    $s4=$row["cruisename"];
			    $s5=$row["boarding_time"];
			  ?>
			  
			<tr><td><input type=radio name=r1 value=<?php $s3 ?>$s1</td>
              <?php 
				echo"<td>".$s2."</td>";
				echo"<td>".$s3."</td>";
				echo"<td>".$s4."</td>";
				echo"<td>".$s5."</td></tr>";
}
}



?>
