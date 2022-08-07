<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s1=$_POST['t2'];
$s2=$_POST['t3'];
$s3=$_POST['t4'];
$s4=$_POST['t5'];
$s5=$_POST['t6'];
$s6=$_POST['t7'];
$s7=$_POST['t8'];
$s8=$_POST['t9'];
$s9=$_POST['t10'];



$sql="insert into tbl_salary(ename,saldate,bsal,hra,da,ma,pf,tax,totalallow,netpay) values('$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')";
$r=mysqli_query($con,$sql)
if($r)
{
header('location:ShowHotel.php');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
