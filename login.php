<?php
include('header.php');
?>
<body>
  
	<div id="background">
		<div id="page">
			<div id="header">
				
				<a href="index.php" class="logo">dream park</a>
				<ul>
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
				</ul>
			</div>
			<div id="body">

				<div class="panel panel-default">
  <!-- Default panel contents -->
 <div class="panel-heading">Login Page
  
  </div>
  
	<form action="" method="post" style="align-content: center; height: 300px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Login here</h3>
<br>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Username</label>
  <div class="col-10">
    <input class="form-control" type="text" name="username" placeholder="Username" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" name="password" placeholder="Password" id="example-password-input">
  </div>
</div>
<p class="pull-left"><input type="submit" name="submit1" value="Log in"></p>
<p class="pull-right">Don't have an account? <a href="register.php"> Sing Up</a> </p> 
</form>

	<?php
	if(isset($_POST["submit1"]))
	{
	
	
	$res=mysqli_query($connect,"select * from user where username='$_POST[username]' && password='$_POST[password]'");
	while($row=mysqli_fetch_array($res))
	{
	$_SESSION["user"]=$row["username"];
	$_SESSION['logged_in'] = true;
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php	
	}
	
	
	
	
	}
	
	?>
				
		</div>
	</div
    

	
</body>
</html>