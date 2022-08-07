<form name="f1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<center>

<h1>
	Cruisewise Booking report
	<br>
	</h1>
	<?php
echo "Date".date("y/m/d");


	?>


 <?php
                if (isset($_POST['submit']))
                {
                    if (isset($error))
                    {
                        echo "<p style='color:red;'>" 
                        . $error . "</p>";
                    }
                }
               
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

<br>
<br>
 <table border="1">
 	<tr>
 		<th>Booking Id</th>
 		<th>Booking Date</th>
 		<th> Customer Name</th>
 		<th>Cruise Amount</th>
 		<th>Accomodation Amount</th>
 		<th>Total Amount</th>
 		
 	</tr>


<?php
 $s1="";
 $cprice=0;
$con = mysqli_connect("localhost","root","","cruise_database");

$cname=$_POST['cruise_type'];
$_SESSION["name"]=$cname;
$sql="select * from tbl_booking where cruise_name ='$cname'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
			  $s1= $row["bookid"];
			  $s2=$row["bdate"];
              $s3=$row["cust_name"];
			  $s4=$row["cruise_amt"];
			  $s5=$row["acprice"];
			  $s6=$row["famt"];
			  
			 
              	
?>

<?php 
echo"<tr><td>".$s1."</td>";
echo"<td>".$s2."</td>";
echo"<td>".$s3."</td>";
echo"<td>".$s4."</td>";
echo"<td>".$s5."</td>";
echo"<td>".$s6."</td></tr>";
?>


<?php
	}

}
else
		echo "No records Found";
?>
</table>
<br>
<br>
<input type="Submit" value="Print" onclick="window.print()">
<a href="Admin.html"><input type="reset" value="Home"></a>
</center>
</form>