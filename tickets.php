<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "dreampark");

?>


<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Tickets and Prices - DreamPark</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<a href="index.php" class="logo">Dream park</a>
				<ul>
					<li>
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
					<li class="selected">
						<a href="tickets.php">tickets &amp; prices</a>
					</li>
					<li>
						<a href="contact.html">contact</a>
					</li>
				</ul>
			</div>
			<div id="body">
				<div id="content">
					<h1>Ticket and Prices</h1>
					<ul class="tickets">
						
							 <?php

                        $query2 = "SELECT * FROM package ORDER BY pId DESC ";
                        $result2 = mysqli_query($connect, $query2);
                        if(mysqli_num_rows($result2) > 0)
                        {
                          while($row2 = mysqli_fetch_array($result2))
                            {

                            
                         ?>


                         <li>
							<h3><?php echo $row2["pName"] ?></h3>
							<p>
								<?php echo $row2["description"] ?>
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; <?php echo $row2["price"] ?></span>
								</li>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
							<form method="post" action="">
							<input type="hidden" name="hidden_postid" value="<?php echo $row2["pId"]; ?>">
							 <?php
             if(isset($_SESSION['aLogged_in'])){

                 if ($_SESSION['aLogged_in']){
          ?>
            <input class="pull-left" type="submit" name="delete_post" value="Delete" >



            <?php
if(isset($_POST["delete_post"]))
{

mysqli_query($connect,"delete from package where pId = $_POST[hidden_postid] ");
echo '<script>window.location="sessionDes.php"</script>';


}
}
}

?>          </form>
						</li>
						 <?php 
                     }
                   }
                 ?>
					

						<li>
							<h3>Family Package</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a enim elementum massa placerat scelerisque.
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
						</li>
						<li>
							<h3>Supreme Package</h3>
							<p>
								All amusement area activities and water related activities.
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
						</li>
						<li>
							<h3>Package A</h3>
							<p>
								Sed tempor lacus in nibh iaculis non interdum tellus porta. Morbi nulla urna, ultrices id ultrices quis, lacinia at dolor.
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
						</li>
						<li>
							<h3>Students</h3>
							<p>
								Morbi nulla urna, ultrices id ultrices quis, lacinia at dolor.
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
						</li>
						<li>
							<h3>VIP Card</h3>
							<p>
								20% discount on 2nd visit, 25% discount from 3rd visit onward.
							</p>
							<ul>
								<li>
									<span>This is just a place holder</span><span>&#36; 000</span>
								</li>
							</ul>
						</li>
						<li class="last">
							<h3>Comming Soon</h3>
							<p>
								put some description here</a>.
							</p>
						</li>
					</ul>
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
								<a href="index.html">home</a>
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