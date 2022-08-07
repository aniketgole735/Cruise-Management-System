<ul>
                    <li><a href="myact.php">HOME</a>                     
                    </li>
                    <li><a href="booking.php">Book Cruice</a>                   
                    </li>
                    <li><a href="ViewCruise.php">View Cruise</a></li>
                    <li><a href="ViewHotel.php">View Accomodation</a></li>
                    <li><a href="Cancellation.php">Cruise cancel Form</a></li>
                    <li><a href="login.html">Logout</a></li>
        
                </ul>
 Welcome User
		<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"$sname";
		$_SESSION["uname"]=$sname;
		?>
		<br>
		<?php
echo "Date".date("d/m/y");
$date=date("d/m/y");

	?>
<?php
$cid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s1=$_POST['t1'];
$s2=$_POST['t3'];
$s3=$_POST['t8'];
$s4=$_POST['tamt'];
$sql="insert into tbl_cancellation(cdate,Bookingid,customername,description,tamt) values('$date',$s1,'$sname','$s3',$s4)";
$r=mysqli_query($con,$sql);
if($r)
{
Echo "Thank you.Your Request accepted please wait we will you reach you soon and you will get refund details";
}
else
{
echo "sorry may be server shut down please try later";
}
?>