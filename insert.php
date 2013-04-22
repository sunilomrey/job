<?php 
//defie connection string
$con=mysqli_connect("127.0.0.1","root","","bespoke");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//define sql query
$sql = "TRUNCATE TABLE admin";
mysqli_query($con,$sql);
$sql="insert into admin values('$_POST[price1]', '$_POST[price2]', '$_POST[price3]', '$_POST[price4]', '$_POST[price5]')";
//execute sql query using connection string
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

//mysqli_close($con);


?>