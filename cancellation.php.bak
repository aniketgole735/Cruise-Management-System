<html>
<body>
	

<ul>
                    <li><a href="myact.php">HOME</a>                     
                    </li>
                    <li><a href="booking.php">Book Cruice</a>                   
                    </li>
                    <li><a href="ViewCruise.php">View Cruise</a></li>
                    <li><a href="ViewHotel.php">View Accomodation</a></li>
                    <li><a href="Cancellation.php">Cruise cancel Form</a></li>
                     <li><a href="View_refund.php">Refund Details</a></li>
                    <li><a href="login.html">Logout</a></li>
        
                </ul>

<form name="cancel_cruise" action="view_cancel.php" method="post">
        <center>

    <h2>Cancellation Form</h2>
    Welcome User
		<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"$sname";
		$_SESSION["uname"]=$sname;
		?>
<table border="1">
<tr><td> Cancellation Date</td><td><input type="text" name="t1" id="t1" value="	<?php
echo date("d/m/y");	?>"></td></tr>
<tr><td>Booking Id</td><td>
	<select name="bookid">
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
$sql="select * from tbl_booking where cust_name='$sname'";
$result=mysqli_query($con,$sql);
             if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["bookid"];
              echo"<option>".$s1."</option>";
          }
      }


  ?>



 </select></td></tr></table>
        <input type="submit" value="submit">
    </br>    
   
</form>
</body>
