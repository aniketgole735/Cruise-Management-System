<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s2=$_POST['t1'];
$s3=$_POST['t2'];
$s4=$_POST['t3'];
$s5=$_POST['t4'];
$s6=$_POST['t5'];
$s7=$_POST['t6'];
$s8=$_POST['t7'];
$sql="insert into tbl_cruise(cruisename,cruise_arrival,cruise_dest,cruise_date,cruise_duration,cruise_total,cruise_other) values('$s2','$s3','$s4','$s5','$s6','$s7','$s8')";
$r=mysqli_query($con,$sql);
$sql="insert into tbl_booking(cust_name,cruise_name,cruise_amt,acprice,famt,bdate,nperson) values('','$s2',0,0,0,0,0)";
$r=mysqli_query($con,$sql);
if($r)
{
header('location:ShowCruise.php');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
