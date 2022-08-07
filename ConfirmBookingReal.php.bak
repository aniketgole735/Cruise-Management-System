<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"$sname";
		$_SESSION["uname"]=$sname;
		$cname=$_SESSION["cname"]
?>
<style>
        body {
            font-family: sans-serif;
            background-image: url(img/1.jpg);
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
            padding: 30px;
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

        input[type="number"] {
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 300px;
            font-size: 20px;

        }

        input[type=number]:focus {
            background-color: rgba(252, 249, 61, 0.788);
        }

        input[type="date"] {
            border-radius: 5px;
            border: none;
            height: 30px;
            width: 300px;
            font-size: 20px;

        }

        input[type=date]:focus {
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

        samp {
            color: red;
        }
    </style>
    <center>
<table border="1">
    <h2>Bill</h2>
<?php
$sid=0;
$acid=$_SESSION['aid'];
$aprice=$_SESSION['aprice'];
$total=$_SESSION['total'];
$con = mysqli_connect("localhost","root","","cruise_database");
echo"<tr><td>Customer Name</td>
<td>$sname</td></tr>";
echo "<tr><td>Cruise Name</td><td> $cname</td></tr>";
echo"<tr><td>Cruise Booking Amount</td><td>$total</td></tr>";
echo"<tr><td>Accomodation Price</td><td> $aprice</td></tr>";
$famt=$total+$aprice;
$gst=($total+$aprice)*0.18;
$famt=$famt+$gst;

echo "<tr><td>GSt</td><td>$gst</td></tr>";
echo"<tr><td>Final Amount</td><td>$famt</td></tr>";
echo"<tr><td><input type=submit id=btn value=pay onclick=check()></td>
<td><input type=reset id=btn name=Clear></td></tr>";


?></table>