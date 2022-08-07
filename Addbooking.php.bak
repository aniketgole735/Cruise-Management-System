<form name="f1" method="post" action="ConfirmBooking.php">
<?php
		// session_start();
		// $sname=$_SESSION["uname"];
		// echo"$sname";
		// $_SESSION["uname"]=$sname;
		// $cname=$_SESSION["cname"]
?>
Welcome User :
<?php
        session_start();
        $sname=$_SESSION["uname"];
        echo"$sname";
        $_SESSION["uname"]=$sname;
        $cname=$_SESSION["cname"];
        $_SESSION["cname"]=$cname;

    ?>
</br>
    Selected tour Details
    <table border="1">
<?php
 $s1="";
 $cprice=0;
 $nperson=$_POST['t3'];
 $available=$_SESSION['aseat'];
 if($nperson>$available)
 {
    echo "Sorry No seats are available for this cruise Go back select another tour ";
echo "<a href='booking.php'>Go back</a>";
}
else
{


$con = mysqli_connect("localhost","root","","cruise_database");

$_SESSION["name"]=$cname;

$sql="select * from tbl_cruise where cruisename ='$cname'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["cruisename"];
              $s3=$row["cruise_arrival"];
              $s4=$row["cruise_dest"];
              $s5=$row["cruise_date"];
              $s6=$row["cruise_duration"];
              $cprice=$row["cruise_total"];
              $cperson=$row["cruise_other"];        
                
?>
<tr><td>Cruise Name</td>
<td>
<?php 
Echo"$s1";
$_SESSION["cname"]=$s1;
$cparice=0;
$qty=0;
$total=0;
echo"<tr><td>cruise_arrival</td><td>".$s3."</td></tr>";
echo"<tr><td>cruise_destination</td><td>".$s4."</td></tr>";
echo"<tr><td>cruise_date</td><td>".$s5."</td></tr>";
echo"<td>cruise_duration</td><td>".$s6."</td></tr>";
?>
<tr><td>Total Seat</td><td>
<input type="text" name="t1" id="t1" value="<?php echo $cperson ?>"></td></td></tr>
<tr><td>Ticket Amount</td><td><input type="text" name="t2" value="<?php echo $cprice ?>">
</td>
</tr>
<tr><td>No of Ticket</td>
<td><input type="text" name="t3" value="<?php echo $nperson ?>"></td></tr></td></table>
<br><br><br><br>
<?php
$_SESSION['bamt']=$cprice;
$_SESSION['qty']=$qty;
    }
}
?>
<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$aseat=$_POST['t1'];




?>
<?php
$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_hotel";
$result=mysqli_query($con,$sql);
echo"<table border=1><tr><td>Select Accomodation</td><td>Type</td><td>RoomNo</td><td>Feature</td><td>Price</td></tr>";
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["acid"];
              $s2= $row["atype"];
			  $s3= $row["aroomno"];
			  $s4=$row["acfeatures"];
			  $s5=$row["acprice"];
echo"<tr><td><font color=white><input type=radio name=r1 value=<?php $s1 ?>$s1</td>";
?>
<td>
<input type=text name=atype value="<?php echo $s2 ?>">
</td>
<td>
<input type=text name=aroomno value="<?php echo $s3 ?>">
</td>
<td>
<input type=text name=acfeatures value="<?php echo $s4 ?>">
</td>
<td>
<input type=text name=acprice value="<?php echo $s5 ?>">
</td></tr>
<tr><td>
</td></tr>
<?php
}
}
$_SESSION['total']=$total;
$_SESSION['acid']=$s1;
$_SESSION['acprice']=$s5;

?>
</table>
<br>
<br>
<br>
<center>
<input type="submit" id='btn2' value="Confirm Booking"></center>	
<?php
}
?>
</form>
