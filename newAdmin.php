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
  <div class="panel-heading">Creat an Admin
  <a class="pull-right" href="admin.php">Go Back</a>
  </div>
  

<form action="" method="post" style="align-content: center; height: 300px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Register here</h3>
<br>

<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Admin Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="adminName" placeholder="Admin Name" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" name="password" placeholder="Password" id="example-password-input">
  </div>
</div>
<p class="pull-left"><input type="submit" name="submit2" value="Register"></p>
<p class="pull-right"> <a href="admin.php"> Go back</a> </p> 
</form>

<?php
if(isset($_POST["submit2"]))
{
  
mysqli_query($connect,"insert into admin(adminName,password) values('$_POST[adminName]','$_POST[password]')");
echo '<script>window.location="admin.php"</script>';

}
  
?>
       
    </div>
  </div>
</div>
</div>

		

	
</body>

</html>