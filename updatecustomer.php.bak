<html>
<head>
	

   
       
<body>
        </div>
<form name="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
                <center>
    <h2>Booking Form</h2>
  <?php
               
$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_customer";
$result=mysqli_query($con,$sql);
               
                
?>

        Select Customer name <select name="custname">
             <?php
             if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["custname"];
              echo"<option>".$s1."</option>";
          }
      }
            ?>
        

        </select>
        <input type="submit" value="submit">
    </br>    
</form>
<form name="book_cruise" action="updatecust.php" method="post">
    <table border="1">
<?php
 $s1="";
 $cid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$cname=$_POST['custname'];
$sql="select * from tbl_customer where custname ='$cname'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

			  $s1= $row["custname"];
        $s3=$row["custmob"];
			  $s4=$row["custadd"];
			  $s5=$row["custmailid"];
			  $s6=$row["username"];
			  $s7=$row["custpass"];        
              	
?>
<tr><td>customer name<td><input type="text" name="cname" id="t1" value="<?php echo $s1 ?>"></td>
<td>
<tr><td>customer Mobile</td><td><input type="text" name="t2" id="t1" value="<?php echo $cid ?>"></td></tr>
<tr><td>customer Address</td><td><input type="text" name="t3" id="t2" value="<?php echo $s3 ?>"></td></tr>
<tr><td>customer email</td><td><input type="text" name="t3" id="t2" value="<?php echo $s4 ?>"></td></tr>
<tr><td>user name</td><td><input type="text" name="t4" id="t2" value="<?php echo $s5 ?>"></td></tr>
<tr><td>password</td><td><input type="text" name="t5" id="t2" value="<?php echo $s6 ?>"></td></tr>";
<!--<tr><td>Total Amount</td><td><input type="text" name="t6" id="t7" value="<?php echo $cprice ?>"></td></td></tr>
<tr><td>Total Seats</td><td><input type="text" name="t7" value="<?php echo $cperson ?>">
</td>
</tr>-->


<?php
    }
}

?>

<tr><td><input type="submit" id="btn" value="Update Customer"></td>
<td> <input type="reset" id="btn" name="Clear"></td></tr>
<br>


</table>
</center>
</form>
</div>
</body>
