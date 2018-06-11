<?php
//include "login_system_2/db.php";
$connect = mysqli_connect("localhost", "root", "", "dreampark");
$keyWord=$_POST["word"];
$key =  ucwords($keyWord); 
//echo $KeyWord;
$sql = "SELECT * FROM package where pName='$key'";
$result = $connect->query($sql);
//$brand = $row["brand"];
        //$catgry = $row["catgry"];

//if ($result->num_rows > 0) {
    // output data of each row
   //while($row = $result->fetch_assoc()) {
        /*echo ("<img src=.$row[image]>"."<br>".
             "Registration Number :".$row["brand"]."<br>".
        	 "MFY :".$row["price"]."<br>".
        	 "Mileage :".$row["p_name"]."<br>".
        	 "Location :".$row["Location"]."<br>".
        	 "More :".$row["MoreDetails"]."<br>".
       		 "Price :".$row["Price"]. "<br>");
        echo"<hr>";*/
       if(mysqli_num_rows($result) > 0)
                        {//echo "string";
                          while($row = mysqli_fetch_array($result))
                            {


        $pId = $row["pId"];
        $pName = $row["pName"];
        $description = $row["description"];
        $price=$row["price"];
        
        

      echo '<script>window.location = "searchRes.php?id='.$pId.'&pName='.$pName.'&description='.$description.'&price='.$price.'"</script>';

 }   
} else {
    echo "0 results";
}
$connect->close();
?>