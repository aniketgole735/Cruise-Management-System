<?php
$cid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$cid =$_POST['t1'];
$cruise_arrival=$_POST['t2'];
$cruise_destination=$_POST['t3'];
$cruise_date=$_POST['t4'];
$cruise_duration=$_POST['t5'];
$total_amount=$_POST['t6'];
$totalseat=$_POST['t7'];
$cname=$_POST['cname'];
$sql="update tbl_cruise set cruisename='$cname',cruise_arrival='&cruise_arrival',cruise_dest='$cruise_destination',cruise_date='$cruise_date',cruise_duration='$cruise_duration',cruise_total=$total_amount,cruise_other=$totalseat where cruiseid=$cid";

$r=mysqli_query($con,$sql);
if($r)
{
Echo "<br>Cruise detaiks are Updated";
}
else
{
echo "<br>sorry may be server shut down please try later";
}
?>
<a href="Admin.html">Click Here</a>