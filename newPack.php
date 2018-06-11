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
  <div class="panel-heading">Add New Package
  <a class="pull-right" href="admin.php">Go Back</a>
  </div>
  

<form action="" method="post" style="align-content: center; height: 400px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Add new package here</h3>
<br>

<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Package Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="pName" placeholder="Package Name" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Description</label>
  <div class="col-10">
    <textarea class="form-control" name="description" placeholder="Description" id="example-text-input" style="width: 400px;"></textarea>
    
  </div>
</div>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Package Price</label>
  <div class="col-10">
    <input class="form-control" type="text" name="price" placeholder="Package Price" id="example-text-input">
  </div>
</div>

<p class="pull-left"><input type="submit" name="submit2" value="Add"></p>
<p class="pull-right"> <a href="admin.php"> Go back</a> </p> 
</form>

<?php
if(isset($_POST["submit2"]))
{
  
mysqli_query($connect,"insert into package(pName,description,price) values('$_POST[pName]','$_POST[description]','$_POST[price]')");
echo '<script>window.location="admin.php"</script>';

}
  
?>
       
    </div>
  </div>
</div>
</div>

		

	
</body>

</html>