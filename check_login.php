<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s2=$_POST['uname'];
$s3=$_POST['upass'];
$utype=$_POST['utype'];
if($utype=="Admin")
{
header('location:admin.html');
}
else
{
$sql="select username,custpass from tbl_customer where username='$s2' and custpass='$s3'";
$result=mysqli_query($con,$sql);
if($result)
{
echo "You are registered with system successfully please login to use our system";
session_start();
$_SESSION["uname"]=$s2;
header('location:myact.php');
//echo"<a href=login.html>Please click to login</a>";
}
else
{
echo "sorry invalid user";
}
}

?>
