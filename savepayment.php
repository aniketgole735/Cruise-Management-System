<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"$sname";
		$_SESSION["uname"]=$sname;
		$cname=$_SESSION["cname"];
		$amt=$_SESSION['amt'];
?>
   
<?php
$payid=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$s1=$_POST['first_name'];
$s2=$_POST['last_name'];
$s3=$_POST['email_ID'];
$s4=$_POST['amount'];
$s5=$_POST['DD'];
$s6=$_POST['MM'];
$s11=$_POST['YYYY'];
$s7=$s5+$s6+$s11;
$s8=$_POST['gendar'];
$s9=$_POST['pay'];
$s10=$_POST['cnumber'];
$s11=$_POST['cvc'];
$s12=$_POST['month'];
$s13=$_POST['year'];
$sql="insert into tbl_payment(fname,lname,amount,emailid,dob,gender,paymode,cnumber,cvc,month,year) values('$s1','$s2',$amt,'$s3','$s7','$s8','$s9','$s10','$s11','$s12','$s13')";
$r=mysqli_query($con,$sql);
if($r)
{
	echo "values are saved";
//header('location:ShowHotel.php');
}

else
{
echo "sorry may be server shut down please try later $r";
}

?>
