<!DOCTYPE html>
<html>
<head>
	<title>Cruise Website</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
<form name="frm1" action="SearchCruise.php" method="post">
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@Cruise Websitepro.com" itemprop="email"><i class="fas fa-envelope"></i> info@Cruise Websitepro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
						
						
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="images/site-logo.png" alt="Logo Image">
						<!-- <h1>Cruise Website</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">

                    <li class="active"><a href="myact.php">HOME</a>
                       
                    </li>
                    <li><a href="booking.php">Book Cruice</a>                      
                    </li>
                    <li><a href="facilities.html">View Facilities</a></li>
                    <li><a href="ViewHotel.php">View Accomodation</a></li>
                    <li><a href="Cancellation.php">Cruise Cancel Form</a></li>
                 
        
                </ul>
         
					</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
	
   
		
              	<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="images/bg.jpg" alt="Image of Bannner">
				<img src="images/cruise1.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1><font color=white>Welcome User	</font>
					<?php
		session_start();
		$sname=$_SESSION["uname"];
		echo"<font color=white>$sname</font>";
		?> </h1>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		
		<div class="page-heading">
			<div class="container">
				
			</div>
		</div>
<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/cruise1.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">First Time Cruisers >>></a>
							<div class="box-body" itemprop="description">
								<p>First time cruisers, do you have questions about cruising, planning or booking a cruise? Then you're in the right place. This overview will introduce you to what makes cruising such a unique and memorable way to travel, where you can go, what the rooms are like, what you can do onboard, and how to get started planning.</p>
								<section itemprop="time">
									
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/balcony.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Immersive Destinations>>></a>
							<div class="box-body" itemprop="description">
								<p>Choosing a cruise line that allows you to experience the most at every stop along the way is priority one.Embark on adventure with exclusive Discovery™ and Animal Planet™ shore excursions, and enjoy late night departures and overnight stays with More Ashore.</p>
								
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/balcony2.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Where Can I Go? >>></a>
							<div class="box-body" itemprop="description">
								<p>Escorted tours that will take you to the most memorable sites and let you experience the culture. Princess offers a variety of shore excursions to first time cruisers based on interests, activity levels as well as some tailored for families. </p>
								
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>