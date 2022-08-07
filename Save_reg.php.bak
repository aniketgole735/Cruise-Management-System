<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
if($con)
echo"connection done";
$s2=$_POST['t1'];
$s3=$_POST['t2'];
$s4=$_POST['t3'];
$s5=$_POST['t4'];
$s6=$_POST['t5'];
$s7=$_POST['t6'];
$sql="insert into tbl_customer(custname,custmob,custadd,custmailid,username,custpass) values('$s2','$s3','$s4','$s5','$s6','$s7')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "You are registered with system successfully please login to use our system";
header('location:login.html');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
