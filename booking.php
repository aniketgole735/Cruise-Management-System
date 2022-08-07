<!DOCTYPE html>
<head>
    <style>
        body {
            font-family: sans-serif;
    background-image: url(images/1.jpg);
	background-position: center;
            background-size: cover;
            align-items: center;
        }

        form {
            padding-top: 50px;
        }

        table {
            background: rgba(0, 0, 0, 0.548);
            color: white;
            padding: 30px 30px 0px 30px;
            border: none;
            position: relative;
            justify-content: center;
            font-size: 25px;

        }

        h2 {
            color: white;
            font-size: xx-large;
            text-decoration: underline;
            text-transform: uppercase;
        }

        tr,
        td {
            border: none;
            padding: 10px;
            padding-bottom: 15px;
        }

        input[type="text"] {
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 300px;
            font-size: 20px;

        }

        input[type=text]:focus {
            background-color: rgba(252, 249, 61, 0.788);
        }

        input[type="password"] {
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 300px;
            font-size: 20px;

        }

        input[type=password]:focus {
            background-color: rgba(252, 249, 61, 0.788);
        }

        input[type="email"] {
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 300px;
            font-size: 20px;

        }

        input[type=email]:focus {
            background-color: rgba(252, 249, 61, 0.788);
        }

        #btn {
            /* height: 40px; */
            font-weight: 400;
            text-align: center;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            background-color: #007bff;
            color: #fff;
            transition: 0.8s;
            width: 100%;
        }

        #btn:hover {
            background-color: #fff;
            color: #007bff;
        }

        select {
            border-radius: 5px;
            height: 30px;
            width: 300px;
        }

        .new-user {
            text-decoration: none;
            color: red;
            font-size: x-large;
            background-color: rgba(0, 0, 0, 0.548);
            padding: 0px 238.5px;
            padding-bottom: 10px;
            border-top: 1px solid white;
            transition: 1s;
        }

        .new-user:hover {
            color: white;
            font-size: x-large;
            background-color: rgba(0, 0, 0, 0.548);
            padding: 0px 238px;
            padding-bottom: 10px;

        }

        samp {
            color: red;
        }
   </script>
</head>
<body>
<form name="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 	 <center>
	<font color="white">
      <a href="myact.php"><font color="white">HOME</a>
                       
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="booking.php"><font color="white">Book Cruice</a> </font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     
                   
                  <a href="facilities.html"><font color="white">View Facilities/font></a><  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="ViewHotel.php"><font color="white">View Accomodation/font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="Cancellation.php"><font color="white">Cruise Cancel Form/font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
					     
   
		
       

                <center>
    <h2>Booking Form</h2>
  <?php
               
$con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_cruise";
$result=mysqli_query($con,$sql);

                 
                
?>

        Select Cruise<select name="cruise_type">
             <?php
             if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
              $s1= $row["cruisename"];
              echo"<option>".$s1."</option>";
          }
      }
            ?>
        

        </select>
        <input type="submit" value="submit">
    </br>    
</form>
<form name="book_cruise" action="Addbooking.php" method="post">
    <table border="1">
<?php
 $s1="";
 $cprice=0;
 $cperson=0;
$con = mysqli_connect("localhost","root","","cruise_database");
$cname=$_POST['cruise_type'];
$_SESSION["name"]=$cname;

$sql="select * from tbl_cruise where cruisename ='$cname'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
                $img=$row["cruise_id"];
			  $s1= $row["cruisename"];
              $s3=$row["cruise_arrival"];
			  $s4=$row["cruise_dest"];
			  $s5=$row["cruise_date"];
			  $s6=$row["cruise_duration"];
			  $cprice=$row["cruise_total"];
             $cperson=$row["cruise_other"];        
              	
?>
<tr><td>Cruise Name</td>
<td>
<?php 
Echo"$s1";
$imgname="".$img.".jpg";
$_SESSION["cname"]=$s1;
?>
</td><td rowspan=11><img src=images/<?php echo $imgname; ?> width=400 height=400></td></tr>";
<?php 

echo"<tr><td>cruise_arrival</td><td>".$s3."</td></tr>";
echo"<tr><td>cruise_destination</td><td>".$s4."</td></tr>";
echo"<tr><td>cruise_date</td><td>".$s5."</td></tr>";
echo"<td>cruise_duration</td><td>".$s6."</td></tr>";
?>
<tr><td>Total Amount</td><td>
<input type="text" name="t1" id="t7" value="<?php echo $cprice ?>"></td></td></tr>
<tr><td>Total Seats</td><td><input type="text" name="t2" value="<?php echo $cperson ?>">
</td>
</tr>


<?php
    }
}
$sum=0;
$sql="select * from tbl_booking where cruise_name ='$cname'";
				$result=mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) 
{
			while($row = mysqli_fetch_assoc($result)) {

			$sum=$sum+$row['nperson'];
			}
		?>
		<tr><td>No of Booked Seats</td><td><input type="text" name="bseat" value="
		<?php echo $sum; ?>"></td></tr>
		<?php 

		$available=$cperson-$sum;
		?>
		<tr><td>No of Available Seats</td><td><input type="text" name="aseat" value="<?php echo $available; ?>"></td></tr>
		<?php 

		if($available>=1)
		{
		?>
		<tr><td>Enter No of Ticket</td>
		<td><input type="text" name="t3"></td></tr>
	<?php

		}
		else
		{
		echo"<tr><td colspan=2><td><input type=Text placeholder='No seats are available please select another Cruise'></td></tr>" ; 
		}
		$_SESSION['aseat']=$available;



?>
<tr><td><input type="submit" id="btn" value="Book Cruise"></td>
<td> <input type="reset" id="btn" name="Clear"></td></tr>
<br>
<?php
}
else
{
	echo "Seats are available";
}
?>

</table>
</center>
</form>
</div>
</body>
