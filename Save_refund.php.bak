<h1>Welcome Admin</h1>
<ul>
<li><a href="Cruise.html">Add new Cruise</a><br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="Accomodation.html">Add new Cruise</a></br></li>
<li><a href="ShowCruise.php">Show  Cruise</a><br></li>
<li><a href="ShowCancellation.php">Show  Cruise</a><br></li>
<li><a href="refund.php">Update Refund</a><br></li>
<li><a href="Reports.html">Reports</a><br>
</ul>

		<br>
		<?php
echo "Date".date("d/m/y");
$date=date("d/m/y");

	?>
<?php
$cid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s1=$_POST['t1'];
$s2=$_POST['t4'];
$s3=$_POST['t3'];
$s4=$_POST['t6'];
$ramt=$_POST['ramt'];

$refund=$s4*$ramt/100;
Echo "<br>Customer Name=".$s2;
Echo" <br>Paid Amount=".$s4;
Echo "<br>Refund Amount  = $refund";
$sql="insert into tbl_refund(rdate,cancelid,customername,bookingid,amount,ramt) values('$date',$s1,'$s2',$s3,$s4,$refund)";
$r=mysqli_query($con,$sql);
if($r)
{
Echo "<br>Refund Details are saved";
}
else
{
echo "<br>sorry may be server shut down please try later";
}
$sql="delete from tbl_booking where bookid=$s3";
$r=mysqli_query($con,$sql);
Echo"<br>Cutomer Booking details are Updated And seats are free..";
?>