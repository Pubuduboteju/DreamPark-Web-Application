<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "dreampark");

?>


<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to Dream Park</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header" style="" >


				<a href="index.php" class="logo">dream park</a>
				<ul>
					<?php
                       if(isset($_SESSION['logged_in'])){

                          if ($_SESSION['logged_in']){
                    ?>
                      <a href="#" class="" style="color: white; ">Hi   </a>
					<span  style="color: white"	> |</span>
		
				    <a href="sessionDes.php"  style="color: white;">Logout </a>

                    <?php
                          }
                      }else{
                     ?>
                        <a href="adminLogin.php" class="" style="color: white; ">Admin </a>
					<span  style="color: white"	> |</span>
		
				    <a href="login.php"  style="color: white;">Login  </a>

                      <?php
                      }
                     ?>  

					<!-- <a href="adminLogin.php" class="" style="color: white; ">Admin </a> -->
					<!-- <span  style="color: white"	> |</span> -->
		
				    <!-- <a href="login.php"  style="color: white;">Login </a> -->

					<li class="selected">
						<a href="index.php">home</a>
					</li>
					<li>
						<a href="map.html">Park Map</a>
					</li>
					<li>
						<a href="rides.html">rides &amp; attractions</a>
					</li>
					<li>
						<a href="about.html">about</a>
					</li>
					<li>
						<a href="tickets.php">tickets &amp; prices</a>
					</li>
					<li>
						<a href="contact.html">contact</a>
					</li>
					<form method="POST" action="search.php" class="search_form pull-right" style=" padding-right: 20px;">
					<input type="text" name="word" class="input-block-level search-query" Placeholder="  Search">
					<!--<input type="submit" name="G" value="GO">-->
				      </form>

				</ul>
			</div>
			<div id="body">
				<div id="figure">
					<img src="images/mother-and-child.png" alt=""> <a href="tickets.html"><img src="images/discounts.png" alt=""></a>
				</div>
				<div id="section">
					<h1>rides and attractions</h1>
					<div>
						<div class="article">
							<p>
								Dream Park is a newly established theme park in Sri Lanka. We offer you so much fun and amusement activities and make sure your time here at Dream Park will  be something unforgettable. 
							</p>
							<ul>
								<li>
									<a href="rides.html"><img src="images/swing-ride.jpg" alt=""></a> <span>Newly Arrived Giant Rotator</span>
								</li>
								<li>
									<a href="rides.html"><img src="images/spring_ride.jpg" alt=""></a> <span>Newly Arrived Spring Ride</span>
								</li>
							</ul>
						</div>
						<div class="aside">
							<div>
								<h3>twitter updates</h3>
								<ul>
									<li>
										<p>
											<a href="#">&#64;themepark</a> Woooww..had a great time at DreamPark. Thanks DreamPark for giving us the oppertunity to hv such a great time.
										</p>
									</li>
									<li>
										<p>
											<a href="#">&#64;themepark</a> This is amazing. i cant belive the fun i had, unfogettable!.
										</p>
									</li>
								</ul>
							</div>
							<div>
								<h3>newsletter</h3>
								<p>
									Subscribe for the latest news on special offers and new arrivals.
								</p>
								<form action="index.html">
									<input type="text" name="email" id="email" value="email address">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div>
					<div>
						<h3>blog</h3>
						<p>
							<a href="#"><span>June 2018</span> Sri Lanka's Biggest Amusement Park wins National Award for best place to enjoy.</a>
						</p>
					</div>
					<div>
						<h3>categories</h3>
						<ul class="category">
							<li>
								<a href="index.php">home</a>
							</li>
							<li>
								<a href="about.html">about</a>
							</li>
							<li>
								<a href="rides.html">rides &amp; attractions</a>
							</li>
							<li>
								<a href="map.html">Park Map</a>
							</li>
							<li>
								<a href="tickets.html">tickets &amp; prices</a>
							</li>
							<li>
								<a href="contact.html">contact</a>
							</li>
						</ul>
					</div>
					<div>
						<h3>connect</h3>
						<ul class="connect">
							<li id="facebook">
								<a href="#">facebook</a>
							</li>
							<li id="twitter">
								<a href="#">twitter</a>
							</li>
							<li id="googleplus">
								<a href="#">googleplus</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					&copy; copyright 2018. all rights reserved. DreamPark Management Corporation. 
				</p>
			</div>
		</div>
	</div>
</body>
</html>