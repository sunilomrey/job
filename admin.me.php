<!DOCTYPE html>
<html>

<head>
<link type="text/css" rel="stylesheet" href="style1.css" />
<link type="text/css" rel="stylesheet" href="bespoke.css" />
<script type="text/javascript" src="bespoke.js"></script>

</head>
<body>
<div>
    <h2>Price Change</h2>
</div>
<form action="insert.php" method="post">
     
         <div style="float:left;padding-right:130px; margin-left:30px;"> <h3>Shoes Price</h3></div>
		 <div style="padding-top:25px; paddng-left:25px"><input type="text" name="price1" id="price10"></div>
	 	 &nbsp;<br>&nbsp;<br>
	
         <div style="float:left; padding-right:124px; margin-left:30px;"><h3>Tassels Price</h3></div>
         <div style="padding-top:25px; paddng-left:25px"><input type="text" name="price2" id="price11"></div>		 
	 &nbsp;<br>&nbsp;<br>
	
	     <div style="float:left; padding-right:104px; margin-left:30px;"><h3>Monogram Price</h3></div>
		 <div style="padding-top:25px; paddng-left:25px"><input type="text" name="price3" id="price12"></div>
	 &nbsp;<br>&nbsp;<br>
   
	     <div style="float:left; padding-right:80px; margin-left:30px;"><h3>Domenstic Shipping</h3></div>
		 <div style="padding-top:25px; paddng-left:25px"><input type="text" name="price4" id="price13"></div>
     	 &nbsp;<br>&nbsp;<br>

	     <div style="float:left; padding-right:66px; margin-left:30px;"><h3>International Shipping</h3></div>
		 <div style="padding-top:25px; paddng-left:25px"><input type="text" name="price5" id="price14"></div>
	 
	 <div style="width:185px; padding-right:30px; float:left; padding-top:15px; padding-left:16px;" class="textgrey">&nbsp;</div>
                <div style="width:235px; float:left; padding-top:50px; height:25px; padding-bottom:20px; margin-left:-100px"><input name="Submit" type="submit" value="submit" style="background:#59903A;color:white"></div>  
				<div style="float:right; margin-top:-450px; margin-right:50px;"><h2>Present Prices</h2></div>
				
				
				<div style="float:right; margin-top:-370px; margin-right:50px; width:200px; height:200px">
				
				<?php 
				$con=mysqli_connect("127.0.0.1","root","","bespoke");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
				$result = mysqli_query($con,"SELECT * FROM admin");

echo "<table border='1'>
<tr>
<th>price1</th>
<th>price2</th>
<th>price3</th>
<th>price4</th>
<th>price5</th>
</tr>";

$row = mysqli_fetch_array($result);
  
  echo "<tr>";
  echo "<td>" . $row['shoesprice'] . "</td>";
  echo "<td>" . $row['tasselprice'] . "</td>";
  echo "<td>" . $row['monogramprice'] . "</td>";
  echo "<td>" . $row['domesticshipping'] . "</td>";
  echo "<td>" . $row['internationalshipping'] . "</td>";
  echo "</tr>";
  
echo "</table>";

mysqli_close($con); 

?>

</div>
</form>	 
</body>
</html>