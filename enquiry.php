<?php
$sid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s1=$_POST['t1'];
$s2=$_POST['t2'];
$s3=$_POST['t3'];
$s4=$_POST['t4'];
$s5=$_POST['t5'];


$sql="insert into tbl_enquiry(ename,contactno,address,emailid,enquiryfor ) values('$s1','$s2','$s3','$s4','$s5')";
$r=mysqli_query($con,$sql);
if($r)
{
header('location:index.html');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
