
<ul>
<li><a href="Admin.html">Admin Home</a><br></li>
<li><a href="Cruise.html">Add new Cruise</a><br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="Accomodation.html">Add new Cruise</a></br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="ShowCancellation.php">Show  Cruise</a><br></li>
<li><a href="refund.php">Update Refund</a><br></li>
<li><a href="Reports.html">Reports</a><br>
<li><a href="login.html">Logout</a><br>	
</ul>
<<form name="cancel_cruise" action="Show_cancel.php" method="post">
        




        <center>


    <h2>Refund Form</h2>
 
<table border="1">
<tr><td> Cancellation Date</td><td><input type="text" name="t1" id="t1" value="	<?php
echo date("d/m/y");	?>"></td></tr>
<tr><td>Select Cancellation Id</td><td>
	<select name="canid">
<?php

$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_cancellation";
$result=mysqli_query($con,$sql);
             if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["cid"];
              echo"<option>".$s1."</option>";
          }
      }


  ?>



 </select></td></tr></table>
        <input type="submit" value="submit">
    </br>    
   
</form>
</body>
