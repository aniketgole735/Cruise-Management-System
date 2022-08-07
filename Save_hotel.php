<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s2=$_POST['atype'];
$s3=$_POST['t2'];
$s4=$_POST['t3'];
$s5=$_POST['t4'];

$sql="insert into tbl_hotel(atype,aroomno,acfeatures,acprice) values('$s2','$s3','$s4','$s5')";
$r=mysqli_query($con,$sql);
if($r)
{
header('location:ShowHotel.php');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
