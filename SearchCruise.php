
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
    </style>
<center>
<body>
<h2>Cruise  Details</h2>
            
<?php
$search=$_POST['txtsearch'];
//echo "data for dearch" .$search;
$s='%'.$search.'%';
//echo $s;
    $con = mysqli_connect("localhost","root","","cruise_database");
$sql="select * from tbl_cruise  where cruisename like '$s'";
$result=mysqli_query($con,$sql);
echo"<table border=2><tr><td><td><td>cruisename</td><td>cruise_arrival</td><td>cruise_dest</td><td>cruise_dest</td><td>cruise_date</td><td>cruise_total</td><td>cruise_other</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
           //   $s1= $row["cruise_id"];
              $s2= $row["cruisename"];
			  $s3=$row["cruise_arrival"];
			  $s4=$row["cruise_dest"];
			  $s5=$row["cruise_date"];
			  $s6=$row["cruise_duration"];
			  $s7=$row["cruise_total"];
              $s8=$row["cruise_other"];         
             echo"<tr><td><a href='login.html'>Book Now</a></td>";
              echo"<td>".$s2."</td>";
			  echo"<td>".$s3."</td>";
			echo"<td>".$s4."</td>";
			echo"<td>".$s5."</td>";
			echo"<td>".$s6."</td>";
			echo"<td>".$s7."</td>";
			echo"<td>".$s8."</td></tr>";
              
              }
            }
?>
</table>

</form>
<br>

</center>