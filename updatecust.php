<?php
$cid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$customername=$_POST['t1'];
$customermobile=$_POST['t2'];
$customeraddress=$_POST['t3'];
$customermail=$_POST['t4'];
$username=$_POST['t5'];
$password=$_POST['t6'];
$sql="update tbl_customer set custmob='&customermobile',custadd='$customeraddress',custmailid='$customermail',username='$username',custpass=$password where custname=$custname";

$r=mysqli_query($con,$sql);
if($r)
{
Echo "<br>Customer details are Updated";
}
else
{
echo "<br>sorry may be server shut down please try later";
}
?>
<a href="Admin.html">Click Here</a>